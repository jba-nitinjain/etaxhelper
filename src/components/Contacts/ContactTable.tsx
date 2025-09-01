import React from 'react';
import { formatPhone, formatDate } from '../../config/api';
import { Edit, Trash2, Mail, Phone, Building } from 'lucide-react';
import { OrganizationContact } from '../../types';

interface ContactTableProps {
  contacts: OrganizationContact[];
  onEdit: (contact: OrganizationContact) => void;
  onDelete: (contact_id: number) => void;
}

export function ContactTable({ contacts, onEdit, onDelete }: ContactTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Contact
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Organization
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Location
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Date of Birth
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {contacts.map((contact) => (
              <tr key={contact.contact_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div>
                    <div className="text-sm font-medium text-slate-900">
                      {contact.NAME}
                    </div>
                    {contact.designation && (
                      <div className="text-sm text-slate-500">{contact.designation}</div>
                    )}
                    <div className="text-sm text-slate-500 flex items-center space-x-4 mt-1">
                      {contact.email && (
                        <span className="flex items-center">
                          <Mail className="h-3 w-3 mr-1" />
                          {contact.email}
                        </span>
                      )}
                      {contact.phone && (
                        <span className="flex items-center">
                          <Phone className="h-3 w-3 mr-1" />
                          {formatPhone(contact.phone)}
                        </span>
                      )}
                    </div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  {contact.organization && (
                    <div>
                      <div className="text-sm font-medium text-slate-900 flex items-center">
                        <Building className="h-4 w-4 mr-2 text-slate-400" />
                        {contact.organization.display_name}
                      </div>
                      {contact.organization.company_name && (
                        <div className="text-sm text-slate-500">
                          {contact.organization.company_name}
                        </div>
                      )}
                      {contact.organization.org_type && (
                        <div className="text-xs text-slate-400">
                          {contact.organization.org_type}
                        </div>
                      )}
                    </div>
                  )}
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="text-sm text-slate-900">
                    {contact.city && contact.country ? `${contact.city}, ${contact.country}` : 
                     contact.city || contact.country || '-'}
                  </div>
                  {contact.pin && (
                    <div className="text-sm text-slate-500">PIN: {contact.pin}</div>
                  )}
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm text-slate-500">
                  {contact.dob ? formatDate(contact.dob) : '-'}
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(contact)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Contact"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(contact.contact_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Contact"
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
      
      {contacts.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No contacts found</p>
        </div>
      )}
    </div>
  );
}