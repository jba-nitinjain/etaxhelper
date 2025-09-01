// AWS RDS MySQL Configuration for Indian locale
export const dbConfig = {
  host: 'whatsapp-saas1.clf8qe6egrav.ap-south-2.rds.amazonaws.com',
  user: 'root',
  password: '04b36ff89c62ccd6',
  port: 3306,
  database: 'etaxhelper',
  timezone: '+05:30', // Indian Standard Time
  charset: 'utf8mb4'
};

// For WebContainer demo, we'll use localStorage as a mock database
export class MockDatabase {
  private static getInstance() {
    return new MockDatabase();
  }

  static contacts = MockDatabase.getInstance();
  static organizations = MockDatabase.getInstance();

  private getKey(table: string): string {
    return `crm_${table}`;
  }

  async findAll<T>(table: string): Promise<T[]> {
    const key = this.getKey(table);
    const data = localStorage.getItem(key);
    return data ? JSON.parse(data) : [];
  }

  async findById<T>(table: string, id: string | number): Promise<T | null> {
    const items = await this.findAll<T & { id?: string; org_id?: number; contact_id?: number }>(table);
    return items.find(item => 
      item.id === id || 
      item.org_id === id || 
      item.contact_id === id
    ) || null;
  }

  async create<T extends { id?: string; org_id?: number; contact_id?: number }>(table: string, data: T): Promise<T> {
    const items = await this.findAll<T>(table);
    const newItem = {
      ...data,
      id: data.id || crypto.randomUUID(),
      org_id: data.org_id || Date.now(),
      contact_id: data.contact_id || Date.now(),
      createdAt: new Date(),
      updatedAt: new Date()
    } as T;
    
    items.push(newItem);
    localStorage.setItem(this.getKey(table), JSON.stringify(items));
    return newItem;
  }

  async update<T extends { id?: string; org_id?: number; contact_id?: number }>(table: string, id: string | number, data: Partial<T>): Promise<T | null> {
    const items = await this.findAll<T>(table);
    const index = items.findIndex(item => 
      (item as any).id === id || 
      (item as any).org_id === id || 
      (item as any).contact_id === id
    );
    
    if (index === -1) return null;
    
    items[index] = {
      ...items[index],
      ...data,
      updatedAt: new Date()
    };
    
    localStorage.setItem(this.getKey(table), JSON.stringify(items));
    return items[index];
  }

  async delete(table: string, id: string | number): Promise<boolean> {
    const items = await this.findAll(table);
    const filteredItems = items.filter((item: any) => 
      item.id !== id && 
      item.org_id !== id && 
      item.contact_id !== id
    );
    
    if (filteredItems.length === items.length) return false;
    
    localStorage.setItem(this.getKey(table), JSON.stringify(filteredItems));
    return true;
  }
}

// Indian locale formatting utilities
export const formatCurrency = (amount: number): string => {
  return new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
    minimumFractionDigits: 0,
    maximumFractionDigits: 2
  }).format(amount);
};

export const formatDate = (date: Date): string => {
  return new Intl.DateTimeFormat('en-IN', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric'
  }).format(date);
};

export const formatDateTime = (date: Date): string => {
  return new Intl.DateTimeFormat('en-IN', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
    hour12: true
  }).format(date);
};

export const formatPhone = (phone: string): string => {
  // Format Indian phone numbers
  const cleaned = phone.replace(/\D/g, '');
  if (cleaned.length === 10) {
    return `+91 ${cleaned.slice(0, 5)} ${cleaned.slice(5)}`;
  }
  return phone;
};