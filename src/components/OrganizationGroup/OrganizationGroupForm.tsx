import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationGroup } from '../../types';

const groupSchema = z.object({
  group_name: z.string().min(1, 'Group name is required'),
  description: z.string().optional(),
});

type GroupFormData = z.infer<typeof groupSchema>;

interface OrganizationGroupFormProps {
  group?: OrganizationGroup;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
}

export function OrganizationGroupForm({ group, onSubmit, onClose, isLoading }: OrganizationGroupFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<GroupFormData>({
    resolver: zodResolver(groupSchema),
    defaultValues: group || {},
  });

  const handleFormSubmit = (data: GroupFormData) => {
    onSubmit(data);
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {group ? 'Edit Group' : 'Add New Group'}
          </h2>
          <button
            onClick={onClose}
            className="text-slate-400 hover:text-slate-600 transition-colors"
          >
            <X className="h-6 w-6" />
          </button>
        </div>

        <form onSubmit={handleSubmit(handleFormSubmit)} className="p-6 space-y-6">
          <div className="grid grid-cols-1 gap-6">
            <div>
              <label htmlFor="group_name" className="block text-sm font-medium text-slate-700 mb-2">
                Group Name *
              </label>
              <input
                id="group_name"
                {...register('group_name')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
              {errors.group_name && (
                <p className="text-red-600 text-sm mt-1">{errors.group_name.message}</p>
              )}
            </div>
            <div>
              <label htmlFor="description" className="block text-sm font-medium text-slate-700 mb-2">
                Description
              </label>
              <textarea
                id="description"
                {...register('description')}
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
              {isLoading ? 'Saving...' : group ? 'Update Group' : 'Create Group'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
