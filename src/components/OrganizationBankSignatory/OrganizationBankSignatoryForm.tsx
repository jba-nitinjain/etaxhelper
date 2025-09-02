import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationBankSignatory } from '../../types';

const signatorySchema = z.object({
  NAME: z.string().min(1, 'Name is required'),
  designation: z.string().optional(),
  email: z.string().email('Invalid email address').optional().or(z.literal('')),
  phone: z.string().optional(),
});

type SignatoryFormData = z.infer<typeof signatorySchema>;

interface OrganizationBankSignatoryFormProps {
  signatory?: OrganizationBankSignatory;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
  bankId: number;
}

export function OrganizationBankSignatoryForm({ signatory, onSubmit, onClose, isLoading, bankId }: OrganizationBankSignatoryFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<SignatoryFormData>({
    resolver: zodResolver(signatorySchema),
    defaultValues: signatory || {},
  });

  const handleFormSubmit = (data: SignatoryFormData) => {
    onSubmit({ ...data, bank_id: bankId });
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {signatory ? 'Edit Signatory' : 'Add New Signatory'}
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
            <div>
              <label htmlFor="NAME" className="block text-sm font-medium text-slate-700 mb-2">
                Name *
              </label>
              <input
                id="NAME"
                {...register('NAME')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.NAME && (
                <p className="text-red-600 text-sm mt-1">{errors.NAME.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="designation" className="block text-sm font-medium text-slate-700 mb-2">
                Designation
              </label>
              <input
                id="designation"
                {...register('designation')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="email" className="block text-sm font-medium text-slate-700 mb-2">
                Email
              </label>
              <input
                id="email"
                type="email"
                {...register('email')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
               {errors.email && (
                <p className="text-red-600 text-sm mt-1">{errors.email.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="phone" className="block text-sm font-medium text-slate-700 mb-2">
                Phone
              </label>
              <input
                id="phone"
                {...register('phone')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
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
              {isLoading ? 'Saving...' : signatory ? 'Update Signatory' : 'Create Signatory'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
