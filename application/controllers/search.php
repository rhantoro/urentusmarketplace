<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('search_model');
		$this->load->helper('security');
		$this->load->helper('download');
	}
	
	public function result() {
		$postData = $this->input->post();
		
		$result = $this->search_model->searchPublic($postData);
		$resultCategory = $this->search_model->searchCategory($postData);
		$resultPost = $postData;
		
		$output = array(
				"sEcho" => intval($this->input->post('sEcho')),
				"iTotalRecords" => $result['count_all'],
				"iTotalDisplayRecords" => $result['count_all'],
				"aaData" => $result['data'],
				
				"sEcho" => intval($this->input->post('sEcho')),
				"iTotalRecordsCategory" => $resultCategory['count_all_category'],
				"iTotalDisplayRecordsCategory" => $resultCategory['count_all_category'],
				"aaDataCategory" => $resultCategory['data_category'],
				
				"aaDataPost" => $resultPost				
		);
		
		//print_r(json_encode($output));
		//$output['coba'] = 1;
		$this->load->view('templates/header');
		$this->load->view('search/result', $output);
		$this->load->view('templates/footer');
	}	
	
	
	public function user_result() {
		
	}
	
}