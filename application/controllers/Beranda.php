<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
    
    // if($this->session->userdata('status') != "login"){
    //         echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
    // }else{
    //     $username = $this->session->userdata('username');
    //     $where=array('username'=>$username);
    //     $cek=$this->M_user->cek_login($where)->num_rows(); 
    //     if($cek == 0){
    //         echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
    //     }
    // }   
	

	}
    //pages back
    public function index(){
      $data = array(
        'page'=>'beranda',
        'link'=>'beranda',
        
      );
      $this->load->view('template/wrapper',$data);
    }
}