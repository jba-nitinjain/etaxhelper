import React from 'react';
import { NavLink } from 'react-router-dom';
import { 
  LayoutDashboard, 
  Users, 
  Settings,
  Building,
  Landmark,
  Shield,
  Briefcase,
  Key,
  FileText,
  Share2,
  Map,
  UserCheck
} from 'lucide-react';

const navigation = [
  { name: 'Dashboard', href: '/', icon: LayoutDashboard },
  { name: 'Organizations', href: '/organizations', icon: Building },
  { name: 'Branches', href: '/organization-branches', icon: Map },
  { name: 'Contacts', href: '/contacts', icon: Users },
  { name: 'Directors', href: '/organization-directors', icon: Briefcase },
  { name: 'Bank Accounts', href: '/organization-banks', icon: Landmark },
  { name: 'Bank Signatories', href: '/organization-bank-signatories', icon: UserCheck },
  { name: 'Registrations', href: '/organization-registrations', icon: FileText },
  { name: 'Logins', href: '/organization-logins', icon: Key },
  { name: 'Groups', href: '/organization-groups', icon: Users },
  { name: 'Settings', href: '/settings', icon: Settings },
];

export function Sidebar() {
  return (
    <div className="bg-slate-900 text-white w-64 min-h-screen flex flex-col">
      <div className="p-6 border-b border-slate-700">
        <h1 className="text-xl font-bold">CRM Pro</h1>
        <p className="text-slate-400 text-sm mt-1">Customer Relationship Management</p>
      </div>
      
      <nav className="flex-1 px-4 py-6 space-y-2">
        {navigation.map((item) => (
          <NavLink
            key={item.name}
            to={item.href}
            className={({ isActive }) =>
              `flex items-center px-4 py-3 text-sm font-medium rounded-lg transition-colors ${
                isActive
                  ? 'bg-blue-600 text-white'
                  : 'text-slate-300 hover:bg-slate-800 hover:text-white'
              }`
            }
          >
            <item.icon className="mr-3 h-5 w-5" />
            {item.name}
          </NavLink>
        ))}
      </nav>
      
      <div className="p-4 border-t border-slate-700">
        <div className="flex items-center">
          <div className="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
            <span className="text-sm font-medium">JD</span>
          </div>
          <div className="ml-3">
            <p className="text-sm font-medium">John Doe</p>
            <p className="text-xs text-slate-400">Sales Manager</p>
          </div>
        </div>
      </div>
    </div>
  );
}