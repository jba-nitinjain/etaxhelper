import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationRegistrationService } from '../services/organizationRegistrationService';
import { CreateOrganizationRegistrationData, UpdateOrganizationRegistrationData } from '../types';

export function useOrganizationRegistrations(org_id: number) {
  return useQuery({
    queryKey: ['organizationRegistrations', org_id],
    queryFn: () => organizationRegistrationService.getAll(org_id),
    enabled: !!org_id,
  });
}

export function useOrganizationRegistration(reg_id: number) {
  return useQuery({
    queryKey: ['organizationRegistration', reg_id],
    queryFn: () => organizationRegistrationService.getById(reg_id),
    enabled: !!reg_id,
  });
}

export function useCreateOrganizationRegistration() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationRegistrationData) => organizationRegistrationService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationRegistrations', data.org_id] });
    },
  });
}

export function useUpdateOrganizationRegistration() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ reg_id, data }: { reg_id: number; data: UpdateOrganizationRegistrationData }) =>
      organizationRegistrationService.update(reg_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationRegistrations', data.org_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationRegistration', data.reg_id] });
      }
    },
  });
}

export function useDeleteOrganizationRegistration() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (reg_id: number) => organizationRegistrationService.delete(reg_id),
    onSuccess: () => {
        queryClient.invalidateQueries({ queryKey: ['organizationRegistrations'] });
    },
  });
}
