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
		$this->db->trans_start();
		//print_r($this->session->userdata);
		$result['message'] = "false";
		if ($this->session->userdata('loggedin')) {
			//echo "1";
			$inquiry = array(
							'companycode' => $this->session->userdata('companycode'),
							'companyname' => $this->session->userdata('company'),
							'companyorderno' => '',
							'statusinquiry' => 'OPEN',
							'freerequest' => '',
							'createdby' => 'Admin',
							'createdip' => $_SERVER['REMOTE_ADDR'],
							'createddate' =>  date('Y-m-d H:i:s')
			);
					
			$this->db->insert('inquiry', $inquiry);
			$inquiry = $this->db->insert_id();
			
			foreach($this->session->userdata('product') as $cartItems){
				$productCode = decode_url($cartItems['id_product']);
				$prodCode = explode("_", $productCode);
				
				$itemInquiry = array(
					'idinquiry'=>$inquiry,
					'idproductinquiry'=>$prodCode[1],
					'numberofitem'=>$cartItems['number_item'],
					'location'=>$cartItems['location'],
					'startdateuse'=>$cartItems['start_date'],
					'enddateuse'=>$cartItems['end_date'],
					'specialnoterequest'=>$cartItems['special_note']
					
				); 
				$this->db->insert('iteminquiry', $itemInquiry);			
			
				$query = $this->db->query('INSERT inquiryproduct (idinquiry, productname, companycode, filteroptioncode, searchpreference, industry, categorycode, subcategorycode,
						attachmenttoolcode, brandcode, modelcode, capacity, yearmade, hourmeter, specification, description, price, region, province, city
						)
						SELECT "'.$inquiry.'", equipmentname, companycode, filteroptioncode, searchpreference, industry, categorycode, subcategorycode, attachmenttoolcode, brandcode, modelcode, 
						capacity, yearmade, hourmeter, specification, description, price, region, province, city 
						FROM productitem
						WHERE idequipment = "'.$prodCode[1].'" ');
				
			}
			
			$this->db->trans_complete();
			
			if ($this->db->trans_status() === FALSE) {
				$result['message'] = 'Error while saving data. Please try again later.';
			} else {
				$result['message'] = '';
			}
			
		}
		
		return $result;
		
	}
}