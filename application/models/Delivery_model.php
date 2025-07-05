<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_model extends CI_Model {

    public function get_all() {
        return $this->db
            ->select('delivery_orders.*, sales_transactions.invoice_number')
            ->from('delivery_orders')
            ->join('sales_transactions', 'delivery_orders.sales_transaction_id = sales_transactions.id')
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

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('delivery_orders', $data);
    }

    public function delete($id) {
        return $this->db->where('id', $id)->delete('delivery_orders');
    }
}
