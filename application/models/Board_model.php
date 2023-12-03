<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 공통 게시판 모델
*/
class Board_model extends CI_Model {
    function __construct() {
        parent::__construct();
        // $this->load->database('ssnong');

    }

    function get_list($table = 'ci_board') {
        $sql = "SELECT  * FROM ".$table." ORDER BY board_id DESC";
        // $sql = "SELECT * FROM ci_board ORDER BY board_id desc";
        $query = $this -> db -> query($sql);
        $result = $query -> result();
        // $result = $query -> result_array();
        // echo $result;
        $this->db->close();

        return $result;
    }
}