<?php  

	class About extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_barang',));
		}
		function index(){
		$this->data['record']=$this->m_barang->home();
		$this->template->load('template','about',$this->data);	
		}
		
		function baca(){
			$id=$this->uri->segment();
			$this->data['record']=$this->m_barang->getOne($id);
			$this->template->load('template','single',$this->data);
		}

	}

?>