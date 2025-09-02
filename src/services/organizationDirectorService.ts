import { apiClient } from '../config/api';
import { OrganizationDirector, CreateOrganizationDirectorData, UpdateOrganizationDirectorData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationDirectorService {
  async getAll(org_id: number): Promise<OrganizationDirector[]> {
    const response = await apiClient.get<ApiResponse<OrganizationDirector[]>>({ table: 'organization_director', searchField: 'org_id', searchFor: org_id });
    return response.data;
  }

  async getById(director_id: number): Promise<OrganizationDirector | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationDirector>>({ table: 'organization_director', editid1: director_id });
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

  async create(data: CreateOrganizationDirectorData): Promise<OrganizationDirector> {
    const response = await apiClient.post<ApiResponse<OrganizationDirector>>({ table: 'organization_director', ...data });
    return response.data;
  }

  async update(director_id: number, data: UpdateOrganizationDirectorData): Promise<OrganizationDirector | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_director', editid1: director_id, ...data });
      return await this.getById(director_id);
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

  async delete(director_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_director', editid1: director_id });
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

export const organizationDirectorService = new OrganizationDirectorService();
