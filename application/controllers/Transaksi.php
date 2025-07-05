<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Transaksi extends CI_Controller {
  public function index()
  {
    $data['page_title'] = 'Transaksi';
    $data['active_menu'] = 'transaksi';

    $this->load->view('layouts/header', $data);
    $this->load->view('transaksi');
    $this->load->view('layouts/footer');
  }
}
