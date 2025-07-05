<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {
    public function __construct() {
      parent::__construct();
      $this->load->database();  // This ensures the DB connection is available
    }


    public function get_all() {
        return $this->db->order_by('customer_code', 'ASC')->get('customers')->result();
    }

    public function get_by_code($code) {
        return $this->db->get_where('customers', ['customer_code' => $code])->row();
    }

    public function insert($data) {
        return $this->db->insert('customers', $data);
    }

    public function update_by_code($code, $data) {
        return $this->db->where('customer_code', $code)->update('customers', $data);
    }

    public function delete_by_code($code) {
        return $this->db->where('customer_code', $code)->delete('customers');
    }

    public function increment_total_orders($customer_id) {
        return $this->db->set('total_orders', 'total_orders + 1', false)
            ->where('id', $customer_id)
            ->update('customers');
    }
}
