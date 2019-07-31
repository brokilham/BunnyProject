<?php defined('BASEPATH') OR exit('No direct script access allowed');
class t_works_model extends CI_Model
{
    private $_table = "t_works";
    public $Id;
    public $Title;
    public $Client;
    public $CreatedDate;
    public $UpdatedDate;

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->_table);
        $this->db->order_by("Id","asc");
        return $this->db->get()->result();
    }
}