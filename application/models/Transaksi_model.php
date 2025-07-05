<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{

    public function get_all()
    {
        return $this->db
            ->select('sales_transactions.*, customers.name AS customer_name')
            ->from('sales_transactions')
            ->join('customers', 'sales_transactions.customer_id = customers.id')
            ->order_by('transaction_date', 'DESC')
            ->get()
            ->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('sales_transactions', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('sales_transactions', $data);
    }

    public function update_by_invoice($invoice_number, $data)
    {
        return $this->db->where('invoice_number', $invoice_number)->update('sales_transactions', $data);
    }

    public function delete_by_invoice($invoice_number)
    {
        return $this->db->where('invoice_number', $invoice_number)->delete('sales_transactions');
    }
    public function sum_sales_today()
    {
        return $this->db->select_sum('total_amount')->get('sales_transactions')->row()->total_amount ?: 0;
    }

    public function get_recent($limit = 5)
    {
        return $this->db->select('sales_transactions.*, customers.name AS customer_name')
            ->from('sales_transactions')
            ->join('customers', 'sales_transactions.customer_id = customers.id')
            ->order_by('transaction_date', 'DESC')
            ->limit($limit)
            ->get()->result();
    }
}
