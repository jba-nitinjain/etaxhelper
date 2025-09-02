import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationBranchService } from '../services/organizationBranchService';
import { CreateOrganizationBranchData, UpdateOrganizationBranchData } from '../types';

export function useOrganizationBranches(org_id: number) {
  return useQuery({
    queryKey: ['organizationBranches', org_id],
    queryFn: () => organizationBranchService.getAll(org_id),
    enabled: !!org_id,
  });
}

export function useOrganizationBranch(branch_id: number) {
  return useQuery({
    queryKey: ['organizationBranch', branch_id],
    queryFn: () => organizationBranchService.getById(branch_id),
    enabled: !!branch_id,
  });
}

export function useCreateOrganizationBranch() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationBranchData) => organizationBranchService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationBranches', data.org_id] });
    },
  });
}

export function useUpdateOrganizationBranch() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ branch_id, data }: { branch_id: number; data: UpdateOrganizationBranchData }) =>
      organizationBranchService.update(branch_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationBranches', data.org_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationBranch', data.branch_id] });
      }
    },
  });
}

export function useDeleteOrganizationBranch() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (branch_id: number) => organizationBranchService.delete(branch_id),
    onSuccess: (_, branch_id) => {
        // This is a bit of a hack, we don't know the org_id here.
        // A better solution would be to return the org_id from the delete mutation.
        // For now, we'll just invalidate all branch queries.
        queryClient.invalidateQueries({ queryKey: ['organizationBranches'] });
    },
  });
}
