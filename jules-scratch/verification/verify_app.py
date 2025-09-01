from playwright.sync_api import sync_playwright, expect
import time

def run_verification():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=True)
        page = browser.new_page()

        test_org_name = f"TestCorp_{int(time.time())}"
        test_bank_name = f"TestBank_{int(time.time())}"

        try:
            # --- SETUP: Create an organization first ---
            page.goto("http://localhost:5173/organizations", timeout=90000)
            page.get_by_role("button", name="Add New").click()
            page.get_by_label("Display Name *").fill(test_org_name)
            page.get_by_role("button", name="Create Organization").click()
            expect(page.get_by_role("row", name=test_org_name)).to_be_visible(timeout=30000)
            print("SETUP: Organization created.")

            # --- TEST `organization_bank` CRUD ---
            # 1. Navigate to the Bank Accounts page
            page.get_by_role("link", name="Bank Accounts").click()
            heading = page.get_by_role("heading", name="Bank Accounts")
            expect(heading).to_be_visible(timeout=60000)

            # --- CREATE ---
            page.get_by_role("button", name="Add New").click()
            form_heading = page.get_by_role("heading", name="Add New Bank Account")
            expect(form_heading).to_be_visible()

            page.get_by_label("Organization *").select_option(label=test_org_name)
            page.get_by_label("Bank Name *").fill(test_bank_name)
            page.get_by_label("Account Number *").fill("1234567890")
            page.get_by_role("button", name="Create Bank Account").click()

            expect(form_heading).not_to_be_visible()
            new_bank_row = page.get_by_text(test_bank_name)
            expect(new_bank_row).to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/04_bank_create_success.png")
            print("CREATE successful for bank.")

            # --- UPDATE ---
            # This locator is not robust enough, let's find a better one
            bank_row_to_edit = page.locator(f"tr:has-text('{test_bank_name}')")
            bank_row_to_edit.get_by_role("button", name="Edit Bank").click()

            form_heading_edit = page.get_by_role("heading", name="Edit Bank Account")
            expect(form_heading_edit).to_be_visible()

            updated_account_no = "0987654321"
            page.get_by_label("Account Number *").fill(updated_account_no)
            page.get_by_role("button", name="Update Bank Account").click()

            expect(form_heading_edit).not_to_be_visible()
            expect(page.get_by_text(updated_account_no)).to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/05_bank_update_success.png")
            print("UPDATE successful for bank.")

            # --- DELETE ---
            page.on("dialog", lambda dialog: dialog.accept())
            bank_row_to_edit.get_by_role("button", name="Delete Bank").click()

            expect(page.get_by_text(test_bank_name)).not_to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/06_bank_delete_success.png")
            print("DELETE successful for bank.")

        except Exception as e:
            print(f"An error occurred during verification: {e}")
            page.screenshot(path="jules-scratch/verification/error.png")

        finally:
            # --- CLEANUP: Delete the organization ---
            page.goto("http://localhost:5173/organizations", timeout=90000)
            try:
                org_row = page.get_by_role("row", name=test_org_name)
                if org_row.is_visible():
                    page.on("dialog", lambda dialog: dialog.accept())
                    org_row.get_by_role("button", name="Delete Organization").click()
                    print("CLEANUP: Organization deleted.")
            except Exception as e:
                print(f"Cleanup failed, maybe the org was already deleted: {e}")

            browser.close()

if __name__ == "__main__":
    run_verification()
