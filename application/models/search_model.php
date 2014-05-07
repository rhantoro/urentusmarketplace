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
		//$this->config->load('row_per_page');
	}
	
	public function searchPublic($postData, $page=0) {
		
		if (isset($postData['product_input'])) {
			if ((isset($postData['product_input'])) and $postData['product_input'] <> "") $searching['filteroptioncode'] = $postData['product_input'];
			if ((isset($postData['preference'])) and $postData['preference'] <> "") $searching['searchpreference'] = $postData['preference'];
			if ((isset($postData['category'])) and $postData['category'] <> "") $searching['categorycode'] = $postData['category'];
			if ((isset($postData['brand'])) and $postData['brand'] <> "") $searching['brandcode'] = $postData['brand'];
			
			((isset($postData['location'])) and $postData['location'] <> "") ? $searchMore['province'] = $postData['location'] : $searchMore['province'] = "";
			
			if ($postData['product_input'] != "COMPAR" ) {
				$orderBy = "idx desc";			
			
				//$allRows = $this->db->count_all_results('productitem');			
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter, 
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
				->from('productitem')
				->order_by($orderBy)
				->where($searching)
				->like($searchMore);
				$querys = $this->db->get();
				$num = $querys->num_rows();
				//echo $this->db->last_query();			
						
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('productitem')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore)
						->limit($this->config->item('row_per_page'),$page);
						//->where(array('filteroptioncode' => $province));
				
				$query = $this->db->get();			
				$returnValue = array(
						'data' => $query->result(),
						'count_all' => $num
				);
			} else {			
				$orderBy = "idx desc";
				$this->db->select('idcomponent as idx, componentname as equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('componentpart')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore);
				$querys = $this->db->get();			
				$num = $querys->num_rows();
				
				$this->db->select('idcomponent as idx, componentname as equipmentname, componentnumber, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('componentpart')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore)
						->limit($this->config->item('row_per_page'),$page);
						//->where(array('filteroptioncode' => $province));
				
				$query = $this->db->get();
				//echo $this->db->last_query();
				$returnValue = array(
						'data' => $query->result(),
						'count_all' => $num
				);				
			}	
		} else {
			$returnValue = array(
					'data' => "",
					'count_all' => 0
			);
		}
		return $returnValue;
	}
	
	public function searchMember($postData, $page=0) {
	
		if (isset($postData['product_input'])) {
			if ((isset($postData['industry'])) and $postData['industry'] <> "") $searching['industry'] = $postData['industry'];
			if ((isset($postData['category'])) and $postData['category'] <> "") $searching['categorycode'] = $postData['category'];
			if ((isset($postData['subcategorycode'])) and $postData['subcategorycode'] <> "") $searching['subcategorycode'] = $postData['subcategorycode'];
			if ((isset($postData['attachment'])) and $postData['attachment'] <> "") $searching['attachmenttoolcode'] = $postData['attachment'];
			if ((isset($postData['brand'])) and $postData['brand'] <> "") $searching['brandcode'] = $postData['brand'];
			if ((isset($postData['model'])) and $postData['model'] <> "") $searching['modelcode'] = $postData['model'];
			if ((isset($postData['capacity'])) and $postData['capacity'] <> "") $searching['capacity'] = $postData['capacity'];
			if ((isset($postData['yearmade'])) and $postData['yearmade'] <> "") $searching['yearmade'] = $postData['yearmade'];
			if ((isset($postData['hourmeter'])) and $postData['hourmeter'] <> "") $searching['hourmeter'] = $postData['hourmeter'];
			
			((isset($postData['location'])) and $postData['location'] <> "") ? $searchMore['province'] = $postData['location'] : $searchMore['province'] = "";
			((isset($postData['industry'])) and $postData['industry'] <> "") ? $searchMore['industry'] = $postData['industry'] : $searchMore['industry'] = "";
			
			if ($postData['product_input'] != "COMPAR" ) {
				$orderBy = "idx desc";				
					
				//$allRows = $this->db->count_all_results('productitem');
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('productitem')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore);
				$querys = $this->db->get();
				//echo $this->db->last_query();
	
				$num = $querys->num_rows();
	
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('productitem')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore)
						->limit($this->config->item('row_per_page'),$page);
						//->where(array('filteroptioncode' => $province));
				$query = $this->db->get();
				//echo $this->db->last_query();
				$returnValue = array(
						'data' => $query->result(),
						'count_all' => $num
				);
			} else {
				$orderBy = "idx desc";
				$this->db->select('idcomponent as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('componentpart')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore);
				$querys = $this->db->get();
				$num = $querys->num_rows();
				
				$this->db->select('idcomponent as idx, componentname as equipmentname, componentnumber, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('componentpart')
						->order_by($orderBy)
						->where($searching)
						->like($searchMore)
						->limit($this->config->item('row_per_page'),$page);
				//->where(array('filteroptioncode' => $province));
				
				$query = $this->db->get();
				//echo $this->db->last_query();
				$returnValue = array(
						'data' => $query->result(),
						'count_all' => $num
				);
				
			}
		} else {
			$returnValue = array(
					'data' => "",
					'count_all' => 0
			);
		}
		return $returnValue;
	}
	
	public function searchCategory($postData) {
	
		if (isset($postData['product_input'])) {
			if ((isset($postData['category'])) and $postData['category'] <> "") $searching['categorycode'] = $postData['category'];
			
			if ($postData['product_input'] != "COMPAR" ) {
				$orderBy = "categorycode,subcategorycode asc";		
				//$allRows = $this->db->count_all_results('productitem');
		
				$this->db->select('categorycode, subcategorycode')
				->from('subcategory')
				->order_by($orderBy)
				->like($searching);
				//->where(array('filteroptioncode' => $province));
		
				$query = $this->db->get();
		
				//echo $this->db->last_query();
				$returnValue = array(
						'data_category' => $query->result(),
						'count_all_category' => $query->num_rows()
				);
			} else {
				$orderBy = "categorycode,subcategorycode asc";
				//$allRows = $this->db->count_all_results('productitem');
				
				$this->db->select('categorycode, subcategorycode')
				->from('subcategory')
				->order_by($orderBy)
				->like($searching);
				//->where(array('filteroptioncode' => $province));
				
				$query = $this->db->get();
				
				//echo $this->db->last_query();
				$returnValue = array(
						'data_category' => $query->result(),
						'count_all_category' => $query->num_rows()
				);
			}
		} else {
			$returnValue = array(
					'data_category' => "",
					'count_all_category' => 0
			);
		}
		return $returnValue;
	}
}