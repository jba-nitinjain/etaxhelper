from playwright.sync_api import sync_playwright, expect

def run(playwright):
    browser = playwright.chromium.launch(headless=True)
    context = browser.new_context()
    page = context.new_page()

    page.goto("http://localhost:5173/contacts")

    # Wait for the main content to load
    page.wait_for_selector('h1:has-text("Contacts")', timeout=60000)

    # Click the "Add New Contact" button.
    page.get_by_role("button", name="Add New Contact").click()

    # Fill in the pincode
    page.locator('input[name="pin"]').fill("226001")

    # Wait for the city and country to be autofilled
    expect(page.locator('input[name="city"]')).to_have_value("Lucknow", timeout=10000)
    expect(page.locator('input[name="country"]')).to_have_value("India")


    page.screenshot(path="jules-scratch/verification/verification.png")

    browser.close()

with sync_playwright() as playwright:
    run(playwright)
