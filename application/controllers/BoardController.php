<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  게시판 메인 컨트롤러
 */

 class BoardController extends CI_Controller {
    function __construct() {       
        parent::__construct();
        $this -> load -> database('ssnong');
        $this -> laod -> model('Board_model');
        $this -> laod -> helper(array('url', 'date'));

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
        // $this -> load -> helper(array('url', 'date'));
        $this -> load -> model('Board_model');
        $data['list'] = $this -> Board_model -> get_list();

        $this -> load -> view('board/list_v', $data);
    }
 }