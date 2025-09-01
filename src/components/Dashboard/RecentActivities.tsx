import React from 'react';
import { formatDistanceToNow } from 'date-fns';
import { Clock, Phone, Mail, Calendar, FileText } from 'lucide-react';
import { Activity } from '../../types';

interface RecentActivitiesProps {
  activities: Activity[];
}

const activityIcons = {
  call: Phone,
  email: Mail,
  meeting: Calendar,
  note: FileText,
  task: Clock,
};

const priorityColors = {
  low: 'bg-slate-100 text-slate-600',
  medium: 'bg-yellow-100 text-yellow-800',
  high: 'bg-red-100 text-red-800',
};

export function RecentActivities({ activities }: RecentActivitiesProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200">
      <div className="p-6 border-b border-slate-200">
        <h3 className="text-lg font-semibold text-slate-900">Recent Activities</h3>
      </div>
      
      <div className="p-6">
        {activities.length === 0 ? (
          <p className="text-slate-500 text-center py-8">No recent activities</p>
        ) : (
          <div className="space-y-4">
            {activities.slice(0, 5).map((activity) => {
              const Icon = activityIcons[activity.type];
              return (
                <div key={activity.id} className="flex items-start space-x-3 p-3 hover:bg-slate-50 rounded-lg transition-colors">
                  <div className="flex-shrink-0">
                    <div className="p-2 bg-blue-100 text-blue-600 rounded-lg">
                      <Icon className="h-4 w-4" />
                    </div>
                  </div>
                  
                  <div className="flex-1 min-w-0">
                    <div className="flex items-center justify-between">
                      <p className="text-sm font-medium text-slate-900 truncate">
                        {activity.title}
                      </p>
                      <span className={`inline-flex items-center px-2 py-1 rounded-full text-xs font-medium ${priorityColors[activity.priority]}`}>
                        {activity.priority}
                      </span>
                    </div>
                    <p className="text-sm text-slate-500 mt-1">{activity.description}</p>
                    <p className="text-xs text-slate-400 mt-2">
                      {formatDistanceToNow(new Date(activity.createdAt), { addSuffix: true })}
                    </p>
                  </div>
                </div>
              );
            })}
          </div>
        )}
      </div>
    </div>
  );
}