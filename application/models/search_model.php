<?php
class Search_model extends CI_Model {
	
	private $tableName = 'brand';
	public $fields = array(
			'brandcode',
			'brandname'
	);
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function searchPublic($postData) {
		
		if ($postData['product_input'] != "COMPAR" ) {
			$orderBy = "createddate asc";
			
			//$allRows = $this->db->count_all_results('productitem');
			
			$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter, 
					mainphoto_original, mainphoto_middle, mainphoto_thumb, description
					')
			->from('productitem')
			->order_by($orderBy)
			->like(array('filteroptioncode'=>$postData['product_input'], 'categorycode'=>$postData['category'], 'searchpreference'=>$postData['preference'], 'brandcode'=>$postData['brand']));
			//->where(array('filteroptioncode' => $province));
			
			$query = $this->db->get();
			
			//echo $this->db->last_query();
			$returnValue = array(
					'data' => $query->result(),
					'count_all' => $query->num_rows()
			);
		} else {
			
		}	
		
		return $returnValue;
	}
	
	public function searchCategory($postData) {
	
		if ($postData['product_input'] != "COMPAR" ) {
			$orderBy = "categorycode,subcategorycode asc";
	
			//$allRows = $this->db->count_all_results('productitem');
	
			$this->db->select('categorycode, subcategorycode')
			->from('subcategory')
			->order_by($orderBy)
			->like(array('categorycode'=>$postData['category']));
			//->where(array('filteroptioncode' => $province));
	
			$query = $this->db->get();
	
			//echo $this->db->last_query();
			$returnValue = array(
					'data_category' => $query->result(),
					'count_all_category' => $query->num_rows()
			);
		} else {
	
		}
	
		return $returnValue;
	}
}