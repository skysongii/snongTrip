<?php
class ApiControllertest extends CI_Controller {

/**
     * Board constructor. : 생성자
     */
    function __construct() {       
        parent::__construct();
      }

	    /**
     * 주소에서 method가 생략되었을 때 기본으로 실행
     */
    public function index() {
        // $this->load->model 명령어는 /application/models 폴더를 탐색한다고 이해해도 됨
        // model('Api_model')에서 Api_model은 Api_model.php 파일을 찾겠다는 의미
        // $this->Api_model->test();는 로드된 Api_model.php에서 kisaDomainList 함수를 실행하겠다는 뜻
        // $this->load->model('Api_model');
        // $this->Api_model->kisaDomainList();
        $this->load->model('Api_model');
        // $this->Api_model->kisaDomainList();
        
        
        $data['row'] = $this->Api_model->kisaDomainList();
        $this -> load -> view('/templates/apiview', $data);
      }
    

	 /**
     * model의 get_list()로 목록 불러오기
     */
    // public function lists() {
    //     // Board_model에서 get_list()로 list를 받아와 data['list']로 저장합니다.
    //     $data['list'] = $this -> Api_model -> get_list();
        
    //     // 저장한 data를 view인 kisaSearchDomain에 넘겨줍니다.
    //     // view의 경로로 board 폴더 안에 넣어주었습니다. 
    //     $this -> load -> view('/templates/api_view', $data);
    // }


}
?>