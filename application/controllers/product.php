<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->library('cart');
		$this->load->model('product_model');
		$this->load->helper('security');
		$this->load->helper('download');
		$this->load->helper('url');
	}
	
	public function show_product($id_product, $product_name){
		$productCode = decode_url($id_product);
		$prodCode = explode("_", $productCode);				
		
		$result = $this->product_model->searchProductById($prodCode[0],$prodCode[1]);
		$resultLocation = $this->product_model->searchLocationById($prodCode[0],$prodCode[1]);
		$resultPhoto = $this->product_model->searchPhotoById($prodCode[0],$prodCode[1]);
				
		$output = array(
				"aaData" => $result['data'],
				"aaDataLocation" => $resultLocation['data'],
				"aaDataPhoto" => $resultPhoto['data'],
				"id_product" => $id_product
		);
		
		$this->load->view('templates/header');
		$this->load->view('product/productdetail',$output);
		$this->load->view('templates/footer');
	}
	
	public function shopping_cart() {
		//print_r($this->input->post());
		//print_r($this->session->userdata);
		
		if ($this->session->userdata('product') != null) {
			
			$x=0;
			foreach($this->session->userdata('product') as $cartItems){
				$addToCarts[$x] = array(
					'product_name'=>$cartItems['product_name'],
					'id_product'=>$cartItems['id_product'],
					'number_item'=>$cartItems['number_item'],
					'location'=>$cartItems['location'],
					'start_date'=>$cartItems['start_date'],
					'end_date'=>$cartItems['end_date'],
					'special_note'=>$cartItems['special_note']
				); 
				
				$x++;
			}

			//echo $x;
			$addToCarts[$x] = $this->input->post();
			$this->session->set_userdata('product',$addToCarts);
		} else {
			$addToCart[0] = $this->input->post();
			$this->session->set_userdata('product',$addToCart);
		}		
		
		//$this->session->sess_destroy();
		
		$this->load->view('templates/header');
		$this->load->view('product/shoppingcart');
		$this->load->view('templates/footer');
	}
	
	public function notification() {
		//print_r($this->session->userdata('product'));
		
		$result = $this->product_model->submitInquiry();
		
		$this->load->view('templates/header');
		$this->load->view('product/shoppingcart', $result);
		$this->load->view('templates/footer');
	}
}