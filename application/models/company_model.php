<?php
class Company_model extends CI_Model {
	
	//public $tableName = 'useraccess';
	//public $fields = array('useraccess.iduseraccess', 'useraccess.companytype', 'useraccess.companycode', 'useraccess.companyname', 'useraccess.userid', 'useraccess.password', 'useraccess.fullname', 'useraccess.emailaddress', 'useraccess.usertype', 'useraccess.isactive');
	
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function authenticate($logintype, $userId, $password) {		
		
		$this->db->select(' * ')
		->from($this->tableName)
		->join('company', 'company.companycode = useraccess.companycode', 'inner')
		->where(array(				
				'useraccess.userid' => $userId,
				'useraccess.companytype' => $logintype,
				'useraccess.password' => md5($password),
				'useraccess.isactive' => 1,
				'company.isactive' => 1,
		));
		
		
		$query = $this->db->get();
		//echo $this->db->last_query();		
		if (count($query->result()) > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	public function submitregistercompany($postdata) {

		$this->db->trans_start();
		$register = array(
				'companytype' => $postdata['companytype'],
				'companyname' => $postdata['companyname'],
		 		'companycode' => $postdata['companycode'],
				'companyaddress' => $postdata['companyaddress'],
				'companycity' => $postdata['city'],
				'companyprovince' => $postdata['province'],
				'companyofficenumber' => $postdata['officenumber'],
				'companyemailaddress' => $postdata['email'],
				'website' => $postdata['website'],
				'zipcode' => $postdata['zipcode'],
		 		'isactive' => '0',
				'createdby' => 'Admin',
		 		'createdip' => $_SERVER['REMOTE_ADDR'],		 		
				'createddate' =>  date('Y-m-d H:i:s')
		);
		$this->db->insert('company', $register);
		
		$useraccess = array(
				'companytype' => $postdata['companytype'],
				'companyname' => $postdata['companyname'],
				'companycode' => $postdata['companycode'],
				'userid' => $postdata['userid'],
				'password' => $postdata['password'],
				'fullname' => $postdata['fullname'],
				'emailaddress' => $postdata['userid'],
				'usertype' => 'SUPERUSER',				
				'isactive' => '0',
				'createdby' => $postdata['userid'],
				'createdip' => $_SERVER['REMOTE_ADDR'],
				'createddate' =>  date('Y-m-d H:i:s')
		);
		$this->db->insert('useraccess', $useraccess);
		
		$this->db->trans_complete();		
		
		
		if ($this->db->trans_status() === FALSE) {
			$result['message'] = 'Error while saving data. Please try again later.';
		} else {
			$result['message'] = '';
		}
	}
}