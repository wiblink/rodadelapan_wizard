<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends MY_Controller {

	public function __construct(){		
		parent::__construct();

		//load model
		$this->load->model('model_reservation'); 
		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$rs = $this->model_reservation->get_all();
		foreach($rs as $row) {
			//$tgl_lahir= $row->tgl_lahir;
			//echo $namanya;			
		}
		
		$data = array(
			'title' 		=> 'Data reservation',
			'data_reservation'	=> $this->model_reservation->get_all(),
		);	
		$content='reservation';		
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('reservation/'.$content, $data, TRUE);
        $this->load->view('template/backend/index', $data);
		//$this->load->view('data_reservation');
	}

	public function tambah()
	{
		
		$data = array(
			'title' 	=> 'Tambah Data reservation'
		);
		if($this->session->userdata('role') == 'admin'){
		
		$content='tambah_reservation';
		$data['groups'] = $this->model_reservation->getAllGroups();
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('reservation/'.$content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
		//$this->load->view('tambah_reservation', $data);
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
            redirect(base_url('index.php/reservation/tambah'));

        }else{

        $this->model_reservation->simpan($data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');
		//redirect
		redirect('reservation/');

        }
	}

	public function detil($id_mc)
	{
		$data = array(

			'title' 	=> 'Edit Data reservation',
			'data_reservation' => $this->model_reservation->detil($id_mc)

		);
		if($this->session->userdata('role') == 'admin'){
			
		$id_mc = $this->uri->segment(3);
		
		
		$content='edit_reservation';
		$data['groups'] = $this->model_reservation->getAllGroups();
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('reservation/'.$content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
		
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-success alert-dismissible"> Ngapain saya disini??.</div>');
		$content='no_acces';
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
												
		}
	}
	
	
	public function print($id_mc)
	{
		$data = array(

			'title' 	=> 'Edit Data reservation',
			'data_reservation' => $this->model_reservation->detil($id_mc)

		);
		if($this->session->userdata('role') == 'admin'){
			
		$id_mc = $this->uri->segment(3);
		
		
		$content='templateRa';
		$data['groups'] = $this->model_reservation->getAllGroups();
		//$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('reservation/'.$content, $data, TRUE);
		$this->load->view('reservation/templateRaNew');
		
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-success alert-dismissible"> Ngapain saya disini??.</div>');
		$content='templateRa';
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

		$this->model_reservation->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('reservation/');
		
		} else {
			
		$this->session->set_flashdata('noacces', '<div class="alert alert-success alert-dismissible"> Ngapain saya disini??.</div>');
		$content='no_acces';
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
												
		}

	}

	public function hapus($id_reservation)
	{
		$id['id_mc'] = $this->uri->segment(3);		
		$this->model_reservation->hapus($id);
		//redirect
		redirect('reservation/');
	}

}
