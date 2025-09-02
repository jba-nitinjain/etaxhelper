import { apiClient } from '../config/api';
import { OrganizationBankSignatory, CreateOrganizationBankSignatoryData, UpdateOrganizationBankSignatoryData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationBankSignatoryService {
  async getAll(bank_id: number): Promise<OrganizationBankSignatory[]> {
    const response = await apiClient.get<ApiResponse<OrganizationBankSignatory[]>>({ table: 'organization_bank_signatory', searchField: 'bank_id', searchFor: bank_id });
    return response.data;
  }

  async getById(signatory_id: number): Promise<OrganizationBankSignatory | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationBankSignatory>>({ table: 'organization_bank_signatory', editid1: signatory_id });
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

  async create(data: CreateOrganizationBankSignatoryData): Promise<OrganizationBankSignatory> {
    const response = await apiClient.post<ApiResponse<OrganizationBankSignatory>>({ table: 'organization_bank_signatory', ...data });
    return response.data;
  }

  async update(signatory_id: number, data: UpdateOrganizationBankSignatoryData): Promise<OrganizationBankSignatory | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_bank_signatory', editid1: signatory_id, ...data });
      return await this.getById(signatory_id);
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

  async delete(signatory_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_bank_signatory', editid1: signatory_id });
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

export const organizationBankSignatoryService = new OrganizationBankSignatoryService();
