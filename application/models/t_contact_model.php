<?php defined('BASEPATH') OR exit('No direct script access allowed');
class t_contact_model extends CI_Model
{
    private $_table = "t_contact";
    private $Id;
    private $CreatedDate;
    private $UpdatedDate;
    private $Adress;
    private $Email;
    private $Phone1;
    private $Phone2;
    private $City;
    private $ZipCode;

    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->_table);
        $this->db->order_by("CreatedDate","asc");
        return $this->db->get()->result();
    }
}