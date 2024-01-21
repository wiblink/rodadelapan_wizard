<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct(){		
		parent::__construct();

		//load model
		$this->load->model('model_user'); 
		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$rs = $this->model_user->get_all();
		foreach($rs as $row) {
			//$tgl_lahir= $row->tgl_lahir;
			//echo $namanya;			
		}
		
		$data = array(
			'title' 		=> 'Data user',
			'data_user'	=> $this->model_user->get_all(),
		);	
		
		
		$content='user';
		
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('user/'.$content, $data, TRUE);
        $this->load->view('template/backend/index', $data);
		//$this->load->view('data_user');
	}

	public function tambah()
	{
		
		$data = array(
			'title' 	=> 'Tambah Data user'
		);
		if($this->session->userdata('role') == 'admin'){
		
		$content='tambah_user';
		$data['groups'] = $this->model_user->getAllGroups();
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('user/'.$content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
		//$this->load->view('tambah_user', $data);
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-danger"> Ngapain saya disini??.</div>');
		$content='no_acces';
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
												
		}
	}

	public function simpan()
	{
		
		
		$this->form_validation->set_rules('no_lab', 'No Lab', 'required');
        $this->form_validation->set_rules('nama', 'Nama Pasien', 'required');

		$data = array(

			'no_lab' 			=> $this->input->post("no_lab"),
			'nama' 				=> $this->input->post("nama"),
			'jk' 				=> $this->input->post("jk"),
			'tgl_lahir' 		=> $this->input->post("tgl_lahir"),
			'id_jenis_medical'	=> $this->input->post("id_jenis_medical"),
		);
		

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('index.php/user/tambah'));

        }else{

        $this->model_user->simpan($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		//redirect
		redirect('user/');

        }
	}

	public function detil($id_mc)
	{
		$data = array(

			'title' 	=> 'Edit Data user',
			'data_user' => $this->model_user->detil($id_mc)

		);
		if($this->session->userdata('role') == 'admin'){
			
		$id_mc = $this->uri->segment(3);
		
		
		$content='edit_user';
		$data['groups'] = $this->model_user->getAllGroups();
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('user/'.$content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
		
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-success alert-dismissible"> Ngapain saya disini??.</div>');
		$content='no_acces';
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
												
		}
	}

	public function update()
	{
		if($this->session->userdata('role') == 'admin'){
		$id['id_mc'] = $this->input->post("id_mc");
		$data = array(
			'no_lab' 			=> $this->input->post("no_lab"),
			'nama' 				=> $this->input->post("nama"),
			'jk' 				=> $this->input->post("jk"),
			'tgl_lahir' 		=> $this->input->post("tgl_lahir"),
			'id_jenis_medical'	=> $this->input->post("id_jenis_medical"),			
		);

		$this->model_user->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('user/');
		
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-success alert-dismissible"> Ngapain saya disini??.</div>');
		$content='no_acces';
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
												
		}

	}

	public function hapus($id_user)
	{
		$id['id_mc'] = $this->uri->segment(3);		
		$this->model_user->hapus($id);
		//redirect
		redirect('user/');
	}

}
