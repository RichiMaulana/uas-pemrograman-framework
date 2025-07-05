<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_model extends CI_Model {

    public function get_all() {
        return $this->db
            ->select('delivery_orders.*, sales_transactions.invoice_number as invoice, customers.company AS company')
            ->from('delivery_orders')
            ->join('sales_transactions', 'delivery_orders.sales_transaction_id = sales_transactions.id')
            ->join('customers', 'sales_transactions.customer_id = customers.id')
            ->order_by('delivery_date', 'DESC')
            ->get()
            ->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('delivery_orders', ['id' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('delivery_orders', $data);
    }

    public function update_by_do_number($do_number, $data) {
        return $this->db->where('do_number', $do_number)->update('delivery_orders', $data);
    }

    public function delete_by_do_number($do_number) {
        return $this->db->where('do_number', $do_number)->delete('delivery_orders');
    }
}
