import React from 'react';
import { Users, Building, TrendingUp, Phone } from 'lucide-react';
import { StatsCard } from '../components/Dashboard/StatsCard';
import { useContacts } from '../hooks/useContacts';

export function Dashboard() {
  const { data: contacts = [] } = useContacts();

  const activeContacts = contacts.filter(c => c.status === 'active').length;
  const prospectContacts = contacts.filter(c => c.status === 'prospect').length;
  const totalCompanies = [...new Set(contacts.map(c => c.company))].length;

  return (
    <div className="space-y-6">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <StatsCard
          title="Total Contacts"
          value={contacts.length}
          change={12}
          icon={Users}
          color="blue"
        />
        <StatsCard
          title="Active Contacts"
          value={activeContacts}
          change={8}
          icon={Phone}
          color="green"
        />
        <StatsCard
          title="Prospects"
          value={prospectContacts}
          change={15}
          icon={TrendingUp}
          color="purple"
        />
        <StatsCard
          title="Companies"
          value={totalCompanies}
          change={5}
          icon={Building}
          color="orange"
        />
      </div>
      
      <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
        <h3 className="text-lg font-semibold text-slate-900 mb-4">Contact Overview</h3>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div className="text-center">
            <p className="text-2xl font-bold text-blue-600">{contacts.length}</p>
            <p className="text-sm text-slate-600">Total Contacts</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-green-600">{activeContacts}</p>
            <p className="text-sm text-slate-600">Active</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-purple-600">{prospectContacts}</p>
            <p className="text-sm text-slate-600">Prospects</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-orange-600">{totalCompanies}</p>
            <p className="text-sm text-slate-600">Companies</p>
          </div>
        </div>
      </div>

      <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
        <h3 className="text-lg font-semibold text-slate-900 mb-4">Recent Contacts</h3>
        {contacts.length === 0 ? (
          <p className="text-slate-500 text-center py-8">No contacts found</p>
        ) : (
          <div className="space-y-4">
            {contacts.slice(0, 5).map((contact) => (
              <div key={contact.id} className="flex items-center space-x-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                <div className="flex-shrink-0">
                  <div className="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                    <span className="text-sm font-medium">
                      {contact.firstName.charAt(0)}{contact.lastName.charAt(0)}
                    </span>
                  </div>
                </div>
                
                <div className="flex-1 min-w-0">
                  <p className="text-sm font-medium text-slate-900">
                    {contact.firstName} {contact.lastName}
                  </p>
                  <p className="text-sm text-slate-500">{contact.company}</p>
                  <p className="text-xs text-slate-400">{contact.email}</p>
                </div>
                
                <div className="flex-shrink-0">
                  <span className={`inline-flex px-2 py-1 text-xs font-medium rounded-full ${
                    contact.status === 'active' ? 'bg-green-100 text-green-800' :
                    contact.status === 'prospect' ? 'bg-yellow-100 text-yellow-800' :
                    'bg-red-100 text-red-800'
                  }`}>
                    {contact.status}
                  </span>
                </div>
              </div>
            ))}
          </div>
        )}
      </div>
    </div>
  );
}