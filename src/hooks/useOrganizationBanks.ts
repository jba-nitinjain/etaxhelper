import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationBankService } from '../services/organizationBankService';
import { CreateOrganizationBankData, UpdateOrganizationBankData } from '../types';

export function useOrganizationBanks() {
  return useQuery({
    queryKey: ['organizationBanks'],
    queryFn: () => organizationBankService.getAll(),
  });
}

export function useOrganizationBank(bank_id: number) {
  return useQuery({
    queryKey: ['organizationBank', bank_id],
    queryFn: () => organizationBankService.getById(bank_id),
    enabled: !!bank_id,
  });
}

export function useOrganizationBanksByOrganization(org_id: number) {
  return useQuery({
    queryKey: ['organizationBanks', 'organization', org_id],
    queryFn: () => organizationBankService.getByOrganization(org_id),
    enabled: !!org_id,
  });
}

export function useCreateOrganizationBank() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationBankData) => organizationBankService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizationBanks'] });
    },
  });
}

export function useUpdateOrganizationBank() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ bank_id, data }: { bank_id: number; data: UpdateOrganizationBankData }) =>
      organizationBankService.update(bank_id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizationBanks'] });
    },
  });
}

export function useDeleteOrganizationBank() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (bank_id: number) => organizationBankService.delete(bank_id),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['organizationBanks'] });
    },
  });
}
