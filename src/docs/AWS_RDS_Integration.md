# AWS RDS MySQL Integration Guide

This CRM application is structured to easily integrate with your AWS RDS MySQL database. Here's how to connect it to your production database:

## Database Connection Details
- Host: whatsapp-saas1.clf8qe6egrav.ap-south-2.rds.amazonaws.com
- User: root
- Password: 04b36ff89c62ccd6
- Port: 3306
- Database: etaxhelper

## Required MySQL Tables

Run these SQL commands on your AWS RDS instance to create the necessary tables:

```sql
-- Contacts table
CREATE TABLE contacts (
  id VARCHAR(36) PRIMARY KEY DEFAULT (UUID()),
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  phone VARCHAR(20) NOT NULL,
  company VARCHAR(200) NOT NULL,
  position VARCHAR(100) NOT NULL,
  source ENUM('website', 'referral', 'cold_call', 'social_media', 'event', 'other') NOT NULL,
  status ENUM('active', 'inactive', 'prospect') NOT NULL,
  tags JSON,
  notes TEXT,
  last_contact_date DATETIME,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Leads table
CREATE TABLE leads (
  id VARCHAR(36) PRIMARY KEY DEFAULT (UUID()),
  contact_id VARCHAR(36) NOT NULL,
  title VARCHAR(200) NOT NULL,
  description TEXT,
  value DECIMAL(15,2) NOT NULL,
  stage ENUM('prospect', 'qualified', 'proposal', 'negotiation', 'closed_won', 'closed_lost') NOT NULL,
  probability INT DEFAULT 0,
  expected_close_date DATE NOT NULL,
  assigned_to VARCHAR(100) NOT NULL,
  source VARCHAR(100),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (contact_id) REFERENCES contacts(id) ON DELETE CASCADE
);

-- Deals table
CREATE TABLE deals (
  id VARCHAR(36) PRIMARY KEY DEFAULT (UUID()),
  contact_id VARCHAR(36) NOT NULL,
  lead_id VARCHAR(36),
  title VARCHAR(200) NOT NULL,
  description TEXT,
  value DECIMAL(15,2) NOT NULL,
  stage ENUM('discovery', 'proposal', 'negotiation', 'contract', 'closed_won', 'closed_lost') NOT NULL,
  probability INT DEFAULT 0,
  expected_close_date DATE NOT NULL,
  actual_close_date DATE,
  assigned_to VARCHAR(100) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (contact_id) REFERENCES contacts(id) ON DELETE CASCADE,
  FOREIGN KEY (lead_id) REFERENCES leads(id) ON DELETE SET NULL
);

-- Activities table
CREATE TABLE activities (
  id VARCHAR(36) PRIMARY KEY DEFAULT (UUID()),
  contact_id VARCHAR(36) NOT NULL,
  lead_id VARCHAR(36),
  deal_id VARCHAR(36),
  type ENUM('call', 'email', 'meeting', 'note', 'task') NOT NULL,
  title VARCHAR(200) NOT NULL,
  description TEXT,
  due_date DATETIME,
  completed_at DATETIME,
  priority ENUM('low', 'medium', 'high') DEFAULT 'medium',
  assigned_to VARCHAR(100) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (contact_id) REFERENCES contacts(id) ON DELETE CASCADE,
  FOREIGN KEY (lead_id) REFERENCES leads(id) ON DELETE SET NULL,
  FOREIGN KEY (deal_id) REFERENCES deals(id) ON DELETE SET NULL
);
```

## Production Integration Steps

1. Install MySQL client: `npm add mysql2@latest`

2. Replace the MockDatabase class in `src/config/database.ts` with a real MySQL connection:

```typescript
import mysql from 'mysql2/promise';

export const dbConfig = {
  host: process.env.DB_HOST || 'whatsapp-saas1.clf8qe6egrav.ap-south-2.rds.amazonaws.com',
  user: process.env.DB_USER || 'root',
  password: process.env.DB_PASSWORD || '04b36ff89c62ccd6',
  port: parseInt(process.env.DB_PORT || '3306'),
  database: process.env.DB_NAME || 'etaxhelper'
};

export const connection = mysql.createConnection(dbConfig);
```

3. Update the service classes to use real SQL queries instead of localStorage

4. Add environment variables for production deployment

5. Implement proper error handling and connection pooling for production use

The current implementation uses localStorage for demonstration purposes but follows the same patterns you'll need for the MySQL integration.