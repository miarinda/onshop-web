<?php 

	class New extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_barang','m_jenis','m_gambar'));
		}
		function index(){
			$this->data['record']=$this->m_barang->getData();
			$this->template->load('template','new_catalog',$this->data);
		}
	}
 ?>