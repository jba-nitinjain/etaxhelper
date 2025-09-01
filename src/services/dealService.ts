import { Deal } from '../types';
import { MockDatabase } from '../config/database';

class DealService {
  private db = MockDatabase.deals;

  async getAll(): Promise<Deal[]> {
    return this.db.findAll<Deal>('deals');
  }

  async getById(id: string): Promise<Deal | null> {
    return this.db.findById<Deal>('deals', id);
  }

  async create(dealData: Omit<Deal, 'id' | 'createdAt' | 'updatedAt'>): Promise<Deal> {
    return this.db.create<Deal>('deals', dealData);
  }

  async update(id: string, dealData: Partial<Deal>): Promise<Deal | null> {
    return this.db.update<Deal>('deals', id, dealData);
  }

  async delete(id: string): Promise<boolean> {
    return this.db.delete('deals', id);
  }

  async getByStage(stage: Deal['stage']): Promise<Deal[]> {
    const deals = await this.getAll();
    return deals.filter(deal => deal.stage === stage);
  }

  async getRevenue(): Promise<number> {
    const deals = await this.getAll();
    return deals
      .filter(deal => deal.stage === 'closed_won')
      .reduce((total, deal) => total + deal.value, 0);
  }

  async getPipelineValue(): Promise<number> {
    const deals = await this.getAll();
    return deals
      .filter(deal => !['closed_won', 'closed_lost'].includes(deal.stage))
      .reduce((total, deal) => total + (deal.value * deal.probability / 100), 0);
  }
}

export const dealService = new DealService();