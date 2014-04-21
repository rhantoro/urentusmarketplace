<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Location extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('location_model');
		$this->load->helper('security');
		$this->load->helper('download');
	}
	
	public function getallprovince() {
		$result = $this->location_model->getAllProvince();
		$output['message'] = '';
		if ($result['count_all'] == 0) {
			$output['message'] = __("No data found");
		}
		$output['data'] = $result['data'];
		
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
	
	
}
