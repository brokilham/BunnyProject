<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogController extends CI_Controller {


	public function __construct()
    {
		parent::__construct();
		$this->load->database();  
		$this->load->model("t_blog_model");				
    }
	public function index()
	{
		//$data["listWork"] = $this->t_works_model->getAll();
		//$this->load->view('dashboard/work/main',$data);
		$this->load->view('dashboard/blog/main');
	}

	public function getAll()
	{
	
		$data = array(
            'listBlogPost' => $this->t_blog_model->getAll()          
        );

        echo json_encode($data);
	}
}
