<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
	public function __construct() {
		parent::__construct();
	
		$this->load->model('company_model');
		$this->load->helper('security');
		$this->load->helper('download');
	}
	
	public function accountdetail() {
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->load->view('templates/header');
		$this->load->view('company/accountdetail');
		$this->load->view('templates/footer');
	}
	
	public function submitregistercompany() {
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$postData = $this->input->post();
		
		$output['message'] = '';
		$this->form_validation->set_rules('companyname', __('Company Name'), 'required');
		$this->form_validation->set_rules('companytype', __('Company Type'), 'required');
		
		if ($this->form_validation->run() === FALSE) {
			$output['message'] = "!! Please Completely Data with Red Asterik";			
		} else {
			$result = $this->company_model->submitregistercompany($postData);
			if ($result['message'] == "") {
				$output['message'] = $result['message'];
			} else {			
				$output['message'] = "";
			}
		}
		$output['data'] = "data"; //$result['data'];
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
	
}
