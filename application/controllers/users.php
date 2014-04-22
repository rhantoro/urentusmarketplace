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
	
	public function account_detail() {		
		$this->load->view('templates/header');
		$this->load->view('user/accountdetail');
		$this->load->view('templates/footer');
	}
	
	public function list_user_account() {
		$this->load->view('templates/header');
		$this->load->view('user/listuseraccount');
		$this->load->view('templates/footer');
	}
	
	public function get_list_user_account($type = "", $criteria = "") {
		if (!empty($criteria))
			$criteria = str_replace('%20', ' ', $criteria);
		
				
		$startIndex = $this->input->post('iDisplayStart');
		$rowPerPage = $this->input->post('iDisplayLength');
		$totalColSorted = intval($this->input->post('iSortingCols'));
		
		$searchCriteria = array();
		if (!empty($type) && !empty($criteria)) {
			$searchCriteria[$type] = $criteria;
		}
		
		$orderByArr = array();
		for ( $i=0 ; $i < $totalColSorted; $i++ ) {
			$sortColNumber = intval($this->input->post('iSortCol_' . $i));
			$isSortableCol = (bool) $this->input->post('bSortable_' . $sortColNumber);
		
			if ($isSortableCol == TRUE) {
				$sortDirection = $this->input->post('sSortDir_'.$i) === 'asc' ? 'asc' : 'desc';
				$shortColIndex = $sortColNumber > 0 ? $sortColNumber - 1 : $sortColNumber;
				$orderByArr[] = $this->input->post('mDataProp_' .$sortColNumber) . ' ' . $sortDirection;
			}
		}		
		
		$result = $this->users_model->getListUserAccount($startIndex, $rowPerPage, implode(',', $orderByArr), $searchCriteria);
		
		$output = array(
				"sEcho" => intval($this->input->post('sEcho')),
				"iTotalRecords" => $result['count_all'],
				"iTotalDisplayRecords" => $result['count_all'],
				"aaData" => $result['data']
		);
		
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}
