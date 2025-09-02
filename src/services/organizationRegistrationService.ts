import { apiClient } from '../config/api';
import { OrganizationRegistration, CreateOrganizationRegistrationData, UpdateOrganizationRegistrationData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationRegistrationService {
  async getAll(org_id: number): Promise<OrganizationRegistration[]> {
    const response = await apiClient.get<ApiResponse<OrganizationRegistration[]>>({ table: 'organization_registration', searchField: 'org_id', searchFor: org_id });
    return response.data;
  }

  async getById(reg_id: number): Promise<OrganizationRegistration | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationRegistration>>({ table: 'organization_registration', editid1: reg_id });
      return response.data;
    } catch (error) {
      if (error instanceof Error && error.message.toLowerCase().includes('not found')) {
        return null;
      }
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async create(data: CreateOrganizationRegistrationData): Promise<OrganizationRegistration> {
    const response = await apiClient.post<ApiResponse<OrganizationRegistration>>({ table: 'organization_registration', ...data });
    return response.data;
  }

  async update(reg_id: number, data: UpdateOrganizationRegistrationData): Promise<OrganizationRegistration | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_registration', editid1: reg_id, ...data });
      return await this.getById(reg_id);
    } catch (error) {
      if (error instanceof Error && error.message.toLowerCase().includes('not found')) {
        return null;
      }
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async delete(reg_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_registration', editid1: reg_id });
      return true;
    } catch (error) {
      if (error instanceof Error && error.message.toLowerCase().includes('not found')) {
        return false;
      }
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return false;
      }
      throw error;
    }
  }
}

export const organizationRegistrationService = new OrganizationRegistrationService();
