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
    public function _remap($method) {
        // 헤더 include
        $this -> load -> view('board/header_v');

        if (method_exists($this, $method)) {
            $this -> {"{$method}"}();
        }

        // 푸터 include
        $this -> load -> view('board/footer_v');
    }

    public function lists() {

        $this -> load -> library('pagination');

        // 페이지 네이션 설정
        $config['base_url'] = '/BoardController/page';

        // 페이징 주소
        $config['total_rows'] = $this -> Board_model -> get_list($this -> uri -> segment(3), 'count');

        // 게시물 전체 개수
        $config['per_page'] = 5;

        // 한 페이지 표시 게시물 수
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
        $this -> load -> view('board/list_v', $data);
    }
 }