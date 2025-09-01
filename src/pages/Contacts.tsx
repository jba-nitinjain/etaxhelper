import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { ContactTable } from '../components/Contacts/ContactTable';
import { ContactForm } from '../components/Contacts/ContactForm';
import { useContacts, useCreateContact, useUpdateContact, useDeleteContact, useSearchContacts } from '../hooks/useContacts';
import { Contact } from '../types';

export function Contacts() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingContact, setEditingContact] = useState<Contact | null>(null);
  const [searchQuery, setSearchQuery] = useState('');
  
  const { data: allContacts = [] } = useContacts();
  const { data: searchResults = [] } = useSearchContacts(searchQuery);
  const createMutation = useCreateContact();
  const updateMutation = useUpdateContact();
  const deleteMutation = useDeleteContact();

  const contacts = searchQuery ? searchResults : allContacts;

  const handleAddNew = () => {
    setEditingContact(null);
    setIsFormOpen(true);
  };

  const handleEdit = (contact: Contact) => {
    setEditingContact(contact);
    setIsFormOpen(true);
  };

  const handleDelete = async (id: string) => {
    if (window.confirm('Are you sure you want to delete this contact?')) {
      await deleteMutation.mutateAsync(id);
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingContact) {
        await updateMutation.mutateAsync({ id: editingContact.id, data });
      } else {
        await createMutation.mutateAsync({
          ...data,
          tags: [],
          lastContactDate: undefined,
        });
      }
      setIsFormOpen(false);
      setEditingContact(null);
    } catch (error) {
      console.error('Error saving contact:', error);
    }
  };

  const handleSearch = (query: string) => {
    setSearchQuery(query);
  };

  return (
    <div className="space-y-6">
      <Header
        title="Contacts"
        onSearch={handleSearch}
        onAddNew={handleAddNew}
        showAddButton={true}
      />
      
      <ContactTable
        contacts={contacts}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />
      
      {isFormOpen && (
        <ContactForm
          contact={editingContact || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingContact(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
        />
      )}
    </div>
  );
}