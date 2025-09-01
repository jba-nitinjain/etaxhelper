import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { useDeals } from '../hooks/useDeals';
import { Deal } from '../types';
import { formatDistanceToNow } from 'date-fns';

const stageColors = {
  discovery: 'bg-slate-100 text-slate-800',
  proposal: 'bg-blue-100 text-blue-800',
  negotiation: 'bg-yellow-100 text-yellow-800',
  contract: 'bg-orange-100 text-orange-800',
  closed_won: 'bg-green-100 text-green-800',
  closed_lost: 'bg-red-100 text-red-800',
};

export function Deals() {
  const { data: deals = [] } = useDeals();
  const [searchQuery, setSearchQuery] = useState('');

  const filteredDeals = deals.filter(deal =>
    deal.title.toLowerCase().includes(searchQuery.toLowerCase()) ||
    deal.description.toLowerCase().includes(searchQuery.toLowerCase())
  );

  return (
    <div className="space-y-6">
      <Header
        title="Deals"
        onSearch={setSearchQuery}
        showAddButton={true}
      />
      
      <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
        {Object.entries(stageColors).map(([stage, colorClass]) => {
          const stageDeals = filteredDeals.filter(deal => deal.stage === stage);
          const stageValue = stageDeals.reduce((sum, deal) => sum + deal.value, 0);
          
          return (
            <div key={stage} className="bg-white rounded-lg shadow-sm border border-slate-200 p-6">
              <div className="flex items-center justify-between mb-4">
                <h3 className="text-lg font-semibold text-slate-900 capitalize">
                  {stage.replace('_', ' ')}
                </h3>
                <span className={`px-2 py-1 text-xs font-medium rounded-full ${colorClass}`}>
                  {stageDeals.length}
                </span>
              </div>
              
              <p className="text-2xl font-bold text-slate-900 mb-4">
                ${stageValue.toLocaleString()}
              </p>
              
              <div className="space-y-3">
                {stageDeals.slice(0, 3).map((deal) => (
                  <div key={deal.id} className="p-3 bg-slate-50 rounded-lg">
                    <p className="font-medium text-slate-900 text-sm">{deal.title}</p>
                    <p className="text-xs text-slate-500 mt-1">
                      ${deal.value.toLocaleString()} • {deal.probability}%
                    </p>
                    <p className="text-xs text-slate-400 mt-1">
                      Due: {formatDistanceToNow(new Date(deal.expectedCloseDate), { addSuffix: true })}
                    </p>
                  </div>
                ))}
                {stageDeals.length > 3 && (
                  <p className="text-xs text-slate-500 text-center">
                    +{stageDeals.length - 3} more deals
                  </p>
                )}
              </div>
            </div>
          );
        })}
      </div>
    </div>
  );
}