<?php
class Category_model extends CI_Model {
	
	private $tableName = 'category';
	public $fields = array(
			'categorycode',
			'categoryname'
	);
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function getAllData($startRowIndex = 0, $rowsPerPage = 20, $orderBy = "com_companycode ASC", $criterias = array()) {
		$orderBy = "categoryname asc";
		
		$allRows = $this->db->count_all_results($this->tableName);
		
		$this->db->select('categorycode')
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