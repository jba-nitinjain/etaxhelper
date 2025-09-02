import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationDirectorTable } from '../components/OrganizationDirector/OrganizationDirectorTable';
import { OrganizationDirectorForm } from '../components/OrganizationDirector/OrganizationDirectorForm';
import { useOrganizationDirectors, useCreateOrganizationDirector, useUpdateOrganizationDirector, useDeleteOrganizationDirector } from '../hooks/useOrganizationDirectors';
import { OrganizationDirector } from '../types';

export function OrganizationDirectors() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingDirector, setEditingDirector] = useState<OrganizationDirector | null>(null);
  const orgId = 1; // Hardcoded for now, will be dynamic later

  const { data: directors = [], isLoading } = useOrganizationDirectors(orgId);
  const createMutation = useCreateOrganizationDirector();
  const updateMutation = useUpdateOrganizationDirector();
  const deleteMutation = useDeleteOrganizationDirector();

  const handleAddNew = () => {
    setEditingDirector(null);
    setIsFormOpen(true);
  };

  const handleEdit = (director: OrganizationDirector) => {
    setEditingDirector(director);
    setIsFormOpen(true);
  };

  const handleDelete = async (director_id: number) => {
    if (window.confirm('Are you sure you want to delete this director?')) {
      try {
        await deleteMutation.mutateAsync(director_id);
      } catch (error) {
        console.error('Error deleting director:', error);
        alert('Failed to delete director. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingDirector) {
        await updateMutation.mutateAsync({
          director_id: editingDirector.director_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingDirector(null);
    } catch (error) {
      console.error('Error saving director:', error);
      alert('Failed to save director. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Organization Directors" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading directors...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Organization Directors"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationDirectorTable
        directors={directors}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationDirectorForm
          director={editingDirector || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingDirector(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
          orgId={orgId}
        />
      )}
    </div>
  );
}
