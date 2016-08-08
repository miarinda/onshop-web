<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
    class M_login extends CI_Model{

        public $table = 'admin';
        public function __construct(){

        }

        public function getPengguna($user_id, $password){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('username', $user_id);
            $this->db->where('password', $password);
            $query = $this->db->get();
            return $query;
        }

        public function data($user_id){
            $this->db->select('*');
            $this->db->where('username', $user_id);
            $query = $this->db->get('admin');
            return $query->row();
        }
    }