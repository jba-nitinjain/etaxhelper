import { apiClient } from '../config/api';
import { OrganizationContact, CreateOrganizationContactData, UpdateOrganizationContactData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class ContactService {
  private tableName = 'organization_contact';

  async getAll(): Promise<OrganizationContact[]> {
    const response = await apiClient.get<ApiResponse<OrganizationContact[]>>({ table: this.tableName });
    return response.data;
  }

  async getById(contact_id: number): Promise<OrganizationContact | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationContact>>({ table: this.tableName, editid1: contact_id });
      return response.data;
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async getByOrganization(org_id: number): Promise<OrganizationContact[]> {
    // Assuming the foreign key is `org_id`. This needs to be confirmed.
    const response = await apiClient.get<ApiResponse<OrganizationContact[]>>({ table: this.tableName, q: `(org_id~equals~${org_id})` });
    return response.data;
  }

  async create(data: CreateOrganizationContactData): Promise<OrganizationContact> {
    const response = await apiClient.post<ApiResponse<OrganizationContact>>({ table: this.tableName, ...data });
    return response.data;
  }

  async update(contact_id: number, data: UpdateOrganizationContactData): Promise<OrganizationContact | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: this.tableName, editid1: contact_id, ...data });
      return await this.getById(contact_id);
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async delete(contact_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: this.tableName, editid1: contact_id });
      return true;
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return false;
      }
      throw error;
    }
  }

  async search(query: string): Promise<OrganizationContact[]> {
    const response = await apiClient.get<ApiResponse<OrganizationContact[]>>({ table: this.tableName, qs: query });
    return response.data;
  }
}

export const contactService = new ContactService();