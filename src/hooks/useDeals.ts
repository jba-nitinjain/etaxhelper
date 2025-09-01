import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { dealService } from '../services/dealService';
import { Deal } from '../types';

export function useDeals() {
  return useQuery({
    queryKey: ['deals'],
    queryFn: () => dealService.getAll(),
  });
}

export function useDeal(id: string) {
  return useQuery({
    queryKey: ['deal', id],
    queryFn: () => dealService.getById(id),
    enabled: !!id,
  });
}

export function useCreateDeal() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: Omit<Deal, 'id' | 'createdAt' | 'updatedAt'>) =>
      dealService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['deals'] });
    },
  });
}

export function useUpdateDeal() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ id, data }: { id: string; data: Partial<Deal> }) =>
      dealService.update(id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['deals'] });
    },
  });
}

export function useDealRevenue() {
  return useQuery({
    queryKey: ['deals', 'revenue'],
    queryFn: () => dealService.getRevenue(),
  });
}

export function usePipelineValue() {
  return useQuery({
    queryKey: ['deals', 'pipeline'],
    queryFn: () => dealService.getPipelineValue(),
  });
}