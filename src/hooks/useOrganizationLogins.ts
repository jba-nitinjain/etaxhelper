import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationLoginService } from '../services/organizationLoginService';
import { CreateOrganizationLoginData, UpdateOrganizationLoginData } from '../types';

export function useOrganizationLogins(org_id: number) {
  return useQuery({
    queryKey: ['organizationLogins', org_id],
    queryFn: () => organizationLoginService.getAll(org_id),
    enabled: !!org_id,
  });
}

export function useOrganizationLogin(login_id: number) {
  return useQuery({
    queryKey: ['organizationLogin', login_id],
    queryFn: () => organizationLoginService.getById(login_id),
    enabled: !!login_id,
  });
}

export function useCreateOrganizationLogin() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationLoginData) => organizationLoginService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationLogins', data.org_id] });
    },
  });
}

export function useUpdateOrganizationLogin() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ login_id, data }: { login_id: number; data: UpdateOrganizationLoginData }) =>
      organizationLoginService.update(login_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationLogins', data.org_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationLogin', data.login_id] });
      }
    },
  });
}

export function useDeleteOrganizationLogin() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (login_id: number) => organizationLoginService.delete(login_id),
    onSuccess: () => {
        queryClient.invalidateQueries({ queryKey: ['organizationLogins'] });
    },
  });
}
