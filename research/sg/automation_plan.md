# Automation Plan: Weekly Real Estate Research Refresh

To maintain the accuracy of the Singapore private residential findings for the Meyer Road corridor, follow this automation and update cycle.

---

## 1. Refresh Cycle
*   **Frequency:** Weekly (Every Monday).
*   **Trigger Event:** Release of new URA REALIS caveat data or quarterly URA property price index updates.

## 2. Data Extraction Points
To update the findings, the following sources must be re-queried:
1.  **URA Transaction Portal / REALIS:** Filter for District 15, "Non-Landed Residential," and search by "Street Name: Meyer Road."
2.  **EdgeProp/PropertyGuru:** Check for changes in median asking PSF and new rental listings for yield recalculation.
3.  **URA Master Plan Updates:** Monitor for "Proposed Amendments" (as seen in Oct 2024 for Amber Road) that may change GPR (Gross Plot Ratio).

## 3. Tooling & Scripting (Proposed)
A Python-based automation script can be implemented to streamline the update:
*   **Scraping Module:** Uses `BeautifulSoup` or `Selenium` to fetch latest asking prices from public portals.
*   **Analysis Module:** Re-calculates estimated gross yield:
    *   `Yield = (Avg Annual Rent / Avg Purchase Price) * 100`
*   **Markdown Generator:** Automatically populates `document_1a.md` and `document_1b.md` templates with the latest values.

## 4. Manual Verification Steps
Even with automation, a Real Estate Executive should verify:
1.  **New Launches:** Identify any "En-bloc" success stories in D15 that could lead to new projects (e.g., recent Meyer Park redevelopment into Meyer Blue).
2.  **Policy Changes:** Check for MAS (Monetary Authority of Singapore) or IRAS (Inland Revenue Authority) announcements regarding ABSD/BSD rates.

## 5. Execution Steps for Agent
When triggered to "Refresh Data":
1.  Run `google_search` for: `"latest property transactions Meyer Road [Month Year]"`.
2.  Update the price ranges and yield percentages in the tables.
3.  Reflect any changes in the "Capital Appreciation" defense if new MRT stations/amenities have opened.
4.  Re-generate all four documents (1A, 1B, 2A, 2B) to ensure parity.
