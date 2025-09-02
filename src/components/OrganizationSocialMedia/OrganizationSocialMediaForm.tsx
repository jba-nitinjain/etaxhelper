import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationSocialMedia } from '../../types';

const socialMediaSchema = z.object({
  platform: z.string().min(1, 'Platform is required'),
  handle_name: z.string().optional(),
  website: z.string().url('Invalid URL').optional().or(z.literal('')),
  mobile_app: z.string().optional(),
});

type SocialMediaFormData = z.infer<typeof socialMediaSchema>;

interface OrganizationSocialMediaFormProps {
  social?: OrganizationSocialMedia;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
  orgId: number;
}

export function OrganizationSocialMediaForm({ social, onSubmit, onClose, isLoading, orgId }: OrganizationSocialMediaFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<SocialMediaFormData>({
    resolver: zodResolver(socialMediaSchema),
    defaultValues: social || {},
  });

  const handleFormSubmit = (data: SocialMediaFormData) => {
    onSubmit({ ...data, org_id: orgId });
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {social ? 'Edit Social Media' : 'Add New Social Media'}
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
              <label htmlFor="platform" className="block text-sm font-medium text-slate-700 mb-2">
                Platform *
              </label>
              <input
                id="platform"
                {...register('platform')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.platform && (
                <p className="text-red-600 text-sm mt-1">{errors.platform.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="handle_name" className="block text-sm font-medium text-slate-700 mb-2">
                Handle Name
              </label>
              <input
                id="handle_name"
                {...register('handle_name')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div className="md:col-span-2">
              <label htmlFor="website" className="block text-sm font-medium text-slate-700 mb-2">
                Website
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
              <label htmlFor="mobile_app" className="block text-sm font-medium text-slate-700 mb-2">
                Mobile App
              </label>
              <input
                id="mobile_app"
                {...register('mobile_app')}
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
              {isLoading ? 'Saving...' : social ? 'Update Social Media' : 'Create Social Media'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
