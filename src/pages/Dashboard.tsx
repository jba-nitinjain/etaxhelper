import React from 'react';
import { Users, Building, Phone, MapPin } from 'lucide-react';
import { StatsCard } from '../components/Dashboard/StatsCard';
import { useContacts } from '../hooks/useContacts';
import { useOrganizations } from '../hooks/useOrganizations';
import { formatPhone } from '../config/api';

export function Dashboard() {
  const { data: contacts = [], isLoading: contactsLoading } = useContacts();
  const { data: organizations = [], isLoading: orgsLoading } = useOrganizations();

  const contactsWithEmail = contacts.filter(c => c.email).length;
  const contactsWithPhone = contacts.filter(c => c.phone).length;
  const uniqueCities = [...new Set(contacts.filter(c => c.city).map(c => c.city))].length;

  if (contactsLoading || orgsLoading) {
    return (
      <div className="space-y-6">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {[1, 2, 3, 4].map((i) => (
            <div key={i} className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
              <div className="animate-pulse">
                <div className="h-4 bg-slate-200 rounded w-3/4 mb-2"></div>
                <div className="h-8 bg-slate-200 rounded w-1/2 mb-2"></div>
                <div className="h-3 bg-slate-200 rounded w-2/3"></div>
              </div>
            </div>
          ))}
        </div>
      </div>
    );
  }

  return (
    <div className="space-y-6">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <StatsCard
          title="Total Contacts"
          value={contacts.length}
          icon={Users}
          color="blue"
        />
        <StatsCard
          title="Organizations"
          value={organizations.length}
          icon={Building}
          color="green"
        />
        <StatsCard
          title="Contacts with Email"
          value={contactsWithEmail}
          icon={Phone}
          color="purple"
        />
        <StatsCard
          title="Cities Covered"
          value={uniqueCities}
          icon={MapPin}
          color="orange"
        />
      </div>
      
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
          <h3 className="text-lg font-semibold text-slate-900 mb-4">Recent Contacts</h3>
          {contacts.length === 0 ? (
            <p className="text-slate-500 text-center py-8">No contacts found</p>
          ) : (
            <div className="space-y-4">
              {contacts.slice(0, 5).map((contact) => (
                <div key={contact.contact_id} className="flex items-center space-x-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                  <div className="flex-shrink-0">
                    <div className="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                      <span className="text-sm font-medium">
                        {contact.NAME.split(' ').map(n => n.charAt(0)).join('').slice(0, 2)}
                      </span>
                    </div>
                  </div>
                  
                  <div className="flex-1 min-w-0">
                    <p className="text-sm font-medium text-slate-900">
                      {contact.NAME}
                    </p>
                    {contact.organization && (
                      <p className="text-sm text-slate-500">{contact.organization.display_name}</p>
                    )}
                    {contact.designation && (
                      <p className="text-xs text-slate-400">{contact.designation}</p>
                    )}
                  </div>
                  
                  <div className="flex-shrink-0">
                    {contact.phone && (
                      <span className="text-xs text-slate-500">
                        {formatPhone(contact.phone)}
                      </span>
                    )}
                  </div>
                </div>
              ))}
            </div>
          )}
        </div>

        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
          <h3 className="text-lg font-semibold text-slate-900 mb-4">Organizations Overview</h3>
          {organizations.length === 0 ? (
            <p className="text-slate-500 text-center py-8">No organizations found</p>
          ) : (
            <div className="space-y-4">
              {organizations.slice(0, 5).map((org) => (
                <div key={org.org_id} className="flex items-center space-x-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                  <div className="flex-shrink-0">
                    <div className="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                      <Building className="h-5 w-5" />
                    </div>
                  </div>
                  
                  <div className="flex-1 min-w-0">
                    <p className="text-sm font-medium text-slate-900">
                      {org.display_name}
                    </p>
                    {org.company_name && (
                      <p className="text-sm text-slate-500">{org.company_name}</p>
                    )}
                    {org.org_type && (
                      <p className="text-xs text-slate-400">{org.org_type}</p>
                    )}
                  </div>
                  
                  <div className="flex-shrink-0">
                    {org.phone_work && (
                      <span className="text-xs text-slate-500">
                        {formatPhone(org.phone_work)}
                      </span>
                    )}
                  </div>
                </div>
              ))}
            </div>
          )}
        </div>
      </div>
    </div>
  );
}