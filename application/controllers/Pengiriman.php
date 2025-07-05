<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Pengiriman extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Delivery_model');
    $this->load->model('Transaksi_model');
    $this->load->helper('url');
    $this->load->database();
  }

  public function index()
  {
    $data['delivery_list'] = $this->Delivery_model->get_all();
    $data['page_title'] = 'Pengiriman';
    $data['active_menu'] = 'delivery';

    $this->load->view('layouts/header', $data);
    $this->load->view('pengiriman');
    $this->load->view('layouts/footer');
  }

  public function add() {
    $data['sales_list'] = $this->Transaksi_model->get_all();  // So you can choose a transaction
    $data['page_title'] = 'Tambah Pengiriman';
    $data['active_menu'] = 'delivery';

    $this->load->view('layouts/header', $data);
    $this->load->view('tambah_pengiriman', $data);
    $this->load->view('layouts/footer');
  }

  public function save() {
    $post = $this->input->post();

    $data = [
        'do_number' => $post['do_number'],
        'sales_transaction_id' => $post['sales_transaction_id'],
        'delivery_date' => date('Y-m-d'),
        'items_count' => $post['items_count'],
        'status' => $post['status'],
    ];

    $this->Delivery_model->insert($data);

    redirect('pengiriman');
  }

  public function update_status($do_number, $new_status) {
    $new_status = urldecode($new_status);
    $this->Delivery_model->update_by_do_number($do_number, ['status' => $new_status]);
    redirect('pengiriman');
  }

  public function delete($do_number) {
    $this->Delivery_model->delete_by_do_number($do_number);
    redirect('pengiriman');
}
}
