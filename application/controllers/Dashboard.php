<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Transaksi_model');
    $this->load->model('Barang_model');
    $this->load->model('Pelanggan_model');
    $this->load->model('Delivery_model');
    $this->load->helper('url');
    $this->load->database();
  }

  public function index()
  {
    $data['page_title'] = 'Dashboard';
    $data['active_menu'] = 'dashboard';

    $data['total_customers'] = $this->Pelanggan_model->count_all();
    $data['total_goods'] = $this->Barang_model->count_all();
    $data['sales_today'] = $this->Transaksi_model->sum_sales_today();
    $data['pending_deliveries'] = $this->Delivery_model->count_pending();

    $data['recent_transactions'] = $this->Transaksi_model->get_recent(5);

    $this->load->view('layouts/header', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('layouts/footer');
  }
}
