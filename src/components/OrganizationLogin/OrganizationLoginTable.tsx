import React from 'react';
import { Edit, Trash2, Key, Link as LinkIcon, User } from 'lucide-react';
import { OrganizationLogin } from '../../types';

interface OrganizationLoginTableProps {
  logins: OrganizationLogin[];
  onEdit: (login: OrganizationLogin) => void;
  onDelete: (login_id: number) => void;
}

export function OrganizationLoginTable({ logins, onEdit, onDelete }: OrganizationLoginTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Website
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                User ID
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Last Updated
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {logins.map((login) => (
              <tr key={login.login_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <LinkIcon className="h-5 w-5 text-slate-400 mr-4" />
                    <a href={login.website} target="_blank" rel="noopener noreferrer" className="text-sm font-medium text-blue-600 hover:underline">
                        {login.website}
                    </a>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                    <div className="flex items-center">
                        <User className="h-4 w-4 mr-2 text-slate-400" />
                        <div className="text-sm text-slate-900">{login.user_id}</div>
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                    <div className="text-sm text-slate-500">{new Date(login.last_updated).toLocaleString()}</div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(login)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Login"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(login.login_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Login"
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

      {logins.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No logins found</p>
        </div>
      )}
    </div>
  );
}
