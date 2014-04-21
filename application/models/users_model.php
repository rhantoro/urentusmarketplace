<?php
class Users_model extends CI_Model {
	
	public $tableName = 'useraccess';
	public $fields = array('useraccess.iduseraccess', 'useraccess.companytype', 'useraccess.companycode', 'useraccess.companyname', 'useraccess.userid', 'useraccess.password', 'useraccess.fullname', 'useraccess.emailaddress', 'useraccess.usertype', 'useraccess.isactive');
	
	
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
}