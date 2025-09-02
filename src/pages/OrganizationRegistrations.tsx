import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationRegistrationTable } from '../components/OrganizationRegistration/OrganizationRegistrationTable';
import { OrganizationRegistrationForm } from '../components/OrganizationRegistration/OrganizationRegistrationForm';
import { useOrganizationRegistrations, useCreateOrganizationRegistration, useUpdateOrganizationRegistration, useDeleteOrganizationRegistration } from '../hooks/useOrganizationRegistrations';
import { OrganizationRegistration } from '../types';

export function OrganizationRegistrations() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingRegistration, setEditingRegistration] = useState<OrganizationRegistration | null>(null);
  const orgId = 1; // Hardcoded for now, will be dynamic later

  const { data: registrations = [], isLoading } = useOrganizationRegistrations(orgId);
  const createMutation = useCreateOrganizationRegistration();
  const updateMutation = useUpdateOrganizationRegistration();
  const deleteMutation = useDeleteOrganizationRegistration();

  const handleAddNew = () => {
    setEditingRegistration(null);
    setIsFormOpen(true);
  };

  const handleEdit = (registration: OrganizationRegistration) => {
    setEditingRegistration(registration);
    setIsFormOpen(true);
  };

  const handleDelete = async (reg_id: number) => {
    if (window.confirm('Are you sure you want to delete this registration?')) {
      try {
        await deleteMutation.mutateAsync(reg_id);
      } catch (error) {
        console.error('Error deleting registration:', error);
        alert('Failed to delete registration. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingRegistration) {
        await updateMutation.mutateAsync({
          reg_id: editingRegistration.reg_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingRegistration(null);
    } catch (error) {
      console.error('Error saving registration:', error);
      alert('Failed to save registration. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Registrations" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading registrations...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Registrations"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationRegistrationTable
        registrations={registrations}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationRegistrationForm
          registration={editingRegistration || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingRegistration(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
          orgId={orgId}
        />
      )}
    </div>
  );
}
