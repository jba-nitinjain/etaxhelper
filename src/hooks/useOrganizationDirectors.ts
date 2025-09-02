import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { organizationDirectorService } from '../services/organizationDirectorService';
import { CreateOrganizationDirectorData, UpdateOrganizationDirectorData } from '../types';

export function useOrganizationDirectors(org_id: number) {
  return useQuery({
    queryKey: ['organizationDirectors', org_id],
    queryFn: () => organizationDirectorService.getAll(org_id),
    enabled: !!org_id,
  });
}

export function useOrganizationDirector(director_id: number) {
  return useQuery({
    queryKey: ['organizationDirector', director_id],
    queryFn: () => organizationDirectorService.getById(director_id),
    enabled: !!director_id,
  });
}

export function useCreateOrganizationDirector() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (data: CreateOrganizationDirectorData) => organizationDirectorService.create(data),
    onSuccess: (data) => {
      queryClient.invalidateQueries({ queryKey: ['organizationDirectors', data.org_id] });
    },
  });
}

export function useUpdateOrganizationDirector() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: ({ director_id, data }: { director_id: number; data: UpdateOrganizationDirectorData }) =>
      organizationDirectorService.update(director_id, data),
    onSuccess: (data) => {
      if (data) {
        queryClient.invalidateQueries({ queryKey: ['organizationDirectors', data.org_id] });
        queryClient.invalidateQueries({ queryKey: ['organizationDirector', data.director_id] });
      }
    },
  });
}

export function useDeleteOrganizationDirector() {
  const queryClient = useQueryClient();

  return useMutation({
    mutationFn: (director_id: number) => organizationDirectorService.delete(director_id),
    onSuccess: () => {
        queryClient.invalidateQueries({ queryKey: ['organizationDirectors'] });
    },
  });
}
