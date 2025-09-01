import React from 'react';
import { Header } from '../components/Layout/Header';
import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer, LineChart, Line, PieChart, Pie, Cell } from 'recharts';
import { useContacts } from '../hooks/useContacts';
import { useLeads } from '../hooks/useLeads';
import { useDeals } from '../hooks/useDeals';

const COLORS = ['#3B82F6', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6', '#06B6D4'];

export function Analytics() {
  const { data: contacts = [] } = useContacts();
  const { data: leads = [] } = useLeads();
  const { data: deals = [] } = useDeals();

  // Contact source distribution
  const sourceData = contacts.reduce((acc: any[], contact) => {
    const existing = acc.find(item => item.source === contact.source);
    if (existing) {
      existing.count++;
    } else {
      acc.push({ source: contact.source, count: 1 });
    }
    return acc;
  }, []);

  // Monthly deal values
  const monthlyData = deals.reduce((acc: any[], deal) => {
    const month = format(new Date(deal.createdAt), 'MMM yyyy');
    const existing = acc.find(item => item.month === month);
    if (existing) {
      existing.value += deal.value;
      existing.count++;
    } else {
      acc.push({ month, value: deal.value, count: 1 });
    }
    return acc;
  }, []);

  return (
    <div className="space-y-6">
      <Header title="Analytics" />
      
      <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
          <h3 className="text-lg font-semibold text-slate-900 mb-4">Contact Sources</h3>
          <ResponsiveContainer width="100%" height={300}>
            <PieChart>
              <Pie
                data={sourceData}
                cx="50%"
                cy="50%"
                outerRadius={80}
                fill="#8884d8"
                dataKey="count"
                label={({ source, count }) => `${source}: ${count}`}
              >
                {sourceData.map((entry, index) => (
                  <Cell key={`cell-${index}`} fill={COLORS[index % COLORS.length]} />
                ))}
              </Pie>
              <Tooltip />
            </PieChart>
          </ResponsiveContainer>
        </div>
        
        <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
          <h3 className="text-lg font-semibold text-slate-900 mb-4">Monthly Deal Performance</h3>
          <ResponsiveContainer width="100%" height={300}>
            <LineChart data={monthlyData}>
              <CartesianGrid strokeDasharray="3 3" />
              <XAxis dataKey="month" />
              <YAxis />
              <Tooltip formatter={(value) => [`$${value.toLocaleString()}`, 'Deal Value']} />
              <Line type="monotone" dataKey="value" stroke="#3B82F6" strokeWidth={2} />
            </LineChart>
          </ResponsiveContainer>
        </div>
      </div>
      
      <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
        <h3 className="text-lg font-semibold text-slate-900 mb-6">Key Metrics</h3>
        
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div className="text-center">
            <div className="text-3xl font-bold text-blue-600 mb-2">
              {((deals.filter(d => d.stage === 'closed_won').length / leads.length) * 100 || 0).toFixed(1)}%
            </div>
            <p className="text-sm text-slate-600">Lead to Deal Conversion Rate</p>
          </div>
          
          <div className="text-center">
            <div className="text-3xl font-bold text-green-600 mb-2">
              ${(deals.filter(d => d.stage === 'closed_won').reduce((sum, d) => sum + d.value, 0) / 
                 Math.max(deals.filter(d => d.stage === 'closed_won').length, 1)).toLocaleString()}
            </div>
            <p className="text-sm text-slate-600">Average Deal Size</p>
          </div>
          
          <div className="text-center">
            <div className="text-3xl font-bold text-purple-600 mb-2">
              {deals.filter(d => !['closed_won', 'closed_lost'].includes(d.stage)).length}
            </div>
            <p className="text-sm text-slate-600">Active Deals</p>
          </div>
        </div>
      </div>
    </div>
  );
}