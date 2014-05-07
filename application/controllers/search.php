<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('search_model');
		$this->load->helper('security');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('url');
	}
	
	public function result($paging=0,$key=null,$val=null ) {
		$postData['subcategorycode'] = "";
		if ($this->input->post() == null) {
			$postData = $this->session->userdata('postData');
		} else {
			$postData = $this->input->post();
		}	
		
		if ($key <> null) {
			if ($key == "cat") {
				$postData["category"] = str_replace('-', ' ',$val);
				$postData['subcategorycode'] = "";
			}
			if ($key == "sub") $postData["subcategorycode"] = str_replace('-', ' ',$val);			
			
		} 
		//print_r($postData);
		$resultPost = $postData;
		$this->session->set_userdata('postData',$resultPost);
		
		if ($postData["modes"]=="public")$result = $this->search_model->searchPublic($postData, $paging);
		if ($postData["modes"]=="member")$result = $this->search_model->searchMember($postData, $paging);
		
		$resultCategory = $this->search_model->searchCategory($postData);
		
		
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
		$config['base_url'] =  base_url().'/search/result/';
		$config['total_rows'] = $result['count_all'];
		$config['per_page'] = $this->config->item('row_per_page');
		$config['full_tag_open'] = '<ul id="pg-php" class="paging">';
		$config['full_tag_close'] = '</ul>';
		$config['cur_tag_open'] = '<a class="on">';
		$config['cur_tag_close'] = '</a>';
		$config['prev_link'] = '« Prev';
		$config['next_link'] = 'Next »';
		//$this->uri->segment(4);
		
		$this->pagination->initialize($config);
		$output['paging'] = $this->pagination->create_links();
		//print_r(json_encode($output));
		
		$this->load->view('templates/header');
		$this->load->view('search/result', $output);
		$this->load->view('templates/footer');
	}	
	
	
	public function user_result() {
		
	}
	
}