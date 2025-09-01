// Database schema interfaces matching etaxhelper.sql exactly
export interface Organization {
  org_id: number;
  org_type: 'Proprietorship' | 'Partnership' | 'Private Limited' | 'Public Limited' | 'LLP' | 'NGO' | 'Cooperative' | 'Government' | 'Individual' | 'Other' | null;
  company_name: string | null;
  display_name: string;
  email: string | null;
  phone_work: string | null;
}

export interface OrganizationContact {
  contact_id: number;
  org_id: number;
  NAME: string;
  designation: string | null;
  email: string | null;
  phone: string | null;
  dob: Date | null;
  city: string | null;
  pin: string | null;
  country: string | null;
  // Joined data from Organization table
  organization?: Organization;
}

export interface OrganizationBank {
  bank_id: number;
  org_id: number;
  bank_name: string;
  branch_name: string | null;
  account_no: string;
  ifsc_code: string | null;
  swift_code: string | null;
  account_type: string | null;
  mode_of_operation: 'Singly' | 'Jointly' | 'Any two jointly' | 'Either or survivor' | 'Other' | null;
}

export interface OrganizationBankSignatory {
  signatory_id: number;
  bank_id: number;
  NAME: string;
  designation: string | null;
  email: string | null;
  phone: string | null;
}

export interface OrganizationBranch {
  branch_id: number;
  org_id: number;
  branch_name: string | null;
  address_line: string | null;
  city: string | null;
  state: string | null;
  postal_code: string | null;
  country: string | null;
  phone: string | null;
  email: string | null;
}

export interface OrganizationDirector {
  director_id: number;
  org_id: number;
  NAME: string;
  designation: string | null;
  email: string | null;
  phone: string | null;
  din_number: string | null;
  dob: Date | null;
  city: string | null;
  pin: string | null;
  country: string | null;
  date_of_appointment: Date | null;
}

export interface OrganizationLogin {
  login_id: number;
  org_id: number;
  related_social_id: number | null;
  website: string;
  user_id: string;
  PASSWORD: string;
  notes: string | null;
  last_updated: Date;
}

export interface OrganizationRegistration {
  reg_id: number;
  org_id: number;
  reg_type: string | null;
  reg_number: string | null;
  valid_from: Date | null;
  valid_to: Date | null;
}

export interface OrganizationSocialMedia {
  social_id: number;
  org_id: number;
  platform: string;
  handle_name: string | null;
  website: string | null;
  mobile_app: string | null;
}

// Form data types for creating/updating records
export interface CreateOrganizationData {
  org_type?: Organization['org_type'];
  company_name?: string;
  display_name: string;
  email?: string;
  phone_work?: string;
}

export interface CreateOrganizationContactData {
  org_id: number;
  NAME: string;
  designation?: string;
  email?: string;
  phone?: string;
  dob?: Date;
  city?: string;
  pin?: string;
  country?: string;
}

export interface UpdateOrganizationData extends Partial<CreateOrganizationData> {}
export interface UpdateOrganizationContactData extends Partial<CreateOrganizationContactData> {}