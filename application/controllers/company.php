<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {
	public function __construct() {
		parent::__construct();
	
		//$this->load->model('users_model');
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
}
