<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class workController extends CI_Controller {


	public function __construct()
    {
		parent::__construct();
		$this->load->database();  
		$this->load->model("t_works_model");				
    }

	public function index()
	{
		$data["listWork"] = $this->t_works_model->getAll();
        $this->load->view('dashboard/work/main',$data);
	
	}

	public function getAll()
	{
	
		$data = array(
            'listWork' => $this->t_works_model->getAll()          
        );

        echo json_encode($data);
	}
}
