import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { leadService } from '../services/leadService';
import { Lead } from '../types';

export function useLeads() {
  return useQuery({
    queryKey: ['leads'],
    queryFn: () => leadService.getAll(),
  });
}

export function useLead(id: string) {
  return useQuery({
    queryKey: ['lead', id],
    queryFn: () => leadService.getById(id),
    enabled: !!id,
  });
}

export function useCreateLead() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: Omit<Lead, 'id' | 'createdAt' | 'updatedAt'>) =>
      leadService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['leads'] });
    },
  });
}

export function useUpdateLead() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ id, data }: { id: string; data: Partial<Lead> }) =>
      leadService.update(id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['leads'] });
    },
  });
}

export function useLeadsByStage(stage: Lead['stage']) {
  return useQuery({
    queryKey: ['leads', 'stage', stage],
    queryFn: () => leadService.getByStage(stage),
  });
}