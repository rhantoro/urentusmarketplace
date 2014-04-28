<?php
class Subcategory_model extends CI_Model {
	
	private $tableName = 'subcategory';
	public $fields = array(
			'subcategorycode',
			'subcategoryname'
	);
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function getAllData($startRowIndex = 0, $rowsPerPage = 20, $orderBy = "com_companycode ASC", $criterias = array()) {
		$orderBy = "subcategoryname asc";
		
		$allRows = $this->db->count_all_results($this->tableName);
		
		$this->db->select('subcategorycode')
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