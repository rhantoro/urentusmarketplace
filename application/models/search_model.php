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
	
	public function searchPublic($postData, $page=0) {
		
		if (isset($postData['product_input'])) {
		if ($postData['product_input'] != "COMPAR" ) {
			$orderBy = "idx desc";
			
			if (isset($postData['subcategorycode'])) {
				if ($postData['subcategorycode'] == "") {
					$searching = array (
							'filteroptioncode'=>$postData['product_input'],
							'categorycode'=>$postData['category'],
							'searchpreference'=>$postData['preference'],
							'brandcode'=>$postData['brand']
				
					);
				} else {
					$searching = array (
							'filteroptioncode'=>$postData['product_input'],
							'categorycode'=>$postData['category'],
							'subcategorycode'=>$postData['subcategorycode'],
							'searchpreference'=>$postData['preference'],
							'brandcode'=>$postData['brand']
				
					);
				}
			} else {
				$searching = array (
							'filteroptioncode'=>$postData['product_input'],
							'categorycode'=>$postData['category'],
							'searchpreference'=>$postData['preference'],
							'brandcode'=>$postData['brand']
				
					);
			}
			
			
			//$allRows = $this->db->count_all_results('productitem');			
			$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter, 
					mainphoto_original, mainphoto_middle, mainphoto_thumb, description
					')
			->from('productitem')
			->order_by($orderBy)
			->where($searching)
			->like(array('province'=>$postData['location']));
			$querys = $this->db->get();
			//echo $this->db->last_query();
			
			$num = $querys->num_rows();
			
			$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
					mainphoto_original, mainphoto_middle, mainphoto_thumb, description
					')
					->from('productitem')
					->order_by($orderBy)
					->where($searching)
					->like(array('province'=>$postData['location']))
					->limit(5,$page);
			//->where(array('filteroptioncode' => $province));
			
			$query = $this->db->get();
			//echo $this->db->last_query();
			

			$returnValue = array(
					'data' => $query->result(),
					'count_all' => $num
			);
		} else {
			
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
			if ($postData['product_input'] != "COMPAR" ) {
				$orderBy = "idx desc";
	
				if (isset($postData['subcategorycode'])) {
					if ($postData['subcategorycode'] == "") {
						$searching = array (
								'filteroptioncode'=>$postData['product_input'],
								'categorycode'=>$postData['category'],
								'searchpreference'=>$postData['preference'],
								'brandcode'=>$postData['brand'],
								'modelcode'=>$postData['model'],
								'capacity'=>$postData['capacity'],
								'yearmade'=>$postData['yearmade'],
								'hourmeter'=>$postData['hourmeter']
	
						);
					} else {
						$searching = array (
								'filteroptioncode'=>$postData['product_input'],
								'categorycode'=>$postData['category'],
								'subcategorycode'=>$postData['subcategorycode'],
								'searchpreference'=>$postData['preference'],
								'brandcode'=>$postData['brand'],
								'modelcode'=>$postData['model'],
								'capacity'=>$postData['capacity'],
								'yearmade'=>$postData['yearmade'],
								'hourmeter'=>$postData['hourmeter']	
						);
					}
				} else {
					$searching = array (
							'filteroptioncode'=>$postData['product_input'],
							'categorycode'=>$postData['category'],
							'searchpreference'=>$postData['preference'],
							'brandcode'=>$postData['brand'],
							'modelcode'=>$postData['model'],
							'capacity'=>$postData['capacity'],
							'yearmade'=>$postData['yearmade'],
							'hourmeter'=>$postData['hourmeter']
					);
				}
	
	
				//$allRows = $this->db->count_all_results('productitem');
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('productitem')
						->order_by($orderBy)
						->where($searching)
						->like(array('province'=>$postData['location']));
				$querys = $this->db->get();
				//echo $this->db->last_query();
	
				$num = $querys->num_rows();
	
				$this->db->select('idequipment as idx, equipmentname, companycode, searchpreference, categorycode, subcategorycode, brandcode, modelcode, capacity, yearmade, hourmeter,
						mainphoto_original, mainphoto_middle, mainphoto_thumb, description
						')
						->from('productitem')
						->order_by($orderBy)
						->where($searching)
						->like(array('province'=>$postData['location'],'industry'=>$postData['industry'] ))
						->limit(5,$page);
				//->where(array('filteroptioncode' => $province));
				$query = $this->db->get();
				//echo $this->db->last_query();
				$returnValue = array(
						'data' => $query->result(),
						'count_all' => $num
				);
			} else {
	
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
		} else {
			$returnValue = array(
					'data_category' => "",
					'count_all_category' => 0
			);
		}
		return $returnValue;
	}
}