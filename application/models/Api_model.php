<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// namespace application\models;
class Api_model extends CI_model {

    function __construct(){ 
        parent::__construct(); 
        // 위에서 설정한 /application/config/database.php 파일에서 
        // $db['myDB'] 설정값을 불러오겠다는 뜻
        $this->load->database('ssnong');

    } 

    
    /**
     * 2023-10-25
     * @author snong 
     * Kisa 인터넷진흥원 도메인 주소정보 조회
     */
    public function kisaDomainList() {
        $sql = "SELECT
                    au.idx, au.k_name, au.url, aa.api_key 
                FROM 
                    api_url au LEFT JOIN api_authkey aa ON au.idx = aa.idx
                WHERE
                    au.idx = 1";
        $result = $this->db->query($sql)->result();
        $this->db->close();
        // $result = $query->result();
        return $result;
    }

    // $result = $this->db->query('SELECT id, name FROM members')->result();
    // $this->db->close();

}