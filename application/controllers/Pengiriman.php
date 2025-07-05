<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Pengiriman extends CI_Controller {
  public function index()
  {
    $data['page_title'] = 'Pengiriman';
    $data['active_menu'] = 'pengiriman';

    $this->load->view('layouts/header', $data);
    $this->load->view('pengiriman');
    $this->load->view('layouts/footer');
  }
}
