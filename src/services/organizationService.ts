import { apiClient } from '../config/api';
import { Organization, CreateOrganizationData, UpdateOrganizationData } from '../types';

class OrganizationService {
  async getAll(): Promise<Organization[]> {
    return apiClient.get<Organization[]>('/organizations');
  }

  async getById(org_id: number): Promise<Organization | null> {
    try {
      return await apiClient.get<Organization>(`/organizations/${org_id}`);
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return null;
      }
      throw error;
    }
  }

  async create(data: CreateOrganizationData): Promise<Organization> {
    return apiClient.post<Organization>('/organizations', data);
  }

  async update(org_id: number, data: UpdateOrganizationData): Promise<Organization | null> {
    try {
      return await apiClient.put<Organization>(`/organizations/${org_id}`, data);
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return null;
      }
      throw error;
    }
  }

  async delete(org_id: number): Promise<boolean> {
    try {
      await apiClient.delete(`/organizations/${org_id}`);
      return true;
    } catch (error) {
      if (error instanceof Error && error.message.includes('404')) {
        return false;
      }
      throw error;
    }
  }

  async search(query: string): Promise<Organization[]> {
    return apiClient.get<Organization[]>(`/organizations/search/${encodeURIComponent(query)}`);
  }
}

export const organizationService = new OrganizationService();