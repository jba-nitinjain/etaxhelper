export interface Contact {
  id: string;
  firstName: string;
  lastName: string;
  email: string;
  phone: string;
  company: string;
  position: string;
  source: 'website' | 'referral' | 'cold_call' | 'social_media' | 'event' | 'other';
  status: 'active' | 'inactive' | 'prospect';
  tags: string[];
  notes: string;
  createdAt: Date;
  updatedAt: Date;
  lastContactDate?: Date;
}

export interface Organization {
  org_id: number;
  org_type: 'Proprietorship' | 'Partnership' | 'Private Limited' | 'Public Limited' | 'LLP' | 'NGO' | 'Cooperative' | 'Government' | 'Individual' | 'Other';
  company_name?: string;
  display_name: string;
  email?: string;
  phone_work?: string;
}

export interface OrganizationContact {
  contact_id: number;
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