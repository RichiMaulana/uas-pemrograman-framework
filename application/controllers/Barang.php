<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Barang extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Barang_model');
    $this->load->helper('url');
    $this->load->database();
}

  public function index()
  {
    $data['barang_list'] = $this->Barang_model->get_all();
    $data['page_title'] = 'Barang';
    $data['active_menu'] = 'barang';

    $this->load->view('layouts/header', $data);
    $this->load->view('barang', $data);
    $this->load->view('layouts/footer');
  }

  public function add() {
    $data['page_title'] = 'Tambah Barang';
    $data['active_menu'] = 'barang';

    $this->load->view('layouts/header', $data);
    $this->load->view('tambah_barang', $data);
    $this->load->view('layouts/footer');
  }

  public function save() {
    $post = $this->input->post();

    $data = [
        'product_code' => $post['product_code'],
        'name' => $post['name'],
        'stock' => $post['stock'],
        'price' => $post['price'],
        'status' => $post['status'],
    ];

    $this->Barang_model->insert($data);

    redirect('barang');
  }

  public function edit($code) {
    $barang = $this->Barang_model->get_by_code($code);

    if (!$barang) {
        show_404();
    }

    $data['page_title'] = 'Edit Barang';
    $data['active_menu'] = 'barang';
    $data['barang'] = $barang;

    $this->load->view('layouts/header', $data);
    $this->load->view('edit_barang', $data);
    $this->load->view('layouts/footer');
  }

  public function update($code) {
    $post = $this->input->post();

    $data = [
        'product_code' => $post['product_code'],
        'name' => $post['name'],
        'stock' => $post['stock'],
        'price' => $post['price'],
        'status' => $post['status'],
    ];

    $this->Barang_model->update($code, $data);

    redirect('barang');
  }

  public function delete($code) {
    $this->Barang_model->delete($code);
    redirect('barang');
  }
}
