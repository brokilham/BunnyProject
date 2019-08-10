<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutController extends CI_Controller {


	public function __construct()
    {
		parent::__construct();
		$this->load->database();  
		$this->load->model("t_about_model");				
	}
	
	public function index()
	{
		$data["listAbout"] = $this->t_about_model->getAll();     
		$this->load->view('dashboard/about/main',$data);
	}

	public function getAll()
	{
	
		$data = array(
            'listAbout' => $this->t_about_model->getAll()          
        );
        echo json_encode($data);
	}

	public function save()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('description', 'description', 'required');

		if ($this->form_validation->run() == false) {
            $response = array(
                'status' => 'error',
                'message' => validation_errors()
            );
		}
		else {

			$aboutData = array(
				'Description' 	=> $this->input->post('description', true),
				'ControlNumber' => 0,
				'CreatedDate' 	=> date('Y-m-d H:i:s'),
				'UpdatedDate' 	=> date('Y-m-d H:i:s'),
				'CreatedBy' 	=> "admin"
			);
			
			$id = $this->t_about_model->save($aboutData);

            $response = array(
                'status' => 'success',
                'message' => "<h3>Message send successfully.</h3>"
            );
		}


		echo json_encode($response); 
	}

	
}
