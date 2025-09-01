import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationService } from '../services/organizationService';
import { CreateOrganizationData, UpdateOrganizationData } from '../types';

export function useOrganizations() {
  return useQuery({
    queryKey: ['organizations'],
    queryFn: () => organizationService.getAll(),
  });
}

export function useOrganization(org_id: number) {
  return useQuery({
    queryKey: ['organization', org_id],
    queryFn: () => organizationService.getById(org_id),
    enabled: !!org_id,
  });
}

export function useCreateOrganization() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: CreateOrganizationData) => organizationService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizations'] });
    },
  });
}

export function useUpdateOrganization() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ org_id, data }: { org_id: number; data: UpdateOrganizationData }) =>
      organizationService.update(org_id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizations'] });
    },
  });
}

export function useDeleteOrganization() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (org_id: number) => organizationService.delete(org_id),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizations'] });
    },
  });
}

export function useSearchOrganizations(query: string) {
  return useQuery({
    queryKey: ['organizations', 'search', query],
    queryFn: () => organizationService.search(query),
    enabled: !!query,
  });
}