import React, { useState } from 'react';
import { Header } from '../components/Layout/Header';
import { useActivities, useUpcomingActivities, useOverdueActivities } from '../hooks/useActivities';
import { Activity } from '../types';
import { Calendar, Clock, AlertTriangle, CheckCircle } from 'lucide-react';
import { formatDistanceToNow, format } from 'date-fns';

const typeIcons = {
  call: Clock,
  email: Clock,
  meeting: Calendar,
  note: Clock,
  task: CheckCircle,
};

const priorityColors = {
  low: 'bg-slate-100 text-slate-600',
  medium: 'bg-yellow-100 text-yellow-800',
  high: 'bg-red-100 text-red-800',
};

export function Activities() {
  const { data: allActivities = [] } = useActivities();
  const { data: upcomingActivities = [] } = useUpcomingActivities();
  const { data: overdueActivities = [] } = useOverdueActivities();
  const [activeTab, setActiveTab] = useState('all');

  const getActivitiesByTab = () => {
    switch (activeTab) {
      case 'upcoming':
        return upcomingActivities;
      case 'overdue':
        return overdueActivities;
      default:
        return allActivities;
    }
  };

  const activities = getActivitiesByTab();

  return (
    <div className="space-y-6">
      <Header
        title="Activities"
        showAddButton={true}
      />
      
      <div className="bg-white rounded-lg shadow-sm border border-slate-200">
        <div className="border-b border-slate-200">
          <nav className="flex space-x-8 px-6">
            {[
              { id: 'all', label: 'All Activities', count: allActivities.length },
              { id: 'upcoming', label: 'Upcoming', count: upcomingActivities.length },
              { id: 'overdue', label: 'Overdue', count: overdueActivities.length },
            ].map((tab) => (
              <button
                key={tab.id}
                onClick={() => setActiveTab(tab.id)}
                className={`py-4 px-1 border-b-2 font-medium text-sm transition-colors ${
                  activeTab === tab.id
                    ? 'border-blue-500 text-blue-600'
                    : 'border-transparent text-slate-500 hover:text-slate-700'
                }`}
              >
                {tab.label}
                {tab.count > 0 && (
                  <span className="ml-2 bg-slate-100 text-slate-600 py-1 px-2 rounded-full text-xs">
                    {tab.count}
                  </span>
                )}
              </button>
            ))}
          </nav>
        </div>
        
        <div className="p-6">
          {activities.length === 0 ? (
            <div className="text-center py-12">
              <Calendar className="mx-auto h-12 w-12 text-slate-400" />
              <h3 className="mt-2 text-sm font-medium text-slate-900">No activities</h3>
              <p className="mt-1 text-sm text-slate-500">Get started by creating a new activity.</p>
            </div>
          ) : (
            <div className="space-y-4">
              {activities.map((activity) => {
                const Icon = typeIcons[activity.type];
                const isOverdue = activity.dueDate && new Date(activity.dueDate) < new Date() && !activity.completedAt;
                
                return (
                  <div key={activity.id} className={`p-4 border rounded-lg hover:shadow-sm transition-shadow ${
                    isOverdue ? 'border-red-200 bg-red-50' : 'border-slate-200'
                  }`}>
                    <div className="flex items-start justify-between">
                      <div className="flex items-start space-x-3">
                        <div className={`p-2 rounded-lg ${
                          isOverdue ? 'bg-red-100 text-red-600' : 'bg-blue-100 text-blue-600'
                        }`}>
                          {isOverdue ? <AlertTriangle className="h-4 w-4" /> : <Icon className="h-4 w-4" />}
                        </div>
                        
                        <div className="flex-1">
                          <div className="flex items-center space-x-2">
                            <h4 className="text-sm font-medium text-slate-900">{activity.title}</h4>
                            <span className={`inline-flex px-2 py-1 text-xs font-medium rounded-full ${priorityColors[activity.priority]}`}>
                              {activity.priority}
                            </span>
                          </div>
                          <p className="text-sm text-slate-600 mt-1">{activity.description}</p>
                          
                          <div className="flex items-center space-x-4 mt-2 text-xs text-slate-500">
                            <span>Type: {activity.type}</span>
                            <span>Assigned to: {activity.assignedTo}</span>
                            {activity.dueDate && (
                              <span>
                                Due: {format(new Date(activity.dueDate), 'MMM d, yyyy')}
                              </span>
                            )}
                          </div>
                        </div>
                      </div>
                      
                      <div className="text-xs text-slate-400">
                        {formatDistanceToNow(new Date(activity.createdAt), { addSuffix: true })}
                      </div>
                    </div>
                  </div>
                );
              })}
            </div>
          )}
        </div>
      </div>
    </div>
  );
}