from playwright.sync_api import sync_playwright, expect

def run_verification():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=True)
        page = browser.new_page()

        try:
            # 1. Navigate to the application
            page.goto("http://localhost:5173", timeout=90000)

            # 2. Navigate to the Organizations page
            org_link = page.get_by_role("link", name="Organizations")
            expect(org_link).to_be_visible(timeout=60000)
            org_link.click()

            # 3. Wait for the main heading to be visible
            heading = page.get_by_role("heading", name="Organizations")
            expect(heading).to_be_visible(timeout=60000)

            # 4. The table will be empty, which is expected.
            # We can check for the "No organizations found" message if it exists,
            # or just take a screenshot.
            # For now, just wait for the heading and take a screenshot.

            # 5. Take a screenshot
            page.screenshot(path="jules-scratch/verification/verification.png")

            print("Verification script completed successfully.")

        except Exception as e:
            print(f"An error occurred during verification: {e}")
            page.screenshot(path="jules-scratch/verification/error.png")

        finally:
            browser.close()

if __name__ == "__main__":
    run_verification()
