from playwright.sync_api import sync_playwright, expect
import time

def run_verification():
    with sync_playwright() as p:
        browser = p.chromium.launch(headless=True)
        page = browser.new_page()

        test_org_name = f"TestCorp_{int(time.time())}"

        try:
            # 1. Navigate to the Organizations page
            page.goto("http://localhost:5173/organizations", timeout=90000)
            heading = page.get_by_role("heading", name="Organizations")
            expect(heading).to_be_visible(timeout=60000)

            # --- CREATE ---
            # 2. Click "Add New" button
            add_new_button = page.get_by_role("button", name="Add New")
            expect(add_new_button).to_be_visible()
            add_new_button.click()

            # 3. Fill out the form
            form_heading = page.get_by_role("heading", name="Add New Organization")
            expect(form_heading).to_be_visible()

            page.get_by_label("Display Name *").fill(test_org_name)
            page.get_by_label("Company Name").fill("Test Company Inc.")
            page.get_by_label("Email").fill("test@testcorp.com")
            page.get_by_label("Work Phone").fill("123-456-7890")
            page.get_by_label("Organization Type").select_option("Private Limited")

            # 4. Submit the form
            submit_button = page.get_by_role("button", name="Create Organization")
            submit_button.click()

            # 5. Verify the new organization appears in the table
            expect(form_heading).not_to_be_visible() # Wait for form to close
            new_org_row = page.get_by_role("row", name=test_org_name)
            expect(new_org_row).to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/01_create_success.png")
            print("CREATE successful.")

            # --- UPDATE ---
            # 6. Click Edit button
            edit_button = new_org_row.get_by_role("button", name="Edit Organization")
            edit_button.click()

            # 7. Change details in the form
            form_heading_edit = page.get_by_role("heading", name="Edit Organization")
            expect(form_heading_edit).to_be_visible()

            updated_phone = "987-654-3210"
            page.get_by_label("Work Phone").fill(updated_phone)

            # 8. Submit the form
            update_button = page.get_by_role("button", name="Update Organization")
            update_button.click()

            # 9. Verify updated details
            expect(form_heading_edit).not_to_be_visible()
            expect(new_org_row.get_by_text(updated_phone)).to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/02_update_success.png")
            print("UPDATE successful.")

            # --- DELETE ---
            # 10. Click Delete button
            delete_button = new_org_row.get_by_role("button", name="Delete Organization")

            # Handle confirmation dialog
            page.on("dialog", lambda dialog: dialog.accept())

            delete_button.click()

            # 11. Verify the organization is removed
            expect(new_org_row).not_to_be_visible(timeout=30000)
            page.screenshot(path="jules-scratch/verification/03_delete_success.png")
            print("DELETE successful.")

            print("Verification script completed successfully.")

        except Exception as e:
            print(f"An error occurred during verification: {e}")
            page.screenshot(path="jules-scratch/verification/error.png")

        finally:
            browser.close()

if __name__ == "__main__":
    run_verification()
