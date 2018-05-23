<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Booking extends AUTH_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('');
    }
    public function index(){
        $data['userdata'] 	= $this->userdata;
        $data['page'] = "ruangan";
		$data['judul'] = "Booking";
		$data['deskripsi'] = " ";
        $this->template->views('ruangan/booking', $data);
    }
    
}