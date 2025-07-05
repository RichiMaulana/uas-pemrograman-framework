<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Barang extends CI_Controller {
  public function index()
  {
    $data['page_title'] = 'Barang';
    $data['active_menu'] = 'barang';

    $this->load->view('layouts/header', $data);
    $this->load->view('barang');
    $this->load->view('layouts/footer');
  }
}
