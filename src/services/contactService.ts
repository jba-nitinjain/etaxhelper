import { Contact } from '../types';
import { MockDatabase } from '../config/database';

class ContactService {
  private db = MockDatabase.contacts;

  async getAll(): Promise<Contact[]> {
    return this.db.findAll<Contact>('contacts');
  }

  async getById(id: string): Promise<Contact | null> {
    return this.db.findById<Contact>('contacts', id);
  }

  async create(contactData: Omit<Contact, 'id' | 'createdAt' | 'updatedAt'>): Promise<Contact> {
    return this.db.create<Contact>('contacts', contactData);
  }

  async update(id: string, contactData: Partial<Contact>): Promise<Contact | null> {
    return this.db.update<Contact>('contacts', id, contactData);
  }

  async delete(id: string): Promise<boolean> {
    return this.db.delete('contacts', id);
  }

  async search(query: string): Promise<Contact[]> {
    const contacts = await this.getAll();
    const searchTerm = query.toLowerCase();
    
    return contacts.filter(contact =>
      contact.firstName.toLowerCase().includes(searchTerm) ||
      contact.lastName.toLowerCase().includes(searchTerm) ||
      contact.email.toLowerCase().includes(searchTerm) ||
      contact.company.toLowerCase().includes(searchTerm)
    );
  }
}

export const contactService = new ContactService();