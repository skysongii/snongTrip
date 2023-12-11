<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  게시판 메인 컨트롤러
 */

 class BoardController extends CI_Controller {
    function __construct() {       
        parent::__construct();
        $this -> load -> database('ssnong');
        $this -> load -> model('Board_model');
        $this -> load -> helper(array('url', 'date'));

      }

    /**
    * 주소에서 메서드가 생략되었을 때 실행되는 기본 메서드 -> lists 함수 호출
    */
    public function index() {
       $this -> lists();
    }
    

    /**
     * 사이트 헤더, 푸터 자동 추가
     */
    public function _remap($method, $params = array()) {
        // 헤더 include
        $this -> load -> view('board/header_v');

        // 클래스에 해당 메소드가 없으면 출력하지 않도록
        if (method_exists($this, $method)) {

            call_user_func_array(array($this, $method), $params);
            // $this -> {"{$method}"}();
        }

        // 푸터 include
        $this -> load -> view('board/footer_v');
    }

    public function lists() {
        
        // 페이지 네이션 설정
        $this -> load -> library('pagination');
        
        // 페이징 주소
        $config['base_url'] = '/bbs/page';
        
        // 게시물 전체 개수
        $config['total_rows'] = $this -> Board_model -> get_list($this -> uri -> segment(3), 'count');

        // 한 페이지 표시 게시물 수
        $config['per_page'] = 5;

        // 페이지 번호가 위치한 세그먼트
        $config['uri_segment'] = 5;
        
        // 페이지네이션 초기화
        $this -> pagination -> initialize($config);
        
        // 페이지 링크 생성 및 view에서 사용할 변수 할당
        $data['pagination'] = $this -> pagination -> create_links();

        // 게시물 목록을 불러오기 위한 offset, limit 값 가져오기
        $page = $this -> uri -> segment(5,1);

        if ($page > 1) {
            $start = (($page / $config['per_page'])) * $config['per_page'];
        } else {
            $start = ($page - 1) * $config['per_page'];
        }

        $limit = $config['per_page'];


        $data['list'] = $this -> Board_model -> get_list($this -> uri -> segment(3), '', $start, $limit);
        // $data['list'] = $this -> Board_model -> get_list();
        $this -> load -> view('board/list_v', $data);

    }
 }