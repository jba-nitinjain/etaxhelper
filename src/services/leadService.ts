import { Lead } from '../types';
import { MockDatabase } from '../config/database';

class LeadService {
  private db = MockDatabase.leads;

  async getAll(): Promise<Lead[]> {
    return this.db.findAll<Lead>('leads');
  }

  async getById(id: string): Promise<Lead | null> {
    return this.db.findById<Lead>('leads', id);
  }

  async create(leadData: Omit<Lead, 'id' | 'createdAt' | 'updatedAt'>): Promise<Lead> {
    return this.db.create<Lead>('leads', leadData);
  }

  async update(id: string, leadData: Partial<Lead>): Promise<Lead | null> {
    return this.db.update<Lead>('leads', id, leadData);
  }

  async delete(id: string): Promise<boolean> {
    return this.db.delete('leads', id);
  }

  async getByStage(stage: Lead['stage']): Promise<Lead[]> {
    const leads = await this.getAll();
    return leads.filter(lead => lead.stage === stage);
  }

  async getByContact(contactId: string): Promise<Lead[]> {
    const leads = await this.getAll();
    return leads.filter(lead => lead.contactId === contactId);
  }
}

export const leadService = new LeadService();