import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationRegistration } from '../../types';

const registrationSchema = z.object({
  reg_type: z.string().optional(),
  reg_number: z.string().optional(),
  valid_from: z.coerce.date().optional(),
  valid_to: z.coerce.date().optional(),
});

type RegistrationFormData = z.infer<typeof registrationSchema>;

interface OrganizationRegistrationFormProps {
  registration?: OrganizationRegistration;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
  orgId: number;
}

export function OrganizationRegistrationForm({ registration, onSubmit, onClose, isLoading, orgId }: OrganizationRegistrationFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<RegistrationFormData>({
    resolver: zodResolver(registrationSchema),
    defaultValues: registration ? {
        ...registration,
        valid_from: registration.valid_from ? new Date(registration.valid_from).toISOString().split('T')[0] : undefined,
        valid_to: registration.valid_to ? new Date(registration.valid_to).toISOString().split('T')[0] : undefined,
    } : {},
  });

  const handleFormSubmit = (data: RegistrationFormData) => {
    onSubmit({ ...data, org_id: orgId });
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {registration ? 'Edit Registration' : 'Add New Registration'}
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
              <label htmlFor="reg_type" className="block text-sm font-medium text-slate-700 mb-2">
                Registration Type
              </label>
              <input
                id="reg_type"
                {...register('reg_type')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="reg_number" className="block text-sm font-medium text-slate-700 mb-2">
                Registration Number
              </label>
              <input
                id="reg_number"
                {...register('reg_number')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="valid_from" className="block text-sm font-medium text-slate-700 mb-2">
                Valid From
              </label>
              <input
                id="valid_from"
                type="date"
                {...register('valid_from')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="valid_to" className="block text-sm font-medium text-slate-700 mb-2">
                Valid To
              </label>
              <input
                id="valid_to"
                type="date"
                {...register('valid_to')}
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
              {isLoading ? 'Saving...' : registration ? 'Update Registration' : 'Create Registration'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
