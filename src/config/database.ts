// AWS RDS MySQL Configuration
// Note: In production, these would come from environment variables
export const dbConfig = {
  host: 'whatsapp-saas1.clf8qe6egrav.ap-south-2.rds.amazonaws.com',
  user: 'root',
  password: '04b36ff89c62ccd6',
  port: 3306,
  database: 'etaxhelper'
};

// For WebContainer demo, we'll use localStorage as a mock database
export class MockDatabase {
  private static getInstance() {
    return new MockDatabase();
  }

  static contacts = MockDatabase.getInstance();
  static leads = MockDatabase.getInstance();
  static deals = MockDatabase.getInstance();
  static activities = MockDatabase.getInstance();

  private getKey(table: string): string {
    return `crm_${table}`;
  }

  async findAll<T>(table: string): Promise<T[]> {
    const key = this.getKey(table);
    const data = localStorage.getItem(key);
    return data ? JSON.parse(data) : [];
  }

  async findById<T>(table: string, id: string): Promise<T | null> {
    const items = await this.findAll<T & { id: string }>(table);
    return items.find(item => item.id === id) || null;
  }

  async create<T extends { id?: string }>(table: string, data: T): Promise<T> {
    const items = await this.findAll<T & { id: string }>(table);
    const newItem = {
      ...data,
      id: data.id || crypto.randomUUID(),
      createdAt: new Date(),
      updatedAt: new Date()
    } as T & { id: string };
    
    items.push(newItem);
    localStorage.setItem(this.getKey(table), JSON.stringify(items));
    return newItem;
  }

  async update<T extends { id: string }>(table: string, id: string, data: Partial<T>): Promise<T | null> {
    const items = await this.findAll<T>(table);
    const index = items.findIndex(item => item.id === id);
    
    if (index === -1) return null;
    
    items[index] = {
      ...items[index],
      ...data,
      updatedAt: new Date()
    };
    
    localStorage.setItem(this.getKey(table), JSON.stringify(items));
    return items[index];
  }

  async delete(table: string, id: string): Promise<boolean> {
    const items = await this.findAll(table);
    const filteredItems = items.filter((item: any) => item.id !== id);
    
    if (filteredItems.length === items.length) return false;
    
    localStorage.setItem(this.getKey(table), JSON.stringify(filteredItems));
    return true;
  }
}