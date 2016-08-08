<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_barang extends CI_Model{

        
        public function __construct(){
            parent::__construct();
            $this->table="barang";
        }

        public function input($data){
            $query = $this->db->insert($this->table, $data);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function ambil(){
            $query="SELECT barang.id_jenis,barang.id_barang,barang.nama_barang, barang.ukuran, 
                    barang.harga,barang.keterangan,jenis.id_jenis,jenis.jenis
                FROM barang
                JOIN jenis ON barang.id_jenis=jenis.id_jenis ORDER BY id_barang DESC";
            return $this->db->query($query);
        }

        public function ambilData($id){
            $query="SELECT barang.id_jenis,barang.id_barang,barang.nama_barang, barang.ukuran, 
                    barang.harga,barang.keterangan,jenis.id_jenis,jenis.jenis
                FROM barang
                JOIN jenis ON barang.id_jenis=jenis.id_jenis WHERE id_barang='$id' ORDER BY id_barang DESC";
            return $this->db->query($query);
        }

        public function updateData($where, $data){
            $this->db->where('id_barang',$where);
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
            $this->db->where('id_barang',$id);
            $query = $this->db->get();
            return $query;
        }

        public function delete($id){
            $this->db->where('id_barang',$id);
            $this->db->delete($this->table);
        }

        public function Data($id){
            $this->db->select('*');
            $this->db->where('id_barang',$id);
            $this->db->from($this->table);
            return $query = $this->db->get();
        }

        public function home(){
            $query="SELECT * FROM barang ORDER BY RAND() LIMIT 6 ";
           return $this->db->query($query);
        }
        
        function mylove(){
            $query="SELECT * FROM barang where id_jenis=5 ORDER BY id_barang DESC ";
           return $this->db->query($query);
        }

        function santika(){
            $query="SELECT * FROM barang where id_jenis=6 ORDER BY id_barang DESC ";
           return $this->db->query($query);
        }

        function kintakun(){
            $query="SELECT * FROM barang where id_jenis=7 ORDER BY id_barang DESC  ";
           return $this->db->query($query);
        }

        function beglance(){
            $query="SELECT * FROM barang where id_jenis=8 ORDER BY id_barang DESC  ";
           return $this->db->query($query);
        }   
    }