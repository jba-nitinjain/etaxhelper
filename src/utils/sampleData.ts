import { Contact } from '../types';

export const sampleContacts: Contact[] = [
  {
    id: '1',
    firstName: 'Rajesh',
    lastName: 'Kumar',
    email: 'rajesh.kumar@techsolutions.in',
    phone: '+91 98765 43210',
    company: 'Tech Solutions India Pvt Ltd',
    position: 'Managing Director',
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
    firstName: 'Priya',
    lastName: 'Sharma',
    email: 'priya.sharma@innovateindia.com',
    phone: '+91 87654 32109',
    company: 'Innovate India Solutions',
    position: 'VP Operations',
    source: 'referral',
    status: 'prospect',
    tags: ['startup', 'fast-growth'],
    notes: 'Referred by Rajesh Kumar. Looking for scalable solutions.',
    createdAt: new Date('2024-01-10'),
    updatedAt: new Date('2024-01-15'),
  },
];

// Initialize sample data
export function initializeSampleData() {
  const existingContacts = localStorage.getItem('crm_contacts');
  if (!existingContacts) {
    localStorage.setItem('crm_contacts', JSON.stringify(sampleContacts));
  }
}