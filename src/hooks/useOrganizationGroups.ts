import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationGroupService } from '../services/organizationGroupService';
import { CreateOrganizationGroupData, UpdateOrganizationGroupData } from '../types';

export function useOrganizationGroups() {
  return useQuery({
    queryKey: ['organizationGroups'],
    queryFn: () => organizationGroupService.getAll(),
  });
}

export function useOrganizationGroup(group_id: number) {
  return useQuery({
    queryKey: ['organizationGroup', group_id],
    queryFn: () => organizationGroupService.getById(group_id),
    enabled: !!group_id,
  });
}

export function useCreateOrganizationGroup() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationGroupData) => organizationGroupService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizationGroups'] });
    },
  });
}

export function useUpdateOrganizationGroup() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ group_id, data }: { group_id: number; data: UpdateOrganizationGroupData }) =>
      organizationGroupService.update(group_id, data),
    onSuccess: (_, { group_id }) => {
      queryClient.invalidateQueries({ queryKey: ['organizationGroups'] });
      queryClient.invalidateQueries({ queryKey: ['organizationGroup', group_id] });
    },
  });
}

export function useDeleteOrganizationGroup() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (group_id: number) => organizationGroupService.delete(group_id),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizationGroups'] });
    },
  });
}
