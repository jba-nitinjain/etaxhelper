export interface Contact {
  id: string;
  firstName: string;
  lastName: string;
  email: string;
  phone: string;
  company: string;
  position: string;
  source: 'website' | 'referral' | 'cold_call' | 'social_media' | 'event' | 'other';
  status: 'active' | 'inactive' | 'prospect';
  tags: string[];
  notes: string;
  createdAt: Date;
  updatedAt: Date;
  lastContactDate?: Date;
}

export interface Lead {
  id: string;
  contactId: string;
  title: string;
  description: string;
  value: number;
  stage: 'prospect' | 'qualified' | 'proposal' | 'negotiation' | 'closed_won' | 'closed_lost';
  probability: number;
  expectedCloseDate: Date;
  assignedTo: string;
  source: string;
  createdAt: Date;
  updatedAt: Date;
}

export interface Deal {
  id: string;
  contactId: string;
  leadId?: string;
  title: string;
  description: string;
  value: number;
  stage: 'discovery' | 'proposal' | 'negotiation' | 'contract' | 'closed_won' | 'closed_lost';
  probability: number;
  expectedCloseDate: Date;
  actualCloseDate?: Date;
  assignedTo: string;
  createdAt: Date;
  updatedAt: Date;
}

export interface Activity {
  id: string;
  contactId: string;
  leadId?: string;
  dealId?: string;
  type: 'call' | 'email' | 'meeting' | 'note' | 'task';
  title: string;
  description: string;
  dueDate?: Date;
  completedAt?: Date;
  priority: 'low' | 'medium' | 'high';
  assignedTo: string;
  createdAt: Date;
  updatedAt: Date;
}

export interface DashboardStats {
  totalContacts: number;
  totalLeads: number;
  totalDeals: number;
  totalRevenue: number;
  conversionRate: number;
  avgDealSize: number;
  pipelineValue: number;
  activitiesThisWeek: number;
}