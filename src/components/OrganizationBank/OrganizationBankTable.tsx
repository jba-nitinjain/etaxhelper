import React from 'react';
import { Edit, Trash2, Landmark, Building, Hash, Key } from 'lucide-react';
import { OrganizationBank } from '../../types';

interface OrganizationBankTableProps {
  banks: OrganizationBank[];
  onEdit: (bank: OrganizationBank) => void;
  onDelete: (bank_id: number) => void;
}

export function OrganizationBankTable({ banks, onEdit, onDelete }: OrganizationBankTableProps) {
  return (
    <div className="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
      <div className="overflow-x-auto">
        <table className="min-w-full divide-y divide-slate-200">
          <thead className="bg-slate-50">
            <tr>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Bank Details
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Account Details
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Codes
              </th>
              <th className="px-6 py-3 text-left text-xs font-medium text-slate-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-slate-200">
            {banks.map((bank) => (
              <tr key={bank.bank_id} className="hover:bg-slate-50 transition-colors">
                <td className="px-6 py-4 whitespace-nowrap">
                  <div className="flex items-center">
                    <Landmark className="h-5 w-5 text-slate-400 mr-4" />
                    <div>
                      <div className="text-sm font-medium text-slate-900">
                        {bank.bank_name}
                      </div>
                      <div className="text-sm text-slate-500">{bank.branch_name}</div>
                    </div>
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                   <div>
                      <div className="text-sm font-medium text-slate-900 flex items-center">
                        <Hash className="h-4 w-4 mr-2 text-slate-400" />
                        {bank.account_no}
                      </div>
                      <div className="text-sm text-slate-500">
                        {bank.account_type} Account
                      </div>
                       <div className="text-xs text-slate-400 mt-1">
                          Mode: {bank.mode_of_operation}
                        </div>
                    </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap">
                  <div>
                    {bank.ifsc_code && (
                      <div className="text-sm text-slate-900">
                        IFSC: {bank.ifsc_code}
                      </div>
                    )}
                    {bank.swift_code && (
                      <div className="text-sm text-slate-500">
                        SWIFT: {bank.swift_code}
                      </div>
                    )}
                  </div>
                </td>
                <td className="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <div className="flex space-x-2">
                    <button
                      onClick={() => onEdit(bank)}
                      className="text-blue-600 hover:text-blue-900 transition-colors"
                      title="Edit Bank"
                    >
                      <Edit className="h-4 w-4" />
                    </button>
                    <button
                      onClick={() => onDelete(bank.bank_id)}
                      className="text-red-600 hover:text-red-900 transition-colors"
                      title="Delete Bank"
                    >
                      <Trash2 className="h-4 w-4" />
                    </button>
                  </div>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>

      {banks.length === 0 && (
        <div className="text-center py-12">
          <p className="text-slate-500">No bank accounts found</p>
        </div>
      )}
    </div>
  );
}
