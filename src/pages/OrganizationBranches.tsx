import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationBranchTable } from '../components/OrganizationBranch/OrganizationBranchTable';
import { OrganizationBranchForm } from '../components/OrganizationBranch/OrganizationBranchForm';
import { useOrganizationBranches, useCreateOrganizationBranch, useUpdateOrganizationBranch, useDeleteOrganizationBranch } from '../hooks/useOrganizationBranches';
import { OrganizationBranch } from '../types';

export function OrganizationBranches() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingBranch, setEditingBranch] = useState<OrganizationBranch | null>(null);
  const orgId = 1; // Hardcoded for now, will be dynamic later

  const { data: branches = [], isLoading } = useOrganizationBranches(orgId);
  const createMutation = useCreateOrganizationBranch();
  const updateMutation = useUpdateOrganizationBranch();
  const deleteMutation = useDeleteOrganizationBranch();

  const handleAddNew = () => {
    setEditingBranch(null);
    setIsFormOpen(true);
  };

  const handleEdit = (branch: OrganizationBranch) => {
    setEditingBranch(branch);
    setIsFormOpen(true);
  };

  const handleDelete = async (branch_id: number) => {
    if (window.confirm('Are you sure you want to delete this branch?')) {
      try {
        await deleteMutation.mutateAsync(branch_id);
      } catch (error) {
        console.error('Error deleting branch:', error);
        alert('Failed to delete branch. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingBranch) {
        await updateMutation.mutateAsync({
          branch_id: editingBranch.branch_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingBranch(null);
    } catch (error) {
      console.error('Error saving branch:', error);
      alert('Failed to save branch. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Organization Branches" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading branches...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Organization Branches"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationBranchTable
        branches={branches}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationBranchForm
          branch={editingBranch || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingBranch(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
          orgId={orgId}
        />
      )}
    </div>
  );
}
