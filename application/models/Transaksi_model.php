<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    public function get_all() {
        return $this->db
            ->select('sales_transactions.*, customers.name AS customer_name')
            ->from('sales_transactions')
            ->join('customers', 'sales_transactions.customer_id = customers.id')
            ->order_by('transaction_date', 'DESC')
            ->get()
            ->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('sales_transactions', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('sales_transactions', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('sales_transactions', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('sales_transactions');
    }
}
