import React, { useEffect, useState } from 'react';
import { useForm } from 'react-hook-form';
import { zodResolver } from '@hookform/resolvers/zod';
import { z } from 'zod';
import { X } from 'lucide-react';
import { OrganizationContact } from '../../types';
import { useOrganizations } from '../../hooks/useOrganizations';

const contactSchema = z.object({
  org_id: z.number().min(1, 'Organization is required'),
  NAME: z.string().min(1, 'Name is required'),
  designation: z.string().optional(),
  email: z.string().email('Invalid email address').optional().or(z.literal('')),
  phone: z.string().optional(),
  dob: z.string().optional(),
  pin: z.string().optional(),
  city: z.string().optional(),
  country: z.string().optional(),
});

type ContactFormData = z.infer<typeof contactSchema>;

interface ContactFormProps {
  contact?: OrganizationContact;
  onSubmit: (data: any) => void;
  onClose: () => void;
  isLoading: boolean;
}

export function ContactForm({ contact, onSubmit, onClose, isLoading }: ContactFormProps) {
  const { data: organizations = [] } = useOrganizations();
  const [isCityCountryAutofilled, setIsCityCountryAutofilled] = useState(false);

  const {
    register,
    handleSubmit,
    formState: { errors },
    setValue,
    watch,
  } = useForm<ContactFormData>({
    resolver: zodResolver(contactSchema),
    defaultValues: contact ? {
      org_id: contact.org_id,
      NAME: contact.NAME,
      designation: contact.designation || '',
      email: contact.email || '',
      phone: contact.phone || '',
      dob: contact.dob ? contact.dob.toISOString().slice(0, 10) : '',
      city: contact.city || '',
      pin: contact.pin || '',
      country: contact.country || 'India',
    } : {
      country: 'India',
    },
  });

  const pinValue = watch('pin');

  useEffect(() => {
    if (pinValue && pinValue.length === 6) {
      fetch(`https://api.postalpincode.in/pincode/${pinValue}`)
        .then(response => response.json())
        .then(data => {
          if (data && data[0].Status === 'Success') {
            const postOffice = data[0].PostOffice[0];
            setValue('city', postOffice.District);
            setValue('country', postOffice.Country);
            setIsCityCountryAutofilled(true);
          }
        })
        .catch(error => console.error('Error fetching pincode data:', error));
    } else {
        setIsCityCountryAutofilled(false);
    }
  }, [pinValue, setValue]);


  const handleFormSubmit = (data: ContactFormData) => {
    const submitData = {
      ...data,
      dob: data.dob ? new Date(data.dob) : undefined,
      email: data.email || undefined,
      phone: data.phone || undefined,
      designation: data.designation || undefined,
      city: data.city || undefined,
      pin: data.pin || undefined,
      country: data.country || undefined,
    };
    onSubmit(submitData);
  };

  return (
    <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
      <div className="bg-white rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-screen overflow-y-auto">
        <div className="flex items-center justify-between p-6 border-b border-slate-200">
          <h2 className="text-xl font-semibold text-slate-900">
            {contact ? 'Edit Contact' : 'Add New Contact'}
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
                    {org.display_name} {org.company_name && `(${org.company_name})`}
                  </option>
                ))}
              </select>
              {errors.org_id && (
                <p className="text-red-600 text-sm mt-1">{errors.org_id.message}</p>
              )}
            </div>
            
            <div className="md:col-span-2">
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Full Name *
              </label>
              <input
                {...register('NAME')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="Enter full name"
              />
              {errors.NAME && (
                <p className="text-red-600 text-sm mt-1">{errors.NAME.message}</p>
              )}
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Designation
              </label>
              <input
                {...register('designation')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="e.g., Manager, Director"
              />
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Email
              </label>
              <input
                type="email"
                {...register('email')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="email@example.com"
              />
              {errors.email && (
                <p className="text-red-600 text-sm mt-1">{errors.email.message}</p>
              )}
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Phone
              </label>
              <input
                {...register('phone')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="+91 98765 43210"
              />
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Date of Birth
              </label>
              <input
                type="date"
                {...register('dob')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                PIN Code
              </label>
              <input
                {...register('pin')}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="e.g., 400001"
              />
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                City
              </label>
              <input
                {...register('city')}
                readOnly={isCityCountryAutofilled}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="e.g., Mumbai, Delhi"
              />
            </div>
            
            <div>
              <label className="block text-sm font-medium text-slate-700 mb-2">
                Country
              </label>
              <input
                {...register('country')}
                readOnly={isCityCountryAutofilled}
                className="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="India"
              />
            </div>
          </div>
          
          <div className="flex justify-end space-x-3">
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
              {isLoading ? 'Saving...' : contact ? 'Update Contact' : 'Create Contact'}
            </button>
          </div>
        </form>
      </div>
    </div>
  );
}