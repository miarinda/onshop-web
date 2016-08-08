<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_gambar extends CI_Model{

        
        public function __construct(){
            parent::__construct();
            $this->table="gambar";
        }

        public function input($data){
            $query = $this->db->insert($this->table, $data);
            if($query){
                return true;
            } else {
                return false;
            }
        }

        public function ambilData($id){
            $query="SELECT gambar.id_barang,gambar.id_gambar,gambar.image_name,barang.id_barang
                FROM gambar
                JOIN barang ON gambar.id_barang=barang.id_barang ORDER BY id_gambar DESC";
            return $this->db->query($query);
        }
        function AmbilGambar($id){

            $query = "  SELECT image_name, id_gambar,id_barang
                        FROM 'gambar' 
                        WHERE id_barang = '$id'";
            return $this->db->query($query);
        }


        public function updateData($where, $data){
            $this->db->where('id_gambar',$where);
            $this->db->update($this->table,$data);
        }

        public function getData(){
            $this->db->select('*');
            $this->db->from($this->table);
            return $query = $this->db->get();
        }

        function getOne($id){

            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id_gambar',$id);
            $query = $this->db->get();
            return $query;
        }

        public function delete($id){
            $this->db->where('id_gambar',$id);
            $this->db->delete($this->table);
        }

        public function Data($id){
            $this->db->select('*');
            $this->db->where('id_gambar',$id);
            $this->db->from($this->table);
            return $query = $this->db->get();
        }
        
    }