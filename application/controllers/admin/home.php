<?php  
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_login'));
			$this->user     = $this->session->userdata('username');
            $this->id_pengguna  = $this->session->userdata('id_user');
		}

		function index(){
			if($this->session->userdata('level') != 1){
            	redirect('login');
        	}else{
				$this->data['lihat']['title']	 = 'Judul Disini';
        		$this->load->model('m_login');
                $user = $this->session->userdata('username');
                $this->data['lihat']['level'] = $this->session->userdata('level');        
                $this->data['lihat']['pengguna'] = $this->m_login->data($user);
                $this->template->load('admin/template','admin/dashboard',$this->data['lihat']);
            }
		}
	}
?>