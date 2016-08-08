<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_komentar extends CI_Model{


    	 public function __construct(){
            parent::__construct();
            $this->table="komentar";
        }

        public function input($data){
            $query = $this->db->insert($this->table, $data);
            if($query){
                return true;
            } else {
                return false;
            }
        }

        public function getData(){
            $this->db->select('*');
            $this->db->from($this->table);
            return $query = $this->db->get();
        }
    }