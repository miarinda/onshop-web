<?php  

	class Beglance extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model(array('m_barang','m_jenis','m_gambar'));
		}
		function index(){
		$this->data['record']=$this->m_barang->beglance();
		$this->template->load('template','Beglance',$this->data);	
		}

		function baca(){
			$id=$this->uri->segment(3);
			$this->data['record']=$this->m_barang->getOne($id);
			$this->template->load('template','single',$this->data);
		}
	}

?>