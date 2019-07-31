<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {


	public function __construct()
    {
		parent::__construct();
		$this->load->database();  
		$this->load->model("t_contact_model");				
    }

	public function getAll()
	{
	
		$data = array(
            'listContact' => $this->t_contact_model->getAll()          
        );

        echo json_encode($data);
	}
}
