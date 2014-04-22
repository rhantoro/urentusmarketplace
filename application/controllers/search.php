<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//$this->load->model('location_model');
		$this->load->helper('security');
		$this->load->helper('download');
	}
	
	public function result() {
		$this->load->view('templates/header');
		$this->load->view('search/result');
		$this->load->view('templates/footer');
	}
	
	public function userresult() {
		
	}
	
}