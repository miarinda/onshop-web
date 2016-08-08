<?php  

	class Barang extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model(array('m_login','m_jenis','m_barang','m_gambar'));
			$this->user     	= $this->session->userdata('username');
            $this->id_pengguna  = $this->session->userdata('id_user');
            $this->level 		= $this->session->userdata('level');
            $this->load->library('form_validation','upload');
		}
		function index(){
			if($this->session->userdata('level') != 1){
            	redirect('login');
        	}else{
				$this->data['title']		=' Data Barang';
	            $this->data['pengguna'] 	= $this->m_login->data($this->user);
	            $this->data['record'] 		= $this->m_barang->ambil();
	            $this->template->load('admin/template','admin/lihat_barang',$this->data);
            }
		}

		function input_barang(){
			$this->data['title']		='Input Data Barang';
			$this->data['pengguna'] 	= $this->m_login->data($this->user);
			$this->data['record'] 		= $this->m_jenis->getData();
			$this->template->load('admin/template','admin/form_barang',$this->data);
		}

		function inputbarang(){
			if (isset($_POST['submit'])) {
				$this->form_validation->set_rules('nama_barang','Nama Barang','trim|required');
				$this->form_validation->set_rules('jenis','Jenis','trim|required');
				$this->form_validation->set_rules('ukuran','Ukuran','trim|required');
				$this->form_validation->set_rules('harga','Harga','trim|required');
				$this->form_validation->set_rules('keterangan','Keterangan','trim|required');
				if($this->form_validation->run()==FALSE){
					$this->index();
				}else{
					$this->load->library('upload');
	                $this->upload->initialize($this->setup_upload_option());
	                if($this->upload->do_upload() == false){
                        
                        echo "error";

                    }else{
		                $data = $this->upload->data();
		                $config['image_library'] = 'gd2';
		                $config['source_image'] = $data['full_path'];
		                $config['new_image']    = './uploads/thumbs';
		                $config['overwrite']    = false;
		                $config['maintain_ratio'] = TRUE;
		                $config['width']    = 150;
		                $config['height']   = 150; 
		                $this->load->library('image_lib',$config);
		                $this->image_lib->resize();
						$nama_barang		=$this->input->post('nama_barang');
						$jenis 				=$this->input->post('jenis');
						$ukuran				=$this->input->post('ukuran');
						$harga 				=$this->input->post('harga');
						$keterangan			=$this->input->post('keterangan');
						$data=array(
							'image_name'	=>$data['orig_name'],
							'nama_barang'	=>$nama_barang,
							'id_jenis'		=>$jenis,
							'ukuran'		=>$ukuran,
							'harga'			=>$harga,
							'keterangan'	=>$keterangan
							
							);
						$this->m_barang->input($data);
						echo "<script>
		                            alert('Data  Barang Tersimpan')
		                        </script>";
					
						$this->index();
					}
				}
			}else{
				echo "gagal";
			}
		}

		
		private function setup_upload_option(){

            $config = array();
            $config['upload_path']      = './upload';
            $config['allowed_types']    = 'jpg|png|gif';
            $config['overwrite']        = 'False';
            $config['max_size']         = '1000';
            return $config;
        }
		function do_upload(){
			if (isset($_POST['submit'])) {
                $this->load->library('upload');
                $this->upload->initialize($this->setup_upload_option());
                    if($this->upload->do_upload() == false){
                        
                        $id = $this->uri->segment(4);
                        $this->data['record'] = $this->m_gambar->ambilData($id);
                        $this->template->load('admin/template','admin/input_gambar',$this->data);

                    }else{
                        $data = $this->upload->data();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $data['full_path'];
                        $config['new_image']    = './uploads/thumbs';
                        $config['overwrite']    = false;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']    = 150;
                        $config['height']   = 150; 
                        $this->load->library('image_lib',$config);
                        $this->image_lib->resize();
                        $id   = $this->input->post('id');
                        $dataarray = array(

                           'image_name'				=>$data['orig_name'],
                            'id_barang'		     	=> $id
                        );
                        $id = $this->input->post('id');
                        $this->m_gambar->input($dataarray);
						echo "<script>
		                            alert('Data  Barang Tersimpan')
		                        </script>";
						
						$this->upload();
                        
                    }
            }else{
                $id = $this->uri->segment(4);
                $this->data['record'] = $this->m_gambar->ambilData($id);
                
                $this->template->load('admin/template','admin/input_gambar',$this->data);   
            }
			
		}
		

		public function edit(){
			if(isset($_POST['submit'])){
				$id 				=$this->input->post('id');
				$jenis 			=$this->input->post('jenis');
				$data=array(
					'jenis'				=>$jenis
					);
				$this->m_barang->updateData($id,$data);
					echo "<script>
	                            alert('Data Telah Diubah')
	                        </script>";
	                  $this->index();
	        }else{
	        	$this->data['pengguna']=$this->m_login->data($this->user);
	        	$id=  $this->uri->segment(4);
	        	$this->data['title']='Edit Data Jenis Barang';
	        	$this->data['record'] = $this->m_barang->getOne($id);
            	$this->template->load('admin/template','admin/form_edit_jenis',$this->data);
	        }
		
		}

		function hapus(){
			$id= $this->uri->segment(4);
	        $this->m_barang->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	        $this->index();
		}

		function hapusimg(){
			$id= $this->uri->segment(4);
	        $this->m_gambar->delete($id);
	        echo '<script>
	                alert("Data berhasil  dihapus")
	              </script>';
	        $this->index();
		}
	}
?>