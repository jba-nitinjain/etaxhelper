import React from 'react';
import { Users, Target, DollarSign, TrendingUp } from 'lucide-react';
import { StatsCard } from '../components/Dashboard/StatsCard';
import { RecentActivities } from '../components/Dashboard/RecentActivities';
import { PipelineChart } from '../components/Dashboard/PipelineChart';
import { useContacts } from '../hooks/useContacts';
import { useLeads } from '../hooks/useLeads';
import { useDeals, useDealRevenue, usePipelineValue } from '../hooks/useDeals';
import { useActivities } from '../hooks/useActivities';

export function Dashboard() {
  const { data: contacts = [] } = useContacts();
  const { data: leads = [] } = useLeads();
  const { data: deals = [] } = useDeals();
  const { data: activities = [] } = useActivities();
  const { data: revenue = 0 } = useDealRevenue();
  const { data: pipelineValue = 0 } = usePipelineValue();

  const conversionRate = leads.length > 0 
    ? (deals.filter(d => d.stage === 'closed_won').length / leads.length) * 100 
    : 0;

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
          title="Active Leads"
          value={leads.filter(l => !['closed_won', 'closed_lost'].includes(l.stage)).length}
          change={8}
          icon={Target}
          color="green"
        />
        <StatsCard
          title="Total Revenue"
          value={`$${revenue.toLocaleString()}`}
          change={15}
          icon={DollarSign}
          color="purple"
        />
        <StatsCard
          title="Conversion Rate"
          value={`${conversionRate.toFixed(1)}%`}
          change={-2}
          icon={TrendingUp}
          color="orange"
        />
      </div>
      
      <div className="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div className="lg:col-span-2">
          <PipelineChart leads={leads} />
        </div>
        <div>
          <RecentActivities activities={activities} />
        </div>
      </div>
      
      <div className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
        <h3 className="text-lg font-semibold text-slate-900 mb-4">Quick Stats</h3>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div className="text-center">
            <p className="text-2xl font-bold text-blue-600">{deals.length}</p>
            <p className="text-sm text-slate-600">Total Deals</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-green-600">${pipelineValue.toLocaleString()}</p>
            <p className="text-sm text-slate-600">Pipeline Value</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-purple-600">{activities.length}</p>
            <p className="text-sm text-slate-600">Activities</p>
          </div>
          <div className="text-center">
            <p className="text-2xl font-bold text-orange-600">
              ${deals.length > 0 ? (revenue / deals.filter(d => d.stage === 'closed_won').length || 1).toLocaleString() : '0'}
            </p>
            <p className="text-sm text-slate-600">Avg Deal Size</p>
          </div>
        </div>
      </div>
    </div>
  );
}