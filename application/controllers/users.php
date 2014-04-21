<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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
	
	public function index() {
		//redirect(site_url('/users/login'));
	}
	
	public function login() {
		$postData = $this->input->post();
		$isAuthenticate = false;
		
		$user = $this->users_model->authenticate($postData['logintype'], $postData['emailaddress'], $postData['password']);
		
		if ($user != false) {
			$userData = array(
					'loggedin' => TRUE,
					'userid' => $user[0]->userid,
					'fullname' => $user[0]->fullname,
					'usertype' => $user[0]->usertype,
					'emailaddress' => $user[0]->emailaddress,
					'company' => $user[0]->companyname,
					'companycode' => $user[0]->companycode,
			);
			$this->session->set_userdata($userData);			
			
			$this->session->set_flashdata('success', __('Hi %s, you are login successfully.', $this->session->userdata('fullname')));
			
			$isAuthenticate = true;
		} else {
			$this->session->sess_destroy();
			$this->session->set_flashdata('error', __('Fail to login.'));
			//redirect(site_url('/pages/loginform'));
			$isAuthenticate = false;
		}	
		echo $isAuthenticate;
	}
	
	public function logout() {
		$this->session->sess_destroy();
		$this->session->sess_create();
		$this->session->set_flashdata('success', __('You are logout successfully.'));
		redirect(site_url('/'));
	}
	
	public function accountdetail() {		
		$this->load->view('templates/header');
		$this->load->view('user/accountdetail');
		$this->load->view('templates/footer');
	}
}
