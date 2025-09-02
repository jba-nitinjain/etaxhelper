from playwright.sync_api import sync_playwright

def run(playwright):
    browser = playwright.chromium.launch(headless=True)
    context = browser.new_context()
    page = context.new_page()

    try:
        # Navigate to the app
        page.goto("http://localhost:5173/")
        page.wait_for_selector("text=Dashboard")

        # Take a screenshot of the main page with the new sidebar
        page.screenshot(path="jules-scratch/verification/01_sidebar.png")

        # Go to organization branches page
        page.click("text=Branches")
        page.wait_for_selector("text=Organization Branches")
        page.screenshot(path="jules-scratch/verification/02_branches.png")

        # Go to organization directors page
        page.click("text=Directors")
        page.wait_for_selector("text=Organization Directors")
        page.screenshot(path="jules-scratch/verification/03_directors.png")

        # Go to organization groups page
        page.click("text=Groups")
        page.wait_for_selector("text=Organization Groups")
        page.screenshot(path="jules-scratch/verification/04_groups.png")

        # Go to organization logins page
        page.click("text=Logins")
        page.wait_for_selector("text=Website Logins")
        page.screenshot(path="jules-scratch/verification/05_logins.png")

        # Go to organization registrations page
        page.click("text=Registrations")
        page.wait_for_selector("text=Registrations")
        page.screenshot(path="jules-scratch/verification/06_registrations.png")

        # Go to organization social media page
        page.click("text=Social Media")
        page.wait_for_selector("text=Social Media Accounts")
        page.screenshot(path="jules-scratch/verification/07_social_media.png")

        # Go to organization bank signatories page
        page.click("text=Bank Signatories")
        page.wait_for_selector("text=Bank Account Signatories")
        page.screenshot(path="jules-scratch/verification/08_bank_signatories.png")

    except Exception as e:
        print(f"An error occurred: {e}")
        page.screenshot(path="jules-scratch/verification/error.png")
    finally:
        browser.close()

with sync_playwright() as playwright:
    run(playwright)
