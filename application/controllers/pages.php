<?php
class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper('security');
		$this->load->helper('download');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}

	public function login_form() {
		$this->load->view('templates/header');
		//$this->load->view('templates/advancesearch');
		$this->load->view('pages/loginform');
		$this->load->view('templates/footer');
	}
	
	public function index() {
		$this->load->view('templates/header');
		if ($this->session->userdata('loggedin') == "1") $this->load->view('templates/advancesearchmember');
		else $this->load->view('templates/advancesearch');
		
		$this->load->view('pages/index');
		$this->load->view('templates/footer');		
	}

	public function dashboard_user() {
		$this->load->view('templates/header');
		$this->load->view('pages/dashboarduser');
		$this->load->view('templates/footer');
	}
	
	public function about() {
		//@todo complate this method
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	public function register_renter() {
		$this->load->view('templates/header');
		//$this->load->view('templates/quicksearch');
		$this->load->view('company/companyregister');
		$this->load->view('templates/footer');
	}
	
	public function register_rentee() {
		$this->load->view('templates/header');		
		$this->load->view('company/companyregister');
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