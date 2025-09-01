import { Contact, Lead, Deal, Activity } from '../types';

export const sampleContacts: Contact[] = [
  {
    id: '1',
    firstName: 'Sarah',
    lastName: 'Johnson',
    email: 'sarah.johnson@techcorp.com',
    phone: '+1 (555) 123-4567',
    company: 'TechCorp Solutions',
    position: 'CTO',
    source: 'website',
    status: 'active',
    tags: ['enterprise', 'decision-maker'],
    notes: 'Interested in enterprise solutions. Key decision maker.',
    createdAt: new Date('2024-01-15'),
    updatedAt: new Date('2024-01-20'),
    lastContactDate: new Date('2024-01-18'),
  },
  {
    id: '2',
    firstName: 'Michael',
    lastName: 'Chen',
    email: 'michael.chen@innovate.io',
    phone: '+1 (555) 987-6543',
    company: 'Innovate.io',
    position: 'VP of Operations',
    source: 'referral',
    status: 'prospect',
    tags: ['startup', 'fast-growth'],
    notes: 'Referred by John Smith. Looking for scalable solutions.',
    createdAt: new Date('2024-01-10'),
    updatedAt: new Date('2024-01-15'),
  },
];

export const sampleLeads: Lead[] = [
  {
    id: '1',
    contactId: '1',
    title: 'Enterprise Software License',
    description: 'TechCorp looking for comprehensive enterprise solution',
    value: 150000,
    stage: 'proposal',
    probability: 75,
    expectedCloseDate: new Date('2024-02-28'),
    assignedTo: 'John Doe',
    source: 'website',
    createdAt: new Date('2024-01-15'),
    updatedAt: new Date('2024-01-20'),
  },
  {
    id: '2',
    contactId: '2',
    title: 'Startup Package Deal',
    description: 'Innovate.io interested in startup-friendly pricing',
    value: 45000,
    stage: 'qualified',
    probability: 60,
    expectedCloseDate: new Date('2024-03-15'),
    assignedTo: 'Jane Smith',
    source: 'referral',
    createdAt: new Date('2024-01-10'),
    updatedAt: new Date('2024-01-15'),
  },
];

export const sampleDeals: Deal[] = [
  {
    id: '1',
    contactId: '1',
    leadId: '1',
    title: 'TechCorp Enterprise License',
    description: 'Annual enterprise software license with premium support',
    value: 150000,
    stage: 'negotiation',
    probability: 80,
    expectedCloseDate: new Date('2024-02-28'),
    assignedTo: 'John Doe',
    createdAt: new Date('2024-01-15'),
    updatedAt: new Date('2024-01-25'),
  },
];

export const sampleActivities: Activity[] = [
  {
    id: '1',
    contactId: '1',
    leadId: '1',
    type: 'call',
    title: 'Follow-up call with Sarah Johnson',
    description: 'Discuss enterprise requirements and timeline',
    dueDate: new Date('2024-02-05'),
    priority: 'high',
    assignedTo: 'John Doe',
    createdAt: new Date('2024-01-20'),
    updatedAt: new Date('2024-01-20'),
  },
  {
    id: '2',
    contactId: '2',
    type: 'meeting',
    title: 'Product demo for Innovate.io',
    description: 'Scheduled product demonstration and Q&A session',
    dueDate: new Date('2024-02-10'),
    priority: 'medium',
    assignedTo: 'Jane Smith',
    createdAt: new Date('2024-01-18'),
    updatedAt: new Date('2024-01-18'),
  },
];

// Initialize sample data
export function initializeSampleData() {
  const existingContacts = localStorage.getItem('crm_contacts');
  if (!existingContacts) {
    localStorage.setItem('crm_contacts', JSON.stringify(sampleContacts));
    localStorage.setItem('crm_leads', JSON.stringify(sampleLeads));
    localStorage.setItem('crm_deals', JSON.stringify(sampleDeals));
    localStorage.setItem('crm_activities', JSON.stringify(sampleActivities));
  }
}