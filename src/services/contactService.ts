import { apiClient } from '../config/api';
import { OrganizationContact, CreateOrganizationContactData, UpdateOrganizationContactData } from '../types';

class ContactService {
  async getAll(): Promise<OrganizationContact[]> {
    return apiClient.get<OrganizationContact[]>('/contacts');
  }

  async getById(contact_id: number): Promise<OrganizationContact | null> {
    try {
      return await apiClient.get<OrganizationContact>(`/contacts/${contact_id}`);
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return null;
      }
      throw error;
    }
  }

  async getByOrganization(org_id: number): Promise<OrganizationContact[]> {
    return apiClient.get<OrganizationContact[]>(`/contacts/organization/${org_id}`);
  }

  async create(data: CreateOrganizationContactData): Promise<OrganizationContact> {
    return apiClient.post<OrganizationContact>('/contacts', data);
  }

  async update(contact_id: number, data: UpdateOrganizationContactData): Promise<OrganizationContact | null> {
    try {
      return await apiClient.put<OrganizationContact>(`/contacts/${contact_id}`, data);
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return null;
      }
      throw error;
    }
  }

  async delete(contact_id: number): Promise<boolean> {
    try {
      await apiClient.delete(`/contacts/${contact_id}`);
      return true;
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return false;
      }
      throw error;
    }
  }

  async search(query: string): Promise<OrganizationContact[]> {
    return apiClient.get<OrganizationContact[]>(`/contacts/search/${encodeURIComponent(query)}`);
  }
}

export const contactService = new ContactService();