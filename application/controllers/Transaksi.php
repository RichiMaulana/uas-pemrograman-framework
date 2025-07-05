<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Transaksi extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Transaksi_model');
    $this->load->model('Barang_model');
    $this->load->model('Pelanggan_model');
    $this->load->helper('url');
    $this->load->database();
  }

  public function index()
  {
    $data['transaksi_list'] = $this->Transaksi_model->get_all();
    $data['page_title'] = 'Transaksi';
    $data['active_menu'] = 'transaksi';

    $this->load->view('layouts/header', $data);
    $this->load->view('transaksi');
    $this->load->view('layouts/footer');
  }

  public function add() {
    $data['page_title'] = 'Tambah Transaksi';
    $data['active_menu'] = 'transaksi';
    $data['pelanggan'] = $this->Pelanggan_model->get_all();
    $data['barang'] = $this->Barang_model->get_all();

    $this->load->view('layouts/header', $data);
    $this->load->view('tambah_transaksi', $data);
    $this->load->view('layouts/footer');
  }

  public function save() {
    $post = $this->input->post();

    // Save transaction
    $data = [
        'invoice_number' => $post['invoice_number'],
        'customer_id' => $post['customer_id'],
        'transaction_date' => date('Y-m-d'),
        'total_amount' => $post['total_amount'],
        'items_count' => $post['items_count'],
        'status' => $post['status'],
    ];
    $this->Transaksi_model->insert($data);

    // Update stock & total orders
    $this->Barang_model->decrease_stock($post['product_code'], $post['items_count']);
    $this->Pelanggan_model->increment_total_orders($post['customer_id']);

    redirect('transaksi');
  }

  public function update_status($invoice_number, $new_status) {
    $this->Transaksi_model->update_by_invoice($invoice_number, ['status' => $new_status]);
    redirect('transaksi');
  }

  public function delete($invoice_number) {
    $this->Transaksi_model->delete_by_invoice($invoice_number);
    redirect('transaksi');
  }
}
