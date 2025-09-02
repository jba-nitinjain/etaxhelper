import React from 'react';
import { Edit, Trash2, Share2, Link as LinkIcon, Smartphone } from 'lucide-react';
import { OrganizationSocialMedia } from '../../types';

interface OrganizationSocialMediaTableProps {
  socials: OrganizationSocialMedia[];
  onEdit: (social: OrganizationSocialMedia) => void;
  onDelete: (social_id: number) => void;
}

export function OrganizationSocialMediaTable({ socials, onEdit, onDelete }: OrganizationSocialMediaTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Platform
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
            {socials.map((social) => (
              <tr key={social.social_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <Share2 className="h-5 w-5 text-slate-400 mr-4" />
                    <div className="text-sm font-medium text-slate-900">{social.platform}</div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                    <div>
                        {social.handle_name && <div className="text-sm text-slate-900">@{social.handle_name}</div>}
                        {social.website && (
                            <div className="flex items-center text-sm text-slate-500 mt-1">
                                <LinkIcon className="h-4 w-4 mr-2" />
                                <a href={social.website} target="_blank" rel="noopener noreferrer" className="hover:underline">{social.website}</a>
                            </div>
                        )}
                        {social.mobile_app && (
                            <div className="flex items-center text-sm text-slate-500 mt-1">
                                <Smartphone className="h-4 w-4 mr-2" />
                                {social.mobile_app}
                            </div>
                        )}
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(social)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Social Media"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(social.social_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Social Media"
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

      {socials.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No social media accounts found</p>
        </div>
      )}
    </div>
  );
}
