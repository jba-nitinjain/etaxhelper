import React from 'react';
import { BarChart, Bar, XAxis, YAxis, CartesianGrid, Tooltip, ResponsiveContainer } from 'recharts';
import { Lead } from '../../types';

interface PipelineChartProps {
  leads: Lead[];
}

export function PipelineChart({ leads }: PipelineChartProps) {
  const stageData = [
    { stage: 'Prospect', count: 0, value: 0 },
    { stage: 'Qualified', count: 0, value: 0 },
    { stage: 'Proposal', count: 0, value: 0 },
    { stage: 'Negotiation', count: 0, value: 0 },
    { stage: 'Closed Won', count: 0, value: 0 },
    { stage: 'Closed Lost', count: 0, value: 0 },
  ];

  leads.forEach(lead => {
    const stageMap: Record<Lead['stage'], string> = {
      prospect: 'Prospect',
      qualified: 'Qualified',
      proposal: 'Proposal',
      negotiation: 'Negotiation',
      closed_won: 'Closed Won',
      closed_lost: 'Closed Lost',
    };
    
    const stageName = stageMap[lead.stage];
    const stageIndex = stageData.findIndex(s => s.stage === stageName);
    if (stageIndex !== -1) {
      stageData[stageIndex].count++;
      stageData[stageIndex].value += lead.value;
    }
  });

  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200">
      <div className="p-6 border-b border-slate-200">
        <h3 className="text-lg font-semibold text-slate-900">Sales Pipeline</h3>
      </div>
      
      <div className="p-6">
        <ResponsiveContainer width="100%" height={300}>
          <BarChart data={stageData}>
            <CartesianGrid strokeDasharray="3 3" />
            <XAxis dataKey="stage" />
            <YAxis />
            <Tooltip 
              formatter={(value, name) => [
                name === 'count' ? value : `$${value.toLocaleString()}`,
                name === 'count' ? 'Leads' : 'Value'
              ]}
            />
            <Bar dataKey="count" fill="#3B82F6" />
          </BarChart>
        </ResponsiveContainer>
      </div>
    </div>
  );
}