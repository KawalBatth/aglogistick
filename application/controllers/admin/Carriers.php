<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Carriers extends CI_Controller {
		public function __construct()
        {
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->model('admin/auth_model', 'auth_model');

		}

       
		public function add_carrier()
		{
			$postdata = $this->input->post();
			$carrier['carrier_name'] = $this->input->post('carrier_name');
			
			$carrier_id = $this->auth_model->add_carrier($carrier);
		
	       redirect(base_url('admin/surcharge_list'), 'refresh');
			
			
		}
		public function add_surcharge()
		{
			$postdata = $this->input->post();
			$carrier['id'] = $this->input->post('id');
			
		$carrier_id = $this->auth_model->add_carrier($carrier);
			$surgcharge = array(
			'surcharge_name' => $this->input->post('surcharge_name'),
			'surcharge_price' => $this->input->post('surcharge_price'),
			's_description' => $this->input->post('s_description')
			);
			
			$surcharge = $this->auth_model->add_surcharge_data($surgcharge,$carrier_id);
			
			redirect(base_url('admin/surcharge_list'), 'refresh');
			
			
		}

        public function delSurcharge($id = 0){
			$this->db->delete('surcharges_list', array('id' => $id));
			$this->session->set_flashdata('msg', 'Record is Deleted Successfully!');
			redirect(base_url('admin/surcharge_list'));
		}

	}

?>	