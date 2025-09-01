import React from 'react';
import { Search, Bell, Plus } from 'lucide-react';

interface HeaderProps {
  title: string;
  onSearch?: (query: string) => void;
  onAddNew?: () => void;
  showAddButton?: boolean;
}

export function Header({ title, onSearch, onAddNew, showAddButton = false }: HeaderProps) {
  return (
    <header className="bg-white shadow-sm border-b border-slate-200 px-6 py-4">
      <div className="flex items-center justify-between">
        <div>
          <h1 className="text-2xl font-bold text-slate-900">{title}</h1>
        </div>
        
        <div className="flex items-center space-x-4">
          {onSearch && (
            <div className="relative">
              <Search className="absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400 h-4 w-4" />
              <input
                type="text"
                placeholder="Search..."
                onChange={(e) => onSearch(e.target.value)}
                className="pl-10 pr-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
              />
            </div>
          )}
          
          <button className="p-2 text-slate-600 hover:text-slate-900 hover:bg-slate-100 rounded-lg transition-colors">
            <Bell className="h-5 w-5" />
          </button>
          
          {showAddButton && onAddNew && (
            <button
              onClick={onAddNew}
              className="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center space-x-2"
            >
              <Plus className="h-4 w-4" />
              <span>Add New</span>
            </button>
          )}
        </div>
      </div>
    </header>
  );
}