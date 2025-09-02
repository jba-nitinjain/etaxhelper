import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { OrganizationLoginTable } from '../components/OrganizationLogin/OrganizationLoginTable';
import { OrganizationLoginForm } from '../components/OrganizationLogin/OrganizationLoginForm';
import { useOrganizationLogins, useCreateOrganizationLogin, useUpdateOrganizationLogin, useDeleteOrganizationLogin } from '../hooks/useOrganizationLogins';
import { OrganizationLogin } from '../types';

export function OrganizationLogins() {
  const [isFormOpen, setIsFormOpen] = useState(false);
  const [editingLogin, setEditingLogin] = useState<OrganizationLogin | null>(null);
  const orgId = 1; // Hardcoded for now, will be dynamic later

  const { data: logins = [], isLoading } = useOrganizationLogins(orgId);
  const createMutation = useCreateOrganizationLogin();
  const updateMutation = useUpdateOrganizationLogin();
  const deleteMutation = useDeleteOrganizationLogin();

  const handleAddNew = () => {
    setEditingLogin(null);
    setIsFormOpen(true);
  };

  const handleEdit = (login: OrganizationLogin) => {
    setEditingLogin(login);
    setIsFormOpen(true);
  };

  const handleDelete = async (login_id: number) => {
    if (window.confirm('Are you sure you want to delete this login?')) {
      try {
        await deleteMutation.mutateAsync(login_id);
      } catch (error) {
        console.error('Error deleting login:', error);
        alert('Failed to delete login. Please try again.');
      }
    }
  };

  const handleSubmit = async (data: any) => {
    try {
      if (editingLogin) {
        await updateMutation.mutateAsync({
          login_id: editingLogin.login_id,
          data
        });
      } else {
        await createMutation.mutateAsync(data);
      }
      setIsFormOpen(false);
      setEditingLogin(null);
    } catch (error) {
      console.error('Error saving login:', error);
      alert('Failed to save login. Please try again.');
    }
  };

  if (isLoading) {
    return (
      <div className="space-y-6">
        <Header title="Website Logins" />
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-8">
          <div className="text-center">
            <div className="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600 mx-auto"></div>
            <p className="text-slate-500 mt-2">Loading logins...</p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <Header
        title="Website Logins"
        onAddNew={handleAddNew}
        showAddButton={true}
      />

      <OrganizationLoginTable
        logins={logins}
        onEdit={handleEdit}
        onDelete={handleDelete}
      />

      {isFormOpen && (
        <OrganizationLoginForm
          login={editingLogin || undefined}
          onSubmit={handleSubmit}
          onClose={() => {
            setIsFormOpen(false);
            setEditingLogin(null);
          }}
          isLoading={createMutation.isPending || updateMutation.isPending}
          orgId={orgId}
        />
      )}
    </div>
  );
}
