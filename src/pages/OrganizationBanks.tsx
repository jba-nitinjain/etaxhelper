import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationBankTable } from '../components/OrganizationBank/OrganizationBankTable';
import { OrganizationBankForm } from '../components/OrganizationBank/OrganizationBankForm';
import { useOrganizationBanks, useCreateOrganizationBank, useUpdateOrganizationBank, useDeleteOrganizationBank } from '../hooks/useOrganizationBanks';
import { OrganizationBank } from '../types';

export function OrganizationBanks() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingBank, setEditingBank] = useState<OrganizationBank | null>(null);

  const { data: banks = [], isLoading } = useOrganizationBanks();
  const createMutation = useCreateOrganizationBank();
  const updateMutation = useUpdateOrganizationBank();
  const deleteMutation = useDeleteOrganizationBank();

  const handleAddNew = () => {
    setEditingBank(null);
    setIsFormOpen(true);
  };

  const handleEdit = (bank: OrganizationBank) => {
    setEditingBank(bank);
    setIsFormOpen(true);
  };

  const handleDelete = async (bank_id: number) => {
    if (window.confirm('Are you sure you want to delete this bank account?')) {
      try {
        await deleteMutation.mutateAsync(bank_id);
      } catch (error) {
        console.error('Error deleting bank account:', error);
        alert('Failed to delete bank account. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingBank) {
        await updateMutation.mutateAsync({
          bank_id: editingBank.bank_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingBank(null);
    } catch (error) {
      console.error('Error saving bank account:', error);
      alert('Failed to save bank account. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Bank Accounts" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading bank accounts...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Bank Accounts"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationBankTable
        banks={banks}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationBankForm
          bank={editingBank || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingBank(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
        />
      )}
    </div>
  );
}
