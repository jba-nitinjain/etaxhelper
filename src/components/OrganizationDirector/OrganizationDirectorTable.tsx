import React from 'react';
import { Edit, Trash2, Mail, Phone, User, Briefcase, Calendar } from 'lucide-react';
import { OrganizationDirector } from '../../types';

interface OrganizationDirectorTableProps {
  directors: OrganizationDirector[];
  onEdit: (director: OrganizationDirector) => void;
  onDelete: (director_id: number) => void;
}

export function OrganizationDirectorTable({ directors, onEdit, onDelete }: OrganizationDirectorTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Name
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Contact
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Details
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {directors.map((director) => (
              <tr key={director.director_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <User className="h-5 w-5 text-slate-400 mr-4" />
                    <div>
                      <div className="text-sm font-medium text-slate-900">{director.NAME}</div>
                      <div className="text-sm text-slate-500">{director.designation}</div>
                    </div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                   <div>
                      {director.email && (
                        <div className="text-sm text-slate-900 flex items-center">
                          <Mail className="h-4 w-4 mr-2 text-slate-400" />
                          {director.email}
                        </div>
                      )}
                      {director.phone && (
                        <div className="text-sm text-slate-500 flex items-center mt-1">
                          <Phone className="h-4 w-4 mr-2 text-slate-400" />
                          {director.phone}
                        </div>
                      )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                    <div>
                        {director.din_number && (
                            <div className="text-sm text-slate-900 flex items-center">
                                <Briefcase className="h-4 w-4 mr-2 text-slate-400" />
                                DIN: {director.din_number}
                            </div>
                        )}
                        {director.date_of_appointment && (
                            <div className="text-sm text-slate-500 flex items-center mt-1">
                                <Calendar className="h-4 w-4 mr-2 text-slate-400" />
                                Appointed: {new Date(director.date_of_appointment).toLocaleDateString()}
                            </div>
                        )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(director)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Director"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(director.director_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Director"
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

      {directors.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No directors found</p>
        </div>
      )}
    </div>
  );
}
