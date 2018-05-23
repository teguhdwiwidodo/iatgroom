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
        $this->load->view('history/history',$data);
    }
    
}