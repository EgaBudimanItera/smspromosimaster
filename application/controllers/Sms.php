<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model(array('Master'));
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


    public function single(){
        $data=array(
            'page'=>'sms/single',
            'link'=>'single',
        );
        $this->load->view('template/wrapper',$data);
    }

    public function prosessinglesms(){
        
        $data=array(
            'DestinationNumber'=>$this->input->post('notelp',true),
            'TextDecoded'=>$this->input->post('isipesan',true),
        );

        $simpan=$this->Master->simpan_data($data,'outbox');
        if($simpan){
            echo '<script>alert("Data Berhasil Dikirimkan");window.location = "'.base_url().'sms/single";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Dikirimkan");window.location = "'.base_url().'sms/single";</script>';
        }
    }

    public function broadcast(){
        $data=array(
            'page'=>'sms/broadcast',
            'link'=>'broadcast',
        );
        $this->load->view('template/wrapper',$data);
    }

    public function autoreply(){
        $data=array(
            'page'=>'sms/autoreply',
            'link'=>'autoreply',
        );
        $this->load->view('template/wrapper',$data);
    }

    public function inbox(){
        $data=array(
            'page'=>'sms/inbox',
            'link'=>'inbox',
        );
        $this->load->view('template/wrapper',$data);
    }

    public function sentitem(){
        $data=array(
            'page'=>'sms/sentitem',
            'link'=>'sentitem',
        );
        $this->load->view('template/wrapper',$data);
    }

    public function outbox(){
        $data=array(
            'page'=>'sms/outbox',
            'link'=>'outbox',
        );
        $this->load->view('template/wrapper',$data);
    }

}