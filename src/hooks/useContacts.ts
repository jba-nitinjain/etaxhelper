import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { contactService } from '../services/contactService';
import { CreateOrganizationContactData, UpdateOrganizationContactData } from '../types';

export function useContacts() {
  return useQuery({
    queryKey: ['contacts'],
    queryFn: () => contactService.getAll(),
  });
}

export function useContact(contact_id: number) {
  return useQuery({
    queryKey: ['contact', contact_id],
    queryFn: () => contactService.getById(contact_id),
    enabled: !!contact_id,
  });
}

export function useContactsByOrganization(org_id: number) {
  return useQuery({
    queryKey: ['contacts', 'organization', org_id],
    queryFn: () => contactService.getByOrganization(org_id),
    enabled: !!org_id,
  });
}

export function useCreateContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: CreateOrganizationContactData) => contactService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['contacts'] });
    },
  });
}

export function useUpdateContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ contact_id, data }: { contact_id: number; data: UpdateOrganizationContactData }) =>
      contactService.update(contact_id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['contacts'] });
    },
  });
}

export function useDeleteContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (contact_id: number) => contactService.delete(contact_id),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['contacts'] });
    },
  });
}

export function useSearchContacts(query: string) {
  return useQuery({
    queryKey: ['contacts', 'search', query],
    queryFn: () => contactService.search(query),
    enabled: !!query,
  });
}