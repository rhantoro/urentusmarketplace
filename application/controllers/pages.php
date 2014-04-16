<?php
class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');		
	}

	public function about() {
		//@todo complate this method
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function contact() {
		//@todo complate this method
		$this->load->view('templates/header');
		$this->load->view('pages/contact');
		$this->load->view('templates/footer');
	}

	public function unauthorized() {
		$this->output->set_header("HTTP/1.1 401 Unauthorized");
		$this->load->view('templates/header');
		$this->load->view('pages/unauthorized');
		$this->load->view('templates/footer');
	}
}