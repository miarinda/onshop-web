<?php  

	class Kintakun extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_barang','m_jenis','m_gambar'));
		}

		function index(){
		$this->data['record']=$this->m_barang->kintakun();
		$this->template->load('template','Kintakun',$this->data);	
		}
		
		function baca(){
			$id=$this->uri->segment(3);
			$this->data['record']=$this->m_barang->getOne($id);
			$this->template->load('template','single',$this->data);
		}

	}

?>