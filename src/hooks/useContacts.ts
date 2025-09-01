import { useQuery, useMutation, useQueryClient } from '@tanstack/react-query';
import { contactService } from '../services/contactService';
import { Contact } from '../types';

export function useContacts() {
  return useQuery({
    queryKey: ['contacts'],
    queryFn: () => contactService.getAll(),
  });
}

export function useContact(id: string) {
  return useQuery({
    queryKey: ['contact', id],
    queryFn: () => contactService.getById(id),
    enabled: !!id,
  });
}

export function useCreateContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (data: Omit<Contact, 'id' | 'createdAt' | 'updatedAt'>) =>
      contactService.create(data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['contacts'] });
    },
  });
}

export function useUpdateContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: ({ id, data }: { id: string; data: Partial<Contact> }) =>
      contactService.update(id, data),
    onSuccess: () => {
      queryClient.invalidateQueries({ queryKey: ['contacts'] });
    },
  });
}

export function useDeleteContact() {
  const queryClient = useQueryClient();
  
  return useMutation({
    mutationFn: (id: string) => contactService.delete(id),
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