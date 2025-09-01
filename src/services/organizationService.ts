import { apiClient } from '../config/api';
import { Organization, CreateOrganizationData, UpdateOrganizationData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationService {
  async getAll(): Promise<Organization[]> {
    const response = await apiClient.get<ApiResponse<Organization[]>>({ table: 'ORGANIZATION' });
    return response.data;
  }

  async getById(org_id: number): Promise<Organization | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<Organization>>({ table: 'ORGANIZATION', editid1: org_id });
      return response.data;
    } catch (error) {
      // The new API might return an error for not found, need to adjust based on actual API behavior
      if (error instanceof Error && error.message.toLowerCase().includes('not found')) {
        return null;
      }
      // Assuming the API returns a specific error for "record not found"
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async create(data: CreateOrganizationData): Promise<Organization> {
    const response = await apiClient.post<ApiResponse<Organization>>({ table: 'ORGANIZATION', ...data });
    return response.data;
  }

  async update(org_id: number, data: UpdateOrganizationData): Promise<Organization | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'ORGANIZATION', editid1: org_id, ...data });
      // New API doesn't return the updated object, so we fetch it again.
      return await this.getById(org_id);
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

  async delete(org_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'ORGANIZATION', editid1: org_id });
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

  async search(query: string): Promise<Organization[]> {
    const response = await apiClient.get<ApiResponse<Organization[]>>({ table: 'ORGANIZATION', qs: query });
    return response.data;
  }
}

export const organizationService = new OrganizationService();