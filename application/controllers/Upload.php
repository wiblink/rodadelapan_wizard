<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

	public function __construct(){		
		parent::__construct();

		//load model
		$this->load->model('model_medcek'); 
		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$rs = $this->model_medcek->get_all();
		foreach($rs as $row) {
			$tgl_lahir= $row->tgl_lahir;
			//echo $namanya;			
		}
		
		$data = array(
			'title' 		=> 'Data medcek',
			'data_medcek'	=> $this->model_medcek->get_all(),
		);	
		
		
		$content='upload_file';
		
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('/'.$content, $data, TRUE);
        $this->load->view('template/backend/index', $data);
		//$this->load->view('data_medcek');
	}

	public function tambah()
	{
		
		$data = array(
			'title' 	=> 'Tambah Data medcek'
		);
		if($this->session->userdata('role') == 'admin'){
		
		$content='tambah_medcek';
		$data['groups'] = $this->model_medcek->getAllGroups();
		$data['headernya'] = $this->load->view('template/backend/header', $data, TRUE);
        $data['contentnya'] = $this->load->view('medcek/'.$content, $data, TRUE);
		$this->load->view('template/backend/index', $data);
		//$this->load->view('tambah_medcek', $data);
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
		
		
			//$sftp_config['upload_path'] = 'var/www/html/uploads/';
            //$sftp_config['allowed_types'] = '*';
            $this->load->library('Sftp');
            
            if($this->Sftp->upload('file'))
            {
				die(print_r('ascac'));
                //Get uploaded file information
                $upload_data = $this->upload->data();
                $fileName = $upload_data['file_name'];
                
                //File path at local server
                $source = 'uploads/'.$fileName;
                
                //Load codeigniter FTP class
                $this->load->library('ftp');
                
					#Protocol = Protocol.Sftp,
					#HostName = "tamu.res.ikwb.com",
					#PortNumber = 8096,
					#UserName = "root",
					#Password = "Jkt4v!s2svr",
	
                //FTP configuration
				$sftp_config['hostname'] = 'tamu.res.ikwb.com';
				$sftp_config['username'] = 'root';
				$sftp_config['password'] = 'Jkt4v!s2svr';
				$sftp_config['port']     = 8096;
				//$config['passive']  = FALSE;
				$sftp_config['debug']    = TRUE;
                
                //Connect to the remote server
                $this->sftp->connect($sftp_config);
                
                //File upload path of remote server
                $destination = '/assets/'.$fileName;
                
                //Upload file to the remote server
                $this->sftp->upload($source, ".".$destination);
                
                //Close FTP connection
                $this->sftp->close();
                
                //Delete file from local server
                @unlink($source);
				
				die(print_r('akhir'));
            }
			
	}

	

}
