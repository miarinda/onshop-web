<?php  

	class Jenis extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_login','m_jenis'));
			$this->user     	= $this->session->userdata('username');
            $this->id_pengguna  = $this->session->userdata('id_user');
            $this->level 		= $this->session->userdata('level');
            $this->load->library('form_validation');
		}
		function index(){
			if($this->session->userdata('level') != 1){
            	redirect('login');
        	}else{
				$this->data['title']		='Input Data Jenis Barang';
				$this->data['title2']		='Data Jenis Barang';
	            $this->data['pengguna'] 	= $this->m_login->data($this->user);
	            $this->data['record'] 		= $this->m_jenis->getData();
	            $this->template->load('admin/template','admin/jenis_barang',$this->data);
            }
		}

		function inputJenis(){
			$this->form_validation->set_rules('jenis','Jenis','trim|required');
			if($this->form_validation->run()==FALSE){
				$this->index();
			}else{
				$jenis 				=$this->input->post('jenis');
				$data=array(
					'jenis'			=>$jenis
					
					);
				$this->m_jenis->input($data);
				echo "<script>
                            alert('Data Jenis Barang Tersimpan')
                        </script>";
			
				$this->index();
			}
		}
		

		public function edit(){
			if(isset($_POST['submit'])){
				$id 				=$this->input->post('id');
				$jenis 			=$this->input->post('jenis');
				$data=array(
					'jenis'				=>$jenis
					);
				$this->m_jenis->updateData($id,$data);
					echo "<script>
	                            alert('Data Telah Diubah')
	                        </script>";
	                  $this->index();
	        }else{
	        	$this->data['pengguna']=$this->m_login->data($this->user);
	        	$id=  $this->uri->segment(4);
	        	$this->data['title']='Edit Data Jenis Barang';
	        	$this->data['record'] = $this->m_jenis->getOne($id);
            	$this->template->load('admin/template','admin/form_edit_jenis',$this->data);
	        }
		
		}

		function hapus(){
			$id= $this->uri->segment(4);
	        $this->m_jenis->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	        $this->index();
		}
	}
?>