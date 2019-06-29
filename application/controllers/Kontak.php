<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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

    public function listkontak(){
        $data=array(
            'page'=>'kontak/listkontakdata',
            'link'=>'listkontak',
            'list'=>$this->Master->list_data_all('pbk'),
        );
        $this->load->view('template/wrapper',$data);
    }

    public function listkontaktambahform(){
        $data=array(
            'page'=>'kontak/listkontaktambah',
            'link'=>'listkontak',
            'grup'=>$this->Master->list_data_all('pbk_groups'),
        );
        $this->load->view('template/wrapper',$data);
    }

    public function listkontakupdateform($id){
        $data=array(
            'page'=>'kontak/listkontakubah',
            'link'=>'listkontak',
            'grup'=>$this->Master->list_data_all('pbk_groups'),
            'list'=>$this->Master->ambil('ID',$id,'pbk')->row(),
        );
        $this->load->view('template/wrapper',$data);
    }

    public function listkontakprosestambah(){
        $data=array(
            'GroupID'=>$this->input->post('grup',true),
            'Name'=>$this->input->post('namapelanggan',true),
            'Number'=>$this->input->post('notelp',true),
        );
        $simpan=$this->Master->simpan_data($data,'pbk');
        if($simpan){
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
    }

    public function listkontakprosesubah(){
        $data=array(
            'GroupID'=>$this->input->post('grup',true),
            'Name'=>$this->input->post('namapelanggan',true),
            'Number'=>$this->input->post('notelp',true),
        );
        $ID=$this->input->post('ID',true);
        $simpan=$this->Master->update('ID',$ID,$data,'pbk');
        if($simpan){
            echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
    }

    public function listkontakhapus($id){
        
        $hapus=$this->Master->hapus('ID',$id,'pbk');
        if($hapus){
            echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'kontak/listkontak";</script>';
        }
    }

    public function grupkontak(){
        $data=array(
            'page'=>'kontak/grupkontakdata',
            'link'=>'grupkontak',
            'list'=>$this->Master->list_data_all('pbk_groups'),
        );
        $this->load->view('template/wrapper',$data);
    }

    public function grupkontaktambahform(){
        $data=array(
            'page'=>'kontak/grupkontaktambah',
            'link'=>'grupkontak',
            
        );
        $this->load->view('template/wrapper',$data);
    }

    public function grupkontakupdateform($id){
        $data=array(
            'page'=>'kontak/grupkontakubah',
            'link'=>'grupkontak',
            
            'list'=>$this->Master->ambil('ID',$id,'pbk_groups')->row(),
        );
        $this->load->view('template/wrapper',$data);
    }

    public function grupkontakprosestambah(){
        $data=array(
            
            'Name'=>$this->input->post('name',true),
            
        );
        $simpan=$this->Master->simpan_data($data,'pbk_groups');
        if($simpan){
            echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
    }

    public function grupkontakhapus($id){
        
        $hapus=$this->Master->hapus('ID',$id,'pbk_groups');
        if($hapus){
            echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
    }


    public function grupkontakprosesubah(){
        $data=array(
            
            'Name'=>$this->input->post('name',true),
            
        );
        $ID=$this->input->post('ID',true);
        $simpan=$this->Master->update('ID',$ID,$data,'pbk_groups');
        if($simpan){
            echo '<script>alert("Data Berhasil Diubah");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
        else{
            echo '<script>alert("Data Gagal Diubah");window.location = "'.base_url().'kontak/grupkontak";</script>';
        }
    }
}