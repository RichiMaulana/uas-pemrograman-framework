<?php 
defined("BASEPATH") OR exit("No direct script access allowed");

class Dashboard extends CI_Controller {
  public function index()
  {
    $data['page_title'] = 'Dashboard';
    $data['active_menu'] = 'dashboard';

    $this->load->view('layouts/header', $data);
    $this->load->view('dashboard');
    $this->load->view('layouts/footer');
  }
}
