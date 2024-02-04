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

    function get_list($table = 'ci_board', $type = '', $offset = '', $limit = '') {
        $limit_query = '';
        
        if ($limit != '' OR $offset != '') {
            // 페이징이 있을 경우
            $limit_query = ' LIMIT ' . $offset . ', ' . $limit;
        }

        $sql = "SELECT  * FROM " . $table . " ORDER BY board_id DESC" . $limit_query;
        $query = $this -> db -> query($sql);

        $result = $query -> result();

        if ($type == 'count') {
            $result = $query -> num_rows();
        } else {
            $result = $query -> result();
        }

        return $result;
    }
}