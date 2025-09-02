import { apiClient } from '../config/api';
import { OrganizationGroup, CreateOrganizationGroupData, UpdateOrganizationGroupData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationGroupService {
  async getAll(): Promise<OrganizationGroup[]> {
    const response = await apiClient.get<ApiResponse<OrganizationGroup[]>>({ table: 'organization_group' });
    return response.data;
  }

  async getById(group_id: number): Promise<OrganizationGroup | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationGroup>>({ table: 'organization_group', editid1: group_id });
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

  async create(data: CreateOrganizationGroupData): Promise<OrganizationGroup> {
    const response = await apiClient.post<ApiResponse<OrganizationGroup>>({ table: 'organization_group', ...data });
    return response.data;
  }

  async update(group_id: number, data: UpdateOrganizationGroupData): Promise<OrganizationGroup | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_group', editid1: group_id, ...data });
      return await this.getById(group_id);
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

  async delete(group_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_group', editid1: group_id });
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

export const organizationGroupService = new OrganizationGroupService();
