<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends AUTH_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('');
    }
    public function index(){
        $data['userdata'] 	= $this->userdata;
        $data['page'] = "history";
		$data['judul'] = "History Room";
		$data['deskripsi'] = " ";
        $this->template->views('history/history',$data);
    }
    
}