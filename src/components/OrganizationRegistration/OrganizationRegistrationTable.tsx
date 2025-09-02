import React from 'react';
import { Edit, Trash2, FileText, Calendar } from 'lucide-react';
import { OrganizationRegistration } from '../../types';

interface OrganizationRegistrationTableProps {
  registrations: OrganizationRegistration[];
  onEdit: (registration: OrganizationRegistration) => void;
  onDelete: (reg_id: number) => void;
}

export function OrganizationRegistrationTable({ registrations, onEdit, onDelete }: OrganizationRegistrationTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Registration Type
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Registration Number
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Validity
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {registrations.map((reg) => (
              <tr key={reg.reg_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <FileText className="h-5 w-5 text-slate-400 mr-4" />
                    <div className="text-sm font-medium text-slate-900">{reg.reg_type}</div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="text-sm text-slate-900">{reg.reg_number}</div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                    <div>
                        {reg.valid_from && (
                            <div className="text-sm text-slate-900 flex items-center">
                                <Calendar className="h-4 w-4 mr-2 text-slate-400" />
                                From: {new Date(reg.valid_from).toLocaleDateString()}
                            </div>
                        )}
                        {reg.valid_to && (
                            <div className="text-sm text-slate-500 flex items-center mt-1">
                                <Calendar className="h-4 w-4 mr-2 text-slate-400" />
                                To: {new Date(reg.valid_to).toLocaleDateString()}
                            </div>
                        )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(reg)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Registration"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(reg.reg_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Registration"
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

      {registrations.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No registrations found</p>
        </div>
      )}
    </div>
  );
}
