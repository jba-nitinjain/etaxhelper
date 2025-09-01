import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationTable } from '../components/Organization/OrganizationTable';
import { OrganizationForm } from '../components/Organization/OrganizationForm';
import { useOrganizations, useCreateOrganization, useUpdateOrganization, useDeleteOrganization, useSearchOrganizations } from '../hooks/useOrganizations';
import { Organization } from '../types';

export function Organizations() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingOrg, setEditingOrg] = useState<Organization | null>(null);
  const [searchQuery, setSearchQuery] = useState('');

  const { data: allOrgs = [], isLoading } = useOrganizations();
  const { data: searchResults = [] } = useSearchOrganizations(searchQuery);
  const createMutation = useCreateOrganization();
  const updateMutation = useUpdateOrganization();
  const deleteMutation = useDeleteOrganization();

  const organizations = searchQuery ? searchResults : allOrgs;

  const handleAddNew = () => {
    setEditingOrg(null);
    setIsFormOpen(true);
  };

  const handleEdit = (org: Organization) => {
    setEditingOrg(org);
    setIsFormOpen(true);
  };

  const handleDelete = async (org_id: number) => {
    if (window.confirm('Are you sure you want to delete this organization?')) {
      try {
        await deleteMutation.mutateAsync(org_id);
      } catch (error) {
        console.error('Error deleting organization:', error);
        alert('Failed to delete organization. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingOrg) {
        await updateMutation.mutateAsync({
          org_id: editingOrg.org_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingOrg(null);
    } catch (error) {
      console.error('Error saving organization:', error);
      alert('Failed to save organization. Please try again.');
    }
  };

  const handleSearch = (query: string) => {
    setSearchQuery(query);
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Organizations" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading organizations...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Organizations"
        onSearch={handleSearch}
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationTable
        organizations={organizations}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationForm
          organization={editingOrg || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingOrg(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
        />
      )}
    </div>
  );
}
