import { Activity } from '../types';
import { MockDatabase } from '../config/database';

class ActivityService {
  private db = MockDatabase.activities;

  async getAll(): Promise<Activity[]> {
    return this.db.findAll<Activity>('activities');
  }

  async getById(id: string): Promise<Activity | null> {
    return this.db.findById<Activity>('activities', id);
  }

  async create(activityData: Omit<Activity, 'id' | 'createdAt' | 'updatedAt'>): Promise<Activity> {
    return this.db.create<Activity>('activities', activityData);
  }

  async update(id: string, activityData: Partial<Activity>): Promise<Activity | null> {
    return this.db.update<Activity>('activities', id, activityData);
  }

  async delete(id: string): Promise<boolean> {
    return this.db.delete('activities', id);
  }

  async getByContact(contactId: string): Promise<Activity[]> {
    const activities = await this.getAll();
    return activities.filter(activity => activity.contactId === contactId);
  }

  async getUpcoming(): Promise<Activity[]> {
    const activities = await this.getAll();
    const today = new Date();
    return activities
      .filter(activity => activity.dueDate && new Date(activity.dueDate) >= today && !activity.completedAt)
      .sort((a, b) => new Date(a.dueDate!).getTime() - new Date(b.dueDate!).getTime());
  }

  async getOverdue(): Promise<Activity[]> {
    const activities = await this.getAll();
    const today = new Date();
    return activities.filter(activity => 
      activity.dueDate && 
      new Date(activity.dueDate) < today && 
      !activity.completedAt
    );
  }
}

export const activityService = new ActivityService();