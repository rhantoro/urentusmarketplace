<?php
class Product_model extends CI_Model {

	private $tableName = 'brand';
	public $fields = array(
			'brandcode',
			'brandname'
	);
	
	public function __construct() {
		parent::__construct();
	
		$this->load->database();
	}
	
	public function searchProductById($filterOptionCode=null, $idProduct) {
		
		if ($filterOptionCode == "COMPAR") {
			
			
		} else {			
			
			$this->db->select('equipmentname, company.companycode, company.companyname, searchpreference, categorycode, subcategorycode, attachmenttoolcode, brandcode, modelcode, capacity, yearmade, 
					hourmeter, specification, description, price, companyaddress, website, companyemailaddress, companyofficephone ')
			->from('productitem')
			->join('company','productitem.companycode = company.companycode','inner')
			->where(array('idequipment' => $idProduct));
			
			$query = $this->db->get();
			
			$returnValue = array(
					'data' => $query->result()					
			);
		}
		
	
		return $returnValue;
	}
	
	public function searchLocationById($filterOptionCode=null, $idProduct) {
	
		if ($filterOptionCode == "COMPAR") {
	
	
		} else {	
			$this->db->select('idproductlocation, region, province, city, stock')
					->from('productlocation')					
					->where(array('idequipment' => $idProduct));
	
			$query = $this->db->get();
	
			$returnValue = array(
					'data' => $query->result()
			);
		}
	
	
		return $returnValue;
	}
	
	public function searchPhotoById($filterOptionCode=null, $idProduct) {
	
		if ($filterOptionCode == "COMPAR") {
	
	
		} else {
			$this->db->select('idequipment, originalfilename, thumbnailfilename', 'middlefilename')
			->from('productphoto')
			->where(array('idequipment' => $idProduct));
	
			$query = $this->db->get();
	
			$returnValue = array(
					'data' => $query->result()
			);
		}
	
	
		return $returnValue;
	}

	public function submitInquiry() {
		
	}
}