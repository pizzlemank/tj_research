import asyncio
from playwright.async_api import async_playwright
import os

async def verify_comps():
    async with async_playwright() as p:
        # Browser setup
        browser = await p.chromium.launch()
        
        # 1. Desktop Verification
        page = await browser.new_page(viewport={'width': 1920, 'height': 1080})
        # Use file path
        current_dir = os.getcwd()
        file_url = f"file://{current_dir}/comps.html"
        await page.goto(file_url)
        
        # Take desktop screenshot
        await page.screenshot(path="verification/screenshots/comps_desktop_final.png", full_page=True)
        print("Desktop screenshot saved.")
        
        # Verify images are visible
        images = await page.query_selector_all(".prop-img")
        print(f"Found {len(images)} property images.")
        
        # 2. Mobile Verification (iPhone 12 size)
        mobile_page = await browser.new_page(
            viewport={'width': 390, 'height': 844},
            user_agent="Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0 Mobile/15E148 Safari/604.1"
        )
        await mobile_page.goto(file_url)
        
        # Wait for content
        await mobile_page.wait_for_selector("tr")
        
        # Take mobile screenshot
        await mobile_page.screenshot(path="verification/screenshots/comps_mobile_final.png")
        print("Mobile screenshot saved.")
        
        # Verify card layout
        # In mobile, td:first-child should be the image and take full width
        first_td_box = await mobile_page.locator("tr:first-child td:first-child").bounding_box()
        print(f"Mobile first cell (image) width: {first_td_box['width']}px")
        
        await browser.close()

if __name__ == "__main__":
    os.makedirs("verification/screenshots", exist_ok=True)
    asyncio.run(verify_comps())
