import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { QueryClient, QueryClientProvider } from '@tanstack/react-query';
import { Sidebar } from './components/Layout/Sidebar';
import { Dashboard } from './pages/Dashboard';
import { Contacts } from './pages/Contacts';

const queryClient = new QueryClient({
  defaultOptions: {
    queries: {
      staleTime: 5 * 60 * 1000, // 5 minutes
      gcTime: 10 * 60 * 1000, // 10 minutes
    },
  },
});

function App() {
  return (
    <QueryClientProvider client={queryClient}>
      <Router>
        <div className="flex min-h-screen bg-slate-100">
          <Sidebar />
          
          <div className="flex-1 flex flex-col">
            <main className="flex-1 p-6">
              <Routes>
                <Route path="/" element={<Dashboard />} />
                <Route path="/contacts" element={<Contacts />} />
                <Route path="/organizations" element={
                  <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
                    <h1 className="text-2xl font-bold text-slate-900 mb-4">Organizations</h1>
                    <p className="text-slate-600">Organizations management coming soon...</p>
                  </div>
                } />
                <Route path="/settings" element={
                  <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
                    <h1 className="text-2xl font-bold text-slate-900 mb-4">Settings</h1>
                    <p className="text-slate-600">Settings page coming soon...</p>
                  </div>
                } />
              </Routes>
            </main>
          </div>
        </div>
      </Router>
    </QueryClientProvider>
  );
}

export default App;