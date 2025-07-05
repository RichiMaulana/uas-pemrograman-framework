<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function get_all() {
        return $this->db->order_by('created_at', 'ASC')->get('goods')->result();
    }

    public function get_by_code($code) {
        return $this->db->get_where('goods', ['product_code' => $code])->row();
    }

    public function insert($data) {
        return $this->db->insert('goods', $data);
    }

    public function update($code, $data) {
        return $this->db->where('product_code', $code)->update('goods', $data);
    }

    public function delete($code) {
        return $this->db->where('product_code', $code)->delete('goods');
    }

    public function decrease_stock($product_code, $quantity) {
        return $this->db->set('stock', 'stock - ' . (int)$quantity, false)
            ->where('product_code', $product_code)
            ->update('goods');
    }
}
