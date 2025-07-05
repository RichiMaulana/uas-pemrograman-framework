<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pelanggan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pelanggan_model');
    $this->load->database();
    $this->load->helper('url');
  }
  public function index()
  {
    $data['pelanggan_list'] = $this->Pelanggan_model->get_all();
    $data['page_title'] = 'Pelanggan';
    $data['active_menu'] = 'pelanggan';

    $this->load->view('layouts/header', $data);
    $this->load->view('pelanggan', $data);
    $this->load->view('layouts/footer');
  }

  public function add()
  {
    $data['page_title'] = 'Tambah Pelanggan';
    $data['active_menu'] = 'pelanggan';

    $this->load->view('layouts/header', $data);
    $this->load->view('tambah_pelanggan', $data);
    $this->load->view('layouts/footer');
  }

  public function save()
  {
    $post = $this->input->post();

    $data = [
      'customer_code' => $post['customer_code'],
      'name' => $post['name'],
      'company' => $post['company'],
      'phone' => $post['phone'],
      'email' => $post['email'],
      'total_orders' => 0
    ];

    $this->Pelanggan_model->insert($data);

    redirect('pelanggan');  // back to customer list
  }

  public function edit($code) {
    $customer = $this->Pelanggan_model->get_by_code($code);

    if (!$customer) {
        show_404();  // Show 404 page if customer doesn't exist
    }

    $data['page_title'] = 'Edit Pelanggan';
    $data['active_menu'] = 'customers';
    $data['customer'] = $customer;

    $this->load->view('layouts/header', $data);
    $this->load->view('edit_pelanggan', $data);
    $this->load->view('layouts/footer');
  }

  public function update($code) {
    $post = $this->input->post();

    $data = [
        'customer_code' => $post['customer_code'],
        'name' => $post['name'],
        'company' => $post['company'],
        'phone' => $post['phone'],
        'email' => $post['email'],
    ];

    $this->Pelanggan_model->update_by_code($code, $data);

    redirect('pelanggan');  // back to customer list
  }

  public function delete($code) {
    $this->Pelanggan_model->delete_by_code($code);
    redirect('pelanggan');  // Go back to the customer list
}
}
