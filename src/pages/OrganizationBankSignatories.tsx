import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationBankSignatoryTable } from '../components/OrganizationBankSignatory/OrganizationBankSignatoryTable';
import { OrganizationBankSignatoryForm } from '../components/OrganizationBankSignatory/OrganizationBankSignatoryForm';
import { useOrganizationBankSignatories, useCreateOrganizationBankSignatory, useUpdateOrganizationBankSignatory, useDeleteOrganizationBankSignatory } from '../hooks/useOrganizationBankSignatories';
import { OrganizationBankSignatory } from '../types';

export function OrganizationBankSignatories() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingSignatory, setEditingSignatory] = useState<OrganizationBankSignatory | null>(null);
  const bankId = 1; // Hardcoded for now, will be dynamic later

  const { data: signatories = [], isLoading } = useOrganizationBankSignatories(bankId);
  const createMutation = useCreateOrganizationBankSignatory();
  const updateMutation = useUpdateOrganizationBankSignatory();
  const deleteMutation = useDeleteOrganizationBankSignatory();

  const handleAddNew = () => {
    setEditingSignatory(null);
    setIsFormOpen(true);
  };

  const handleEdit = (signatory: OrganizationBankSignatory) => {
    setEditingSignatory(signatory);
    setIsFormOpen(true);
  };

  const handleDelete = async (signatory_id: number) => {
    if (window.confirm('Are you sure you want to delete this signatory?')) {
      try {
        await deleteMutation.mutateAsync(signatory_id);
      } catch (error) {
        console.error('Error deleting signatory:', error);
        alert('Failed to delete signatory. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingSignatory) {
        await updateMutation.mutateAsync({
          signatory_id: editingSignatory.signatory_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingSignatory(null);
    } catch (error) {
      console.error('Error saving signatory:', error);
      alert('Failed to save signatory. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Bank Account Signatories" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading signatories...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Bank Account Signatories"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationBankSignatoryTable
        signatories={signatories}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationBankSignatoryForm
          signatory={editingSignatory || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingSignatory(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
          bankId={bankId}
        />
      )}
    </div>
  );
}
