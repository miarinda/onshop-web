<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_jenis extends CI_Model{

        
        public function __construct(){
            parent::__construct();
            $this->table="jenis";
        }

        public function input($data){
            $query = $this->db->insert($this->table, $data);
            if($query){
                return true;
            } else {
                return false;
            }
        }
        public function updateData($where, $data){
            $this->db->where('id_jenis',$where);
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
            $this->db->where('id_jenis',$id);
            $query = $this->db->get();
            return $query;
        }

        public function delete($id){
            $this->db->where('id_jenis',$id);
            $this->db->delete($this->table);
        }

        public function Data($id){
            $this->db->select('*');
            $this->db->where('id_jenis',$id);
            $this->db->from($this->table);
            return $query = $this->db->get();
        }
        
    }