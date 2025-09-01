import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationBank } from '../../types';
import { useOrganizations } from '../../hooks/useOrganizations';

const bankSchema = z.object({
  org_id: z.number().min(1, 'Organization is required'),
  bank_name: z.string().min(1, 'Bank name is required'),
  branch_name: z.string().optional(),
  account_no: z.string().min(1, 'Account number is required'),
  ifsc_code: z.string().optional(),
  swift_code: z.string().optional(),
  account_type: z.string().optional(),
  mode_of_operation: z.enum(['Singly', 'Jointly', 'Any two jointly', 'Either or survivor', 'Other']).optional(),
});

type BankFormData = z.infer<typeof bankSchema>;

interface OrganizationBankFormProps {
  bank?: OrganizationBank;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
}

export function OrganizationBankForm({ bank, onSubmit, onClose, isLoading }: OrganizationBankFormProps) {
  const { data: organizations = [] } = useOrganizations();

  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<BankFormData>({
    resolver: zodResolver(bankSchema),
    defaultValues: bank ? {
      ...bank,
      branch_name: bank.branch_name || '',
      ifsc_code: bank.ifsc_code || '',
      swift_code: bank.swift_code || '',
      account_type: bank.account_type || '',
      mode_of_operation: bank.mode_of_operation || undefined,
    } : {},
  });

  const handleFormSubmit = (data: BankFormData) => {
    onSubmit(data);
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {bank ? 'Edit Bank Account' : 'Add New Bank Account'}
          </h2>
          <button
            onClick={onClose}
            className="text-slate-400 hover:text-slate-600 transition-colors"
          >
            <X className="h-6 w-6" />
          </button>
        </div>

        <form onSubmit={handleSubmit(handleFormSubmit)} className="p-6 space-y-6">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div className="md:col-span-2">
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Organization *
              </label>
              <select
                {...register('org_id', { valueAsNumber: true })}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              >
                <option value="">Select Organization</option>
                {organizations.map((org) => (
                  <option key={org.org_id} value={org.org_id}>
                    {org.display_name}
                  </option>
                ))}
              </select>
              {errors.org_id && (
                <p className="text-red-600 text-sm mt-1">{errors.org_id.message}</p>
              )}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Bank Name *
              </label>
              <input
                {...register('bank_name')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.bank_name && (
                <p className="text-red-600 text-sm mt-1">{errors.bank_name.message}</p>
              )}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Branch Name
              </label>
              <input
                {...register('branch_name')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Account Number *
              </label>
              <input
                {...register('account_no')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.account_no && (
                <p className="text-red-600 text-sm mt-1">{errors.account_no.message}</p>
              )}
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Account Type
              </label>
              <input
                {...register('account_type')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                IFSC Code
              </label>
              <input
                {...register('ifsc_code')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>

            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                SWIFT Code
              </label>
              <input
                {...register('swift_code')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>

            <div className="md:col-span-2">
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Mode of Operation
              </label>
              <select
                {...register('mode_of_operation')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              >
                <option value="">Select Mode</option>
                <option value="Singly">Singly</option>
                <option value="Jointly">Jointly</option>
                <option value="Any two jointly">Any two jointly</option>
                <option value="Either or survivor">Either or survivor</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div className="flex justify-end space-x-3 pt-4">
            <button
              type="button"
              onClick={onClose}
              className="px-4 py-2 text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition-colors"
            >
              Cancel
            </button>
            <button
              type="submit"
              disabled={isLoading}
              className="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 rounded-lg transition-colors"
            >
              {isLoading ? 'Saving...' : bank ? 'Update Bank Account' : 'Create Bank Account'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
