<?php defined('BASEPATH') OR exit('No direct script access allowed');
class t_blog_model extends CI_Model
{
    private $_table = "t_blog";

    public $Id;
    public $Title;
    public $CreatedDate;
    public $UpdatedDate;
    public $CreatedBy;
    public $Category;



    public function getAll()
    {
        $this->db->select("*");
        $this->db->from($this->_table);
        $this->db->order_by("CreatedDate","asc");
        return $this->db->get()->result();
    }
}