import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationLogin } from '../../types';

const loginSchema = z.object({
  website: z.string().url('Invalid URL').min(1, 'Website is required'),
  user_id: z.string().min(1, 'User ID is required'),
  PASSWORD: z.string().optional(),
  notes: z.string().optional(),
  related_social_id: z.coerce.number().optional(),
});

type LoginFormData = z.infer<typeof loginSchema>;

interface OrganizationLoginFormProps {
  login?: OrganizationLogin;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
  orgId: number;
}

export function OrganizationLoginForm({ login, onSubmit, onClose, isLoading, orgId }: OrganizationLoginFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<LoginFormData>({
    resolver: zodResolver(loginSchema),
    defaultValues: login || {},
  });

  const handleFormSubmit = (data: LoginFormData) => {
    onSubmit({ ...data, org_id: orgId });
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {login ? 'Edit Login' : 'Add New Login'}
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
              <label htmlFor="website" className="block text-sm font-medium text-slate-700 mb-2">
                Website *
              </label>
              <input
                id="website"
                {...register('website')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.website && (
                <p className="text-red-600 text-sm mt-1">{errors.website.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="user_id" className="block text-sm font-medium text-slate-700 mb-2">
                User ID *
              </label>
              <input
                id="user_id"
                {...register('user_id')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.user_id && (
                <p className="text-red-600 text-sm mt-1">{errors.user_id.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="PASSWORD" className="block text-sm font-medium text-slate-700 mb-2">
                Password
              </label>
              <input
                id="PASSWORD"
                type="password"
                {...register('PASSWORD')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div className="md:col-span-2">
              <label htmlFor="notes" className="block text-sm font-medium text-slate-700 mb-2">
                Notes
              </label>
              <textarea
                id="notes"
                {...register('notes')}
                rows={4}
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
              {isLoading ? 'Saving...' : login ? 'Update Login' : 'Create Login'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
