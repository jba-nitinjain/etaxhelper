const mysql = require('mysql2/promise');
require('dotenv').config();

// AWS RDS MySQL Configuration for Indian locale
const dbConfig = {
  host: 'whatsapp-saas1.clf8qe6egrav.ap-south-2.rds.amazonaws.com',
  user: 'root',
  password: '04b36ff89c62ccd6',
  port: 3306,
  database: 'etaxhelper',
  timezone: '+05:30', // Indian Standard Time
  charset: 'utf8mb4',
  acquireTimeout: 60000,
  timeout: 60000,
  reconnect: true
};

// Create connection pool for better performance
const pool = mysql.createPool({
  ...dbConfig,
  waitForConnections: true,
  connectionLimit: 10,
  queueLimit: 0
});

// Test database connection
async function testConnection() {
  try {
    const connection = await pool.getConnection();
    await connection.ping();
    connection.release();
    console.log('Database connection successful');
    return true;
  } catch (error) {
    console.error('Database connection failed:', error);
    return false;
  }
}

// Indian locale formatting utilities
const formatCurrency = (amount) => {
  return new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
    minimumFractionDigits: 0,
    maximumFractionDigits: 2
  }).format(amount);
};

const formatDate = (date) => {
  return new Intl.DateTimeFormat('en-IN', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric'
  }).format(date);
};

const formatDateTime = (date) => {
  return new Intl.DateTimeFormat('en-IN', {
    day: '2-digit',
    month: '2-digit',
    year: 'numeric',
    hour: '2-digit',
    minute: '2-digit',
    hour12: true
  }).format(date);
};

const formatPhone = (phone) => {
  // Format Indian phone numbers
  const cleaned = phone.replace(/\D/g, '');
  if (cleaned.length === 10) {
    return `+91 ${cleaned.slice(0, 5)} ${cleaned.slice(5)}`;
  }
  if (cleaned.length === 12 && cleaned.startsWith('91')) {
    return `+91 ${cleaned.slice(2, 7)} ${cleaned.slice(7)}`;
  }
  return phone;
};

// Helper function to convert MySQL date strings to Date objects
const parseDate = (dateString) => {
  if (!dateString) return null;
  return new Date(dateString);
};

// Helper function to format Date objects for MySQL
const formatDateForMySQL = (date) => {
  if (!date) return null;
  return date.toISOString().slice(0, 19).replace('T', ' ');
};

module.exports = {
  pool,
  testConnection,
  formatCurrency,
  formatDate,
  formatDateTime,
  formatPhone,
  parseDate,
  formatDateForMySQL
};