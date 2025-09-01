import React from 'react';
import { Edit, Trash2, Mail, Phone, Building } from 'lucide-react';
import { Organization } from '../../types';

interface OrganizationTableProps {
  organizations: Organization[];
  onEdit: (organization: Organization) => void;
  onDelete: (org_id: number) => void;
}

export function OrganizationTable({ organizations, onEdit, onDelete }: OrganizationTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Organization
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Contact
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Type
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {organizations.map((org) => (
              <tr key={org.org_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <Building className="h-5 w-5 text-slate-400 mr-4" />
                    <div>
                      <div className="text-sm font-medium text-slate-900">
                        {org.display_name}
                      </div>
                      <div className="text-sm text-slate-500">{org.company_name}</div>
                    </div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                   <div>
                      {org.email && (
                        <div className="text-sm text-slate-900 flex items-center">
                          <Mail className="h-4 w-4 mr-2 text-slate-400" />
                          {org.email}
                        </div>
                      )}
                      {org.phone_work && (
                        <div className="text-sm text-slate-500 flex items-center mt-1">
                          <Phone className="h-4 w-4 mr-2 text-slate-400" />
                          {org.phone_work}
                        </div>
                      )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <span className="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                    {org.org_type}
                  </span>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(org)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Organization"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(org.org_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Organization"
                    >
                      <Trash2 className="h-4 w-4" />
                    </button>
                  </div>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>

      {organizations.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No organizations found</p>
        </div>
      )}
    </div>
  );
}
