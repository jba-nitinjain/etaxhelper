const { pool, parseDate } = require('../config/database');

class OrganizationService {
  async getAll() {
    try {
      const [rows] = await pool.execute(
        'SELECT * FROM ORGANIZATION ORDER BY display_name'
      );
      return rows.map(this.mapRowToOrganization);
    } catch (error) {
      console.error('Error fetching organizations:', error);
      throw new Error('Failed to fetch organizations');
    }
  }

  async getById(org_id) {
    try {
      const [rows] = await pool.execute(
        'SELECT * FROM ORGANIZATION WHERE org_id = ?',
        [org_id]
      );
      return rows.length > 0 ? this.mapRowToOrganization(rows[0]) : null;
    } catch (error) {
      console.error('Error fetching organization:', error);
      throw new Error('Failed to fetch organization');
    }
  }

  async create(data) {
    try {
      const [result] = await pool.execute(
        `INSERT INTO ORGANIZATION (org_type, company_name, display_name, email, phone_work) 
         VALUES (?, ?, ?, ?, ?)`,
        [data.org_type || null, data.company_name || null, data.display_name, data.email || null, data.phone_work || null]
      );
      
      const newOrganization = await this.getById(result.insertId);
      if (!newOrganization) {
        throw new Error('Failed to retrieve created organization');
      }
      return newOrganization;
    } catch (error) {
      console.error('Error creating organization:', error);
      throw new Error('Failed to create organization');
    }
  }

  async update(org_id, data) {
    try {
      const updateFields = [];
      const updateValues = [];

      if (data.org_type !== undefined) {
        updateFields.push('org_type = ?');
        updateValues.push(data.org_type);
      }
      if (data.company_name !== undefined) {
        updateFields.push('company_name = ?');
        updateValues.push(data.company_name);
      }
      if (data.display_name !== undefined) {
        updateFields.push('display_name = ?');
        updateValues.push(data.display_name);
      }
      if (data.email !== undefined) {
        updateFields.push('email = ?');
        updateValues.push(data.email);
      }
      if (data.phone_work !== undefined) {
        updateFields.push('phone_work = ?');
        updateValues.push(data.phone_work);
      }

      if (updateFields.length === 0) {
        return this.getById(org_id);
      }

      updateValues.push(org_id);
      
      await pool.execute(
        `UPDATE ORGANIZATION SET ${updateFields.join(', ')} WHERE org_id = ?`,
        updateValues
      );

      return this.getById(org_id);
    } catch (error) {
      console.error('Error updating organization:', error);
      throw new Error('Failed to update organization');
    }
  }

  async delete(org_id) {
    try {
      const [result] = await pool.execute(
        'DELETE FROM ORGANIZATION WHERE org_id = ?',
        [org_id]
      );
      return result.affectedRows > 0;
    } catch (error) {
      console.error('Error deleting organization:', error);
      throw new Error('Failed to delete organization');
    }
  }

  async search(query) {
    try {
      const searchTerm = `%${query}%`;
      const [rows] = await pool.execute(
        `SELECT * FROM ORGANIZATION 
         WHERE display_name LIKE ? OR company_name LIKE ? OR email LIKE ?
         ORDER BY display_name`,
        [searchTerm, searchTerm, searchTerm]
      );
      return rows.map(this.mapRowToOrganization);
    } catch (error) {
      console.error('Error searching organizations:', error);
      throw new Error('Failed to search organizations');
    }
  }

  mapRowToOrganization(row) {
    return {
      org_id: row.org_id,
      org_type: row.org_type,
      company_name: row.company_name,
      display_name: row.display_name,
      email: row.email,
      phone_work: row.phone_work
    };
  }
}

module.exports = new OrganizationService();