import React from 'react';
import { Edit, Trash2, Users } from 'lucide-react';
import { OrganizationGroup } from '../../types';

interface OrganizationGroupTableProps {
  groups: OrganizationGroup[];
  onEdit: (group: OrganizationGroup) => void;
  onDelete: (group_id: number) => void;
}

export function OrganizationGroupTable({ groups, onEdit, onDelete }: OrganizationGroupTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Group Name
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Description
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {groups.map((group) => (
              <tr key={group.group_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <Users className="h-5 w-5 text-slate-400 mr-4" />
                    <div className="text-sm font-medium text-slate-900">{group.group_name}</div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="text-sm text-slate-500">{group.description}</div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(group)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Group"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(group.group_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Group"
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

      {groups.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No groups found</p>
        </div>
      )}
    </div>
  );
}
