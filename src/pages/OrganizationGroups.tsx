import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationGroupTable } from '../components/OrganizationGroup/OrganizationGroupTable';
import { OrganizationGroupForm } from '../components/OrganizationGroup/OrganizationGroupForm';
import { useOrganizationGroups, useCreateOrganizationGroup, useUpdateOrganizationGroup, useDeleteOrganizationGroup } from '../hooks/useOrganizationGroups';
import { OrganizationGroup } from '../types';

export function OrganizationGroups() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingGroup, setEditingGroup] = useState<OrganizationGroup | null>(null);

  const { data: groups = [], isLoading } = useOrganizationGroups();
  const createMutation = useCreateOrganizationGroup();
  const updateMutation = useUpdateOrganizationGroup();
  const deleteMutation = useDeleteOrganizationGroup();

  const handleAddNew = () => {
    setEditingGroup(null);
    setIsFormOpen(true);
  };

  const handleEdit = (group: OrganizationGroup) => {
    setEditingGroup(group);
    setIsFormOpen(true);
  };

  const handleDelete = async (group_id: number) => {
    if (window.confirm('Are you sure you want to delete this group?')) {
      try {
        await deleteMutation.mutateAsync(group_id);
      } catch (error) {
        console.error('Error deleting group:', error);
        alert('Failed to delete group. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingGroup) {
        await updateMutation.mutateAsync({
          group_id: editingGroup.group_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingGroup(null);
    } catch (error) {
      console.error('Error saving group:', error);
      alert('Failed to save group. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Organization Groups" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading groups...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Organization Groups"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationGroupTable
        groups={groups}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationGroupForm
          group={editingGroup || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingGroup(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
        />
      )}
    </div>
  );
}
