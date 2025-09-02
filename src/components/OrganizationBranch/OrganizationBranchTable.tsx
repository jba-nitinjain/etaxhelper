import React from 'react';
import { Edit, Trash2, Mail, Phone, MapPin } from 'lucide-react';
import { OrganizationBranch } from '../../types';

interface OrganizationBranchTableProps {
  branches: OrganizationBranch[];
  onEdit: (branch: OrganizationBranch) => void;
  onDelete: (branch_id: number) => void;
}

export function OrganizationBranchTable({ branches, onEdit, onDelete }: OrganizationBranchTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Branch Name
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Address
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Contact
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {branches.map((branch) => (
              <tr key={branch.branch_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <MapPin className="h-5 w-5 text-slate-400 mr-4" />
                    <div className="text-sm font-medium text-slate-900">{branch.branch_name}</div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="text-sm text-slate-900">{branch.address_line}</div>
                  <div className="text-sm text-slate-500">{branch.city}, {branch.state} {branch.postal_code}</div>
                  <div className="text-sm text-slate-500">{branch.country}</div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                   <div>
                      {branch.email && (
                        <div className="text-sm text-slate-900 flex items-center">
                          <Mail className="h-4 w-4 mr-2 text-slate-400" />
                          {branch.email}
                        </div>
                      )}
                      {branch.phone && (
                        <div className="text-sm text-slate-500 flex items-center mt-1">
                          <Phone className="h-4 w-4 mr-2 text-slate-400" />
                          {branch.phone}
                        </div>
                      )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(branch)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Branch"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(branch.branch_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Branch"
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

      {branches.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No branches found</p>
        </div>
      )}
    </div>
  );
}
