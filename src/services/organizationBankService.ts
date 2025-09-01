import { apiClient } from '../config/api';
import { OrganizationBank, CreateOrganizationBankData, UpdateOrganizationBankData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationBankService {
  private tableName = 'organization_bank';

  async getAll(): Promise<OrganizationBank[]> {
    const response = await apiClient.get<ApiResponse<OrganizationBank[]>>({ table: this.tableName });
    return response.data;
  }

  async getById(bank_id: number): Promise<OrganizationBank | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationBank>>({ table: this.tableName, editid1: bank_id });
      return response.data;
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async getByOrganization(org_id: number): Promise<OrganizationBank[]> {
    const response = await apiClient.get<ApiResponse<OrganizationBank[]>>({ table: this.tableName, q: `(org_id~equals~${org_id})` });
    return response.data;
  }

  async create(data: CreateOrganizationBankData): Promise<OrganizationBank> {
    const response = await apiClient.post<ApiResponse<OrganizationBank>>({ table: this.tableName, ...data });
    return response.data;
  }

  async update(bank_id: number, data: UpdateOrganizationBankData): Promise<OrganizationBank | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: this.tableName, editid1: bank_id, ...data });
      return await this.getById(bank_id);
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return null;
      }
      throw error;
    }
  }

  async delete(bank_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: this.tableName, editid1: bank_id });
      return true;
    } catch (error) {
      if (error instanceof Error && error.message.includes("Record was not found")) {
        return false;
      }
      throw error;
    }
  }
}

export const organizationBankService = new OrganizationBankService();
