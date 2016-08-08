<?php  

	class Contact extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_komentar'));
			$this->user     	= $this->session->userdata('username');
            $this->id_pengguna  = $this->session->userdata('id_user');
            $this->level 		= $this->session->userdata('level');
            $this->load->library('form_validation');
		}
		function index(){
		$this->data['komentar']=$this->m_komentar->getData();
		$this->template->load('template','contact',$this->data);

		}

		function komentar(){
			$this->form_validation->set_rules('nama','Nama','trim|required');
			$this->form_validation->set_rules('pesan','Pesan','trim|required');
			if($this->form_validation->run()==FALSE){
				$this->index();
			}else{
				$nama 				=$this->input->post('nama');
				$pesan 				=$this->input->post('pesan');
				$data=array(
					'nama'			=>$nama,
					'pesan'			=>$pesan

					);
				$this->m_komentar->input($data);
				echo "<script>
                            alert('Komentar Tersimpan')
                        </script>";
			
				$this->index();

			}
		}
	

	}

?>