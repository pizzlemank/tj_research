import asyncio
from playwright.async_api import async_playwright
import os

async def verify_portal():
    async with async_playwright() as p:
        browser = await p.chromium.launch()
        context = await browser.new_context()
        page = await context.new_page()
        
        current_dir = os.getcwd()
        
        # 1. Verify Index
        await page.goto(f"file://{current_dir}/index.html")
        title = await page.inner_text(".logo-text")
        if "大將開發 | 市場調查" not in title:
            print(f"Error: Index title incorrect: {title}")
        
        # 2. Verify Comps Table Headers and Links
        await page.goto(f"file://{current_dir}/comps.html")
        headers = await page.locator("th").all_inner_texts()
        expected_headers = ["建案名稱 (Project)", "開發商 (Developer)", "地契", "入伙年份", "總價範圍 (S$)", "尺價範圍 (PSF)", "樓層", "單位", "外部連結"]
        for h in expected_headers:
            if h not in headers:
                print(f"Error: Header missing: {h}")
        
        # Check floor plan links
        links = await page.locator(".links a").all_inner_texts()
        has_floorplan = any("平面圖" in l for l in links)
        if not has_floorplan:
            print("Error: Floor plan links missing in comps.html")
            
        # 3. Verify Research Report
        await page.goto(f"file://{current_dir}/shareable_report_zh.html")
        content = await page.content()
        if "BLUF" in content:
            print("Error: BLUF still exists in the report")
        
        # Take a final screenshot of the index
        await page.goto(f"file://{current_dir}/index.html")
        await page.screenshot(path="verification/screenshots/final_index.png")
        
        await browser.close()
        print("Verification completed.")

if __name__ == "__main__":
    os.makedirs("verification/screenshots", exist_ok=True)
    asyncio.run(verify_portal())
