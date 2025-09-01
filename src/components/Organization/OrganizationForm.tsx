import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { Organization } from '../../types';

const orgSchema = z.object({
  display_name: z.string().min(1, 'Display name is required'),
  company_name: z.string().optional(),
  email: z.string().email('Invalid email address').optional().or(z.literal('')),
  phone_work: z.string().optional(),
  org_type: z.enum(['Proprietorship', 'Partnership', 'Private Limited', 'Public Limited', 'LLP', 'NGO', 'Cooperative', 'Government', 'Individual', 'Other']).optional(),
});

type OrgFormData = z.infer<typeof orgSchema>;

interface OrganizationFormProps {
  organization?: Organization;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
}

export function OrganizationForm({ organization, onSubmit, onClose, isLoading }: OrganizationFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<OrgFormData>({
    resolver: zodResolver(orgSchema),
    defaultValues: organization || {},
  });

  const handleFormSubmit = (data: OrgFormData) => {
    onSubmit(data);
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {organization ? 'Edit Organization' : 'Add New Organization'}
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
              <label htmlFor="display_name" className="block text-sm font-medium text-slate-700 mb-2">
                Display Name *
              </label>
              <input
                id="display_name"
                {...register('display_name')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.display_name && (
                <p className="text-red-600 text-sm mt-1">{errors.display_name.message}</p>
              )}
            </div>

            <div>
              <label htmlFor="company_name" className="block text-sm font-medium text-slate-700 mb-2">
                Company Name
              </label>
              <input
                id="company_name"
                {...register('company_name')}
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
              <label htmlFor="phone_work" className="block text-sm font-medium text-slate-700 mb-2">
                Work Phone
              </label>
              <input
                id="phone_work"
                {...register('phone_work')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>

            <div className="md:col-span-2">
              <label htmlFor="org_type" className="block text-sm font-medium text-slate-700 mb-2">
                Organization Type
              </label>
              <select
                id="org_type"
                {...register('org_type')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              >
                <option value="">Select Type</option>
                <option value="Proprietorship">Proprietorship</option>
                <option value="Partnership">Partnership</option>
                <option value="Private Limited">Private Limited</option>
                <option value="Public Limited">Public Limited</option>
                <option value="LLP">LLP</option>
                <option value="NGO">NGO</option>
                <option value="Cooperative">Cooperative</option>
                <option value="Government">Government</option>
                <option value="Individual">Individual</option>
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
              {isLoading ? 'Saving...' : organization ? 'Update Organization' : 'Create Organization'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
