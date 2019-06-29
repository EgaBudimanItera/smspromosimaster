<?php
  	class Master extends CI_Model {
  		
        function simpan_data($data, $table){
            $this->db->insert($table, $data);
            return true;
        }

        function kueri($query){
            return $this->db->query($query);
        }
        
        function insertbatch($table,$insert) {
             $this->db->insert_batch($table,$insert);
             return true;
        }

        function list_data_all($table){
             return $query = $this->db->get($table)->result();  
        }

        function cek_login($where){      
            return $this->db->get_where('ref_user',$where);
        }

        function cek_login_pelanggan($where){      
            return $this->db->get_where('pelanggan',$where);
        }

        function list_data_where($param_id, $id, $table){
           return $this->db->get_where($table, array($param_id => $id));
        }

        function count($table){
            return $query = $this->db->get($table);
        }
        
        function hapus($param_id, $id, $table){
            $this->db->delete($table, array($param_id => $id)); 
            return true;
        }
        
        function ambil($param_id, $id, $table){
           return $this->db->get_where($table, array($param_id => $id));
        }

        
        
        function update($param_id, $id,  $data,$table){       
            $this->db->where($param_id, $id);
            $this->db->update($table, $data); 
            return true;
        }

        function usercreated(){
            $createdby=$this->session->userdata('userNama');
            return $createdby;
        }

        function cekidpelanggan(){
            $Id=$this->session->userdata('Id');
            return $Id;
        }

        function kodepelanggan(){
            //K002
            $this->db->select('Right(kodebarang,3) as kode',false);
            
            $this->db->order_by('kodebarang','desc');
            $this->db->limit(1);
            $query = $this->db->get('ref_barang');

            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "B".$kodemax;
            return $kodejadi;
        }

        
	}