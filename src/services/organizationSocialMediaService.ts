import { apiClient } from '../config/api';
import { OrganizationSocialMedia, CreateOrganizationSocialMediaData, UpdateOrganizationSocialMediaData } from '../types';

interface ApiResponse<T> {
  data: T;
  success: boolean;
}

class OrganizationSocialMediaService {
  async getAll(org_id: number): Promise<OrganizationSocialMedia[]> {
    const response = await apiClient.get<ApiResponse<OrganizationSocialMedia[]>>({ table: 'organization_social_media', searchField: 'org_id', searchFor: org_id });
    return response.data;
  }

  async getById(social_id: number): Promise<OrganizationSocialMedia | null> {
    try {
      const response = await apiClient.getSingle<ApiResponse<OrganizationSocialMedia>>({ table: 'organization_social_media', editid1: social_id });
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

  async create(data: CreateOrganizationSocialMediaData): Promise<OrganizationSocialMedia> {
    const response = await apiClient.post<ApiResponse<OrganizationSocialMedia>>({ table: 'organization_social_media', ...data });
    return response.data;
  }

  async update(social_id: number, data: UpdateOrganizationSocialMediaData): Promise<OrganizationSocialMedia | null> {
    try {
      await apiClient.put<ApiResponse<null>>({ table: 'organization_social_media', editid1: social_id, ...data });
      return await this.getById(social_id);
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

  async delete(social_id: number): Promise<boolean> {
    try {
      await apiClient.delete({ table: 'organization_social_media', editid1: social_id });
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

export const organizationSocialMediaService = new OrganizationSocialMediaService();
