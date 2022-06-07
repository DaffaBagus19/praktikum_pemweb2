<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $this->load->model('Mahasiswa_Model', 'mhs');
        $data['list_mhs'] =$this->mhs->getAll();
        
        $this->load->view('home/index',$data);
    }
}
