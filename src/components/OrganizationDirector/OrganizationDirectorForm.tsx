import React from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationDirector } from '../../types';

const directorSchema = z.object({
  NAME: z.string().min(1, 'Name is required'),
  designation: z.string().optional(),
  email: z.string().email('Invalid email address').optional().or(z.literal('')),
  phone: z.string().optional(),
  din_number: z.string().optional(),
  dob: z.coerce.date().optional(),
  city: z.string().optional(),
  pin: z.string().optional(),
  country: z.string().optional(),
  date_of_appointment: z.coerce.date().optional(),
});

type DirectorFormData = z.infer<typeof directorSchema>;

interface OrganizationDirectorFormProps {
  director?: OrganizationDirector;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
  orgId: number;
}

export function OrganizationDirectorForm({ director, onSubmit, onClose, isLoading, orgId }: OrganizationDirectorFormProps) {
  const {
    register,
    handleSubmit,
    formState: { errors },
  } = useForm<DirectorFormData>({
    resolver: zodResolver(directorSchema),
    defaultValues: director ? {
        ...director,
        dob: director.dob ? new Date(director.dob).toISOString().split('T')[0] : undefined,
        date_of_appointment: director.date_of_appointment ? new Date(director.date_of_appointment).toISOString().split('T')[0] : undefined,
    } : {},
  });

  const handleFormSubmit = (data: DirectorFormData) => {
    onSubmit({ ...data, org_id: orgId });
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-3xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {director ? 'Edit Director' : 'Add New Director'}
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
            <div>
              <label htmlFor="din_number" className="block text-sm font-medium text-slate-700 mb-2">
                DIN Number
              </label>
              <input
                id="din_number"
                {...register('din_number')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="dob" className="block text-sm font-medium text-slate-700 mb-2">
                Date of Birth
              </label>
              <input
                id="dob"
                type="date"
                {...register('dob')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="city" className="block text-sm font-medium text-slate-700 mb-2">
                City
              </label>
              <input
                id="city"
                {...register('city')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="pin" className="block text-sm font-medium text-slate-700 mb-2">
                PIN
              </label>
              <input
                id="pin"
                {...register('pin')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="country" className="block text-sm font-medium text-slate-700 mb-2">
                Country
              </label>
              <input
                id="country"
                {...register('country')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            <div>
              <label htmlFor="date_of_appointment" className="block text-sm font-medium text-slate-700 mb-2">
                Date of Appointment
              </label>
              <input
                id="date_of_appointment"
                type="date"
                {...register('date_of_appointment')}
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
              {isLoading ? 'Saving...' : director ? 'Update Director' : 'Create Director'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}
