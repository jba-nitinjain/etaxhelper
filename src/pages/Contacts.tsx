import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { ContactTable } from '../components/Contacts/ContactTable';
import { ContactForm } from '../components/Contacts/ContactForm';
import { useContacts, useCreateContact, useUpdateContact, useDeleteContact, useSearchContacts } from '../hooks/useContacts';
import { OrganizationContact } from '../types';

export function Contacts() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingContact, setEditingContact] = useState<OrganizationContact | null>(null);
  const [searchQuery, setSearchQuery] = useState('');
  
  const { data: allContacts = [], isLoading } = useContacts();
  const { data: searchResults = [] } = useSearchContacts(searchQuery);
  const createMutation = useCreateContact();
  const updateMutation = useUpdateContact();
  const deleteMutation = useDeleteContact();

  const contacts = searchQuery ? searchResults : allContacts;

  const handleAddNew = () => {
    setEditingContact(null);
    setIsFormOpen(true);
  };

  const handleEdit = (contact: OrganizationContact) => {
    setEditingContact(contact);
    setIsFormOpen(true);
  };

  const handleDelete = async (contact_id: number) => {
    if (window.confirm('Are you sure you want to delete this contact?')) {
      try {
        await deleteMutation.mutateAsync(contact_id);
      } catch (error) {
        console.error('Error deleting contact:', error);
        alert('Failed to delete contact. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingContact) {
        await updateMutation.mutateAsync({ 
          contact_id: editingContact.contact_id, 
          data 
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingContact(null);
    } catch (error) {
      console.error('Error saving contact:', error);
      alert('Failed to save contact. Please try again.');
    }
  };

  const handleSearch = (query: string) => {
    setSearchQuery(query);
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Contacts" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading contacts...</p>
          </div>
        </div>
      </div>
    );
  }

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