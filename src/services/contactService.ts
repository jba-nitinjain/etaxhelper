import { pool } from '../config/database';
import { OrganizationContact, CreateOrganizationContactData, UpdateOrganizationContactData } from '../types';
import { RowDataPacket, ResultSetHeader } from 'mysql2';
import { parseDate } from '../config/database';

interface ContactRow extends RowDataPacket {
  contact_id: number;
  org_id: number;
  NAME: string;
  designation: string | null;
  email: string | null;
  phone: string | null;
  dob: string | null;
  city: string | null;
  pin: string | null;
  country: string | null;
  // Joined organization data
  org_type?: string | null;
  company_name?: string | null;
  display_name?: string;
  org_email?: string | null;
  phone_work?: string | null;
}

class ContactService {
  async getAll(): Promise<OrganizationContact[]> {
    try {
      const [rows] = await pool.execute<ContactRow[]>(
        `SELECT 
          oc.*,
          o.org_type,
          o.company_name,
          o.display_name,
          o.email as org_email,
          o.phone_work
         FROM organization_contact oc
         LEFT JOIN ORGANIZATION o ON oc.org_id = o.org_id
         ORDER BY oc.NAME`
      );
      return rows.map(this.mapRowToContact);
    } catch (error) {
      console.error('Error fetching contacts:', error);
      throw new Error('Failed to fetch contacts');
    }
  }

  async getById(contact_id: number): Promise<OrganizationContact | null> {
    try {
      const [rows] = await pool.execute<ContactRow[]>(
        `SELECT 
          oc.*,
          o.org_type,
          o.company_name,
          o.display_name,
          o.email as org_email,
          o.phone_work
         FROM organization_contact oc
         LEFT JOIN ORGANIZATION o ON oc.org_id = o.org_id
         WHERE oc.contact_id = ?`,
        [contact_id]
      );
      return rows.length > 0 ? this.mapRowToContact(rows[0]) : null;
    } catch (error) {
      console.error('Error fetching contact:', error);
      throw new Error('Failed to fetch contact');
    }
  }

  async getByOrganization(org_id: number): Promise<OrganizationContact[]> {
    try {
      const [rows] = await pool.execute<ContactRow[]>(
        `SELECT 
          oc.*,
          o.org_type,
          o.company_name,
          o.display_name,
          o.email as org_email,
          o.phone_work
         FROM organization_contact oc
         LEFT JOIN ORGANIZATION o ON oc.org_id = o.org_id
         WHERE oc.org_id = ?
         ORDER BY oc.NAME`,
        [org_id]
      );
      return rows.map(this.mapRowToContact);
    } catch (error) {
      console.error('Error fetching contacts by organization:', error);
      throw new Error('Failed to fetch contacts by organization');
    }
  }

  async create(data: CreateOrganizationContactData): Promise<OrganizationContact> {
    try {
      const [result] = await pool.execute<ResultSetHeader>(
        `INSERT INTO organization_contact (org_id, NAME, designation, email, phone, dob, city, pin, country) 
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)`,
        [
          data.org_id,
          data.NAME,
          data.designation || null,
          data.email || null,
          data.phone || null,
          data.dob ? data.dob.toISOString().slice(0, 10) : null,
          data.city || null,
          data.pin || null,
          data.country || null
        ]
      );
      
      const newContact = await this.getById(result.insertId);
      if (!newContact) {
        throw new Error('Failed to retrieve created contact');
      }
      return newContact;
    } catch (error) {
      console.error('Error creating contact:', error);
      throw new Error('Failed to create contact');
    }
  }

  async update(contact_id: number, data: UpdateOrganizationContactData): Promise<OrganizationContact | null> {
    try {
      const updateFields: string[] = [];
      const updateValues: any[] = [];

      if (data.org_id !== undefined) {
        updateFields.push('org_id = ?');
        updateValues.push(data.org_id);
      }
      if (data.NAME !== undefined) {
        updateFields.push('NAME = ?');
        updateValues.push(data.NAME);
      }
      if (data.designation !== undefined) {
        updateFields.push('designation = ?');
        updateValues.push(data.designation);
      }
      if (data.email !== undefined) {
        updateFields.push('email = ?');
        updateValues.push(data.email);
      }
      if (data.phone !== undefined) {
        updateFields.push('phone = ?');
        updateValues.push(data.phone);
      }
      if (data.dob !== undefined) {
        updateFields.push('dob = ?');
        updateValues.push(data.dob ? data.dob.toISOString().slice(0, 10) : null);
      }
      if (data.city !== undefined) {
        updateFields.push('city = ?');
        updateValues.push(data.city);
      }
      if (data.pin !== undefined) {
        updateFields.push('pin = ?');
        updateValues.push(data.pin);
      }
      if (data.country !== undefined) {
        updateFields.push('country = ?');
        updateValues.push(data.country);
      }

      if (updateFields.length === 0) {
        return this.getById(contact_id);
      }

      updateValues.push(contact_id);
      
      await pool.execute(
        `UPDATE organization_contact SET ${updateFields.join(', ')} WHERE contact_id = ?`,
        updateValues
      );

      return this.getById(contact_id);
    } catch (error) {
      console.error('Error updating contact:', error);
      throw new Error('Failed to update contact');
    }
  }

  async delete(contact_id: number): Promise<boolean> {
    try {
      const [result] = await pool.execute<ResultSetHeader>(
        'DELETE FROM organization_contact WHERE contact_id = ?',
        [contact_id]
      );
      return result.affectedRows > 0;
    } catch (error) {
      console.error('Error deleting contact:', error);
      throw new Error('Failed to delete contact');
    }
  }

  async search(query: string): Promise<OrganizationContact[]> {
    try {
      const searchTerm = `%${query}%`;
      const [rows] = await pool.execute<ContactRow[]>(
        `SELECT 
          oc.*,
          o.org_type,
          o.company_name,
          o.display_name,
          o.email as org_email,
          o.phone_work
         FROM organization_contact oc
         LEFT JOIN ORGANIZATION o ON oc.org_id = o.org_id
         WHERE oc.NAME LIKE ? OR oc.email LIKE ? OR oc.phone LIKE ? OR o.display_name LIKE ?
         ORDER BY oc.NAME`,
        [searchTerm, searchTerm, searchTerm, searchTerm]
      );
      return rows.map(this.mapRowToContact);
    } catch (error) {
      console.error('Error searching contacts:', error);
      throw new Error('Failed to search contacts');
    }
  }

  private mapRowToContact(row: ContactRow): OrganizationContact {
    return {
      contact_id: row.contact_id,
      org_id: row.org_id,
      NAME: row.NAME,
      designation: row.designation,
      email: row.email,
      phone: row.phone,
      dob: parseDate(row.dob),
      city: row.city,
      pin: row.pin,
      country: row.country,
      organization: row.display_name ? {
        org_id: row.org_id,
        org_type: row.org_type as any,
        company_name: row.company_name,
        display_name: row.display_name,
        email: row.org_email,
        phone_work: row.phone_work
      } : undefined
    };
  }
}

export const contactService = new ContactService();