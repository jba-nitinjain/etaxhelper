import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { activityService } from '../services/activityService';
import { Activity } from '../types';

export function useActivities() {
  return useQuery({
    queryKey: ['activities'],
    queryFn: () => activityService.getAll(),
  });
}

export function useActivity(id: string) {
  return useQuery({
    queryKey: ['activity', id],
    queryFn: () => activityService.getById(id),
    enabled: !!id,
  });
}

export function useCreateActivity() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: Omit<Activity, 'id' | 'createdAt' | 'updatedAt'>) =>
      activityService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['activities'] });
    },
  });
}

export function useUpdateActivity() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ id, data }: { id: string; data: Partial<Activity> }) =>
      activityService.update(id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['activities'] });
    },
  });
}

export function useUpcomingActivities() {
  return useQuery({
    queryKey: ['activities', 'upcoming'],
    queryFn: () => activityService.getUpcoming(),
  });
}

export function useOverdueActivities() {
  return useQuery({
    queryKey: ['activities', 'overdue'],
    queryFn: () => activityService.getOverdue(),
  });
}