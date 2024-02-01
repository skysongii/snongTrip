<?php
class KisaController extends CI_Controller {

/**
     * Board constructor. : 생성자
     */
    function __construct() {       
        parent::__construct();
      }
	public function index()
	{
		// $this->load->model 명령어는 /application/models 폴더를 탐색한다고 이해해도 됨
        // model('Api_model')에서 Api_model은 Api_model.php 파일을 찾겠다는 의미
        // $this->Api_model->kisaDomainList();는 로드된 Api_model.php에서 kisaDomainList 함수를 실행하겠다는 뜻
		$this->load->model('Api_model');
        $data['row'] = $this->Api_model->kisaDomainList();

        $this -> load -> view('/templates/kisaSearchDomain', $data);
	}
}
?>