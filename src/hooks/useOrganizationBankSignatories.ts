import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationBankSignatoryService } from '../services/organizationBankSignatoryService';
import { CreateOrganizationBankSignatoryData, UpdateOrganizationBankSignatoryData } from '../types';

export function useOrganizationBankSignatories(bank_id: number) {
  return useQuery({
    queryKey: ['organizationBankSignatories', bank_id],
    queryFn: () => organizationBankSignatoryService.getAll(bank_id),
    enabled: !!bank_id,
  });
}

export function useOrganizationBankSignatory(signatory_id: number) {
  return useQuery({
    queryKey: ['organizationBankSignatory', signatory_id],
    queryFn: () => organizationBankSignatoryService.getById(signatory_id),
    enabled: !!signatory_id,
  });
}

export function useCreateOrganizationBankSignatory() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationBankSignatoryData) => organizationBankSignatoryService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationBankSignatories', data.bank_id] });
    },
  });
}

export function useUpdateOrganizationBankSignatory() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ signatory_id, data }: { signatory_id: number; data: UpdateOrganizationBankSignatoryData }) =>
      organizationBankSignatoryService.update(signatory_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationBankSignatories', data.bank_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationBankSignatory', data.signatory_id] });
      }
    },
  });
}

export function useDeleteOrganizationBankSignatory() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (signatory_id: number) => organizationBankSignatoryService.delete(signatory_id),
    onSuccess: () => {
        queryClient.invalidateQueries({ queryKey: ['organizationBankSignatories'] });
    },
  });
}
