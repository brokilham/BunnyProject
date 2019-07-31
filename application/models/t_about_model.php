<?php defined('BASEPATH') OR exit('No direct script access allowed');
class t_about_model extends CI_Model
{
    private $_table = "t_about";
    public $Id;
    public $Description;
    public $ControlNumber;


    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->_table);
        $this->db->order_by("ControlNumber","asc");
        return $this->db->get()->result();
    }
}