// API configuration for frontend
const API_BASE_URL = 'https://api-etaxhelper.etaxhelper.com/api/v1.php';

// API client with error handling
class ApiClient {
  private baseURL: string;
  private apiKey?: string;

  constructor(baseURL: string, apiKey?: string) {
    this.baseURL = baseURL;
    this.apiKey = apiKey;
  }

  private toUrlEncoded(obj: any): string {
    return Object.keys(obj)
      .map(k => encodeURIComponent(k) + '=' + encodeURIComponent(obj[k]))
      .join('&');
  }

  private async request<T>(data: any): Promise<T> {
    const url = this.baseURL;
    
    const headers: HeadersInit = {
      'Content-Type': 'application/x-www-form-urlencoded',
    };

    if (this.apiKey) {
      headers['X-Auth-Token'] = this.apiKey;
    }

    const config: RequestInit = {
      method: 'POST',
      headers: headers,
      body: this.toUrlEncoded(data),
    };

    try {
      const response = await fetch(url, config);
      
      if (!response.ok) {
        const errorText = await response.text();
        let errorData;
        try {
          errorData = JSON.parse(errorText);
        } catch (e) {
          errorData = { error: errorText || `HTTP error! status: ${response.status}` };
        }
        throw new Error(errorData.error || `HTTP error! status: ${response.status}`);
      }

      // Handle 204 No Content responses
      if (response.status === 204) {
        return {} as T;
      }

      const responseData = await response.json();
      if (!responseData.success) {
        throw new Error(responseData.error || 'API request failed');
      }

      return responseData as T;
    } catch (error) {
      console.error(`API request failed`, error);
      throw error;
    }
  }

  async get<T>(params: any): Promise<T> {
    return this.request<T>({ ...params, action: 'list' });
  }

  async getSingle<T>(params: any): Promise<T> {
    return this.request<T>({ ...params, action: 'view' });
  }

  async post<T>(params: any): Promise<T> {
    return this.request<T>({ ...params, action: 'insert' });
  }

  async put<T>(params: any): Promise<T> {
    return this.request<T>({ ...params, action: 'update' });
  }

  async delete<T>(params: any): Promise<T> {
    return this.request<T>({ ...params, action: 'delete' });
  }
}

export const apiClient = new ApiClient(API_BASE_URL, '5L3atFvNO1IKE3wTJJfLuzbiQZErw0qA');

// Indian locale formatting utilities for frontend
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
  if (cleaned.length === 12 && cleaned.startsWith('91')) {
    return `+91 ${cleaned.slice(2, 7)} ${cleaned.slice(7)}`;
  }
  return phone;
};