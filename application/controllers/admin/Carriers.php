<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Carriers extends CI_Controller {
		public function __construct()
        {
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->model('admin/auth_model', 'auth_model');

		}

        public function carrier_list()
		{
			$data['view'] = 'admin/carriers/carrier_list';
			$this->load->view('admin/layout', $data);
		}
		public function add_surcharge()
		{
			$postdata = $this->input->post();
			$carrier['carrier_name'] = $this->input->post('carrier_name');
			
			$carrier_id = $this->auth_model->add_carrier($carrier);
			$surgcharge = array(
			'surcharge_name' => $this->input->post('surcharge_name'),
			'surcharge_price' => $this->input->post('surcharge_price'),
			's_description' => $this->input->post('s_description')
			);
			
			$surcharge = $this->auth_model->add_surcharge_data($surgcharge,$carrier_id);
			
			redirect(base_url('admin/surcharge_list'), 'refresh');
			
			
		}

        public function country_list()
		{
			$data['view'] = 'admin/carriers/country_list';
			$this->load->view('admin/layout', $data);
		}

	}

?>	