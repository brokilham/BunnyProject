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
}
