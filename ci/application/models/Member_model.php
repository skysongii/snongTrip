<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Member_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function GetMembers()
    {
        $this->load->database();
        $result = $this->db->query('SELECT id, name FROM members')->result();
        $this->db->close();

        return $result;
    }
}