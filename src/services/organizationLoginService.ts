import { apiClient } from '../config/api';
import { OrganizationLogin, CreateOrganizationLoginData, UpdateOrganizationLoginData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationLoginService {
  async getAll(org_id: number): Promise<OrganizationLogin[]> {
    const response = await apiClient.get<ApiResponse<OrganizationLogin[]>>({ table: 'organization_login', searchField: 'org_id', searchFor: org_id });
    return response.data;
  }

  async getById(login_id: number): Promise<OrganizationLogin | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationLogin>>({ table: 'organization_login', editid1: login_id });
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

  async create(data: CreateOrganizationLoginData): Promise<OrganizationLogin> {
    const response = await apiClient.post<ApiResponse<OrganizationLogin>>({ table: 'organization_login', ...data });
    return response.data;
  }

  async update(login_id: number, data: UpdateOrganizationLoginData): Promise<OrganizationLogin | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_login', editid1: login_id, ...data });
      return await this.getById(login_id);
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

  async delete(login_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_login', editid1: login_id });
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

export const organizationLoginService = new OrganizationLoginService();
