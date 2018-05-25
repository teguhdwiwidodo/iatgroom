<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Evidence extends AUTH_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('');
    }
    public function index(){
        $data['userdata'] 	= $this->userdata;
        $data['page'] = "evidence";
		$data['judul'] = "Upload Evidence";
		$data['deskripsi'] = " ";
        $data['modal_evidence'] = show_my_modal('modals/modal_evidence', 'tambah-evidence', $data);
        $this->template->views('evidence/evidence', $data);
    }
    
}