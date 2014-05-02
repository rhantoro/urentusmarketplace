<?php
class Model_model extends CI_Model {
	
	private $tableName = 'model';
	public $fields = array(
			'modelcode',
			'modelname'
	);
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function getAllData($startRowIndex = 0, $rowsPerPage = 20, $orderBy = "com_companycode ASC", $criterias = array()) {
		$orderBy = "modelname asc";
		
		$allRows = $this->db->count_all_results($this->tableName);
		
		$this->db->select('modelcode')
		->from($this->tableName)
		->order_by($orderBy);
				
		$query = $this->db->get();
	
		$returnValue = array(
			'data' => $query->result(),
			'count_all' => $allRows
		);
		
		return $returnValue;
	}
	
}