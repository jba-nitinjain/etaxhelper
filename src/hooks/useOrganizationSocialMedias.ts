import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationSocialMediaService } from '../services/organizationSocialMediaService';
import { CreateOrganizationSocialMediaData, UpdateOrganizationSocialMediaData } from '../types';

export function useOrganizationSocialMedias(org_id: number) {
  return useQuery({
    queryKey: ['organizationSocialMedias', org_id],
    queryFn: () => organizationSocialMediaService.getAll(org_id),
    enabled: !!org_id,
  });
}

export function useOrganizationSocialMedia(social_id: number) {
  return useQuery({
    queryKey: ['organizationSocialMedia', social_id],
    queryFn: () => organizationSocialMediaService.getById(social_id),
    enabled: !!social_id,
  });
}

export function useCreateOrganizationSocialMedia() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationSocialMediaData) => organizationSocialMediaService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationSocialMedias', data.org_id] });
    },
  });
}

export function useUpdateOrganizationSocialMedia() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ social_id, data }: { social_id: number; data: UpdateOrganizationSocialMediaData }) =>
      organizationSocialMediaService.update(social_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationSocialMedias', data.org_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationSocialMedia', data.social_id] });
      }
    },
  });
}

export function useDeleteOrganizationSocialMedia() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (social_id: number) => organizationSocialMediaService.delete(social_id),
    onSuccess: () => {
        queryClient.invalidateQueries({ queryKey: ['organizationSocialMedias'] });
    },
  });
}
