import { apiClient } from '../config/api';
import { OrganizationBranch, CreateOrganizationBranchData, UpdateOrganizationBranchData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationBranchService {
  async getAll(org_id: number): Promise<OrganizationBranch[]> {
    const response = await apiClient.get<ApiResponse<OrganizationBranch[]>>({ table: 'organization_branch', searchField: 'org_id', searchFor: org_id });
    return response.data;
  }

  async getById(branch_id: number): Promise<OrganizationBranch | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationBranch>>({ table: 'organization_branch', editid1: branch_id });
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

  async create(data: CreateOrganizationBranchData): Promise<OrganizationBranch> {
    const response = await apiClient.post<ApiResponse<OrganizationBranch>>({ table: 'organization_branch', ...data });
    return response.data;
  }

  async update(branch_id: number, data: UpdateOrganizationBranchData): Promise<OrganizationBranch | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_branch', editid1: branch_id, ...data });
      return await this.getById(branch_id);
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

  async delete(branch_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_branch', editid1: branch_id });
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

export const organizationBranchService = new OrganizationBranchService();
