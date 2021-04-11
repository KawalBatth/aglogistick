<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->model('admin/auth_model', 'auth_model');

		}

		public function customer_search()
		{
			$data['view'] = 'admin/customers/customer_search';
			$this->load->view('admin/layout', $data);
		}

        public function customer_list()
		{
			$data['all_users'] =  $this->user_model->get_all_users();
			$data['view'] = 'admin/customers/customer_list';
			$this->load->view('admin/layout', $data);
		}

		public function customer_manage()
		{
			$data['view'] = 'admin/customers/customer_manage';
			$this->load->view('admin/layout', $data);
		}

		
		public function customer_add()
		{
			$data['customer_id'] =$this->auth_model->get_customer_id();
			$data['view'] = 'admin/customers/customer_add';
			$this->load->view('admin/layout', $data);
		}
		public function add_customer()
		{
			$customerCode = $this->input->post('customerCode');
			$customerName = $this->input->post('customerName');
			$contactName = $this->input->post('contactName');
			$contactTitle = $this->input->post('contactTitle');
			$address1 = $this->input->post('address1');
			$address2 = $this->input->post('address2');
			$city = $this->input->post('city');
			$country = $this->input->post('country');
			$postalCode = $this->input->post('postalCode');
			$stateCode = $this->input->post('stateCode');
			$phone = $this->input->post('phone');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			$mobile = $this->input->post('mobile');
			$alternatePhone = $this->input->post('alternatePhone');
			$billingCustomerName = $this->input->post('billingCustomerName');
			$billingContactName = $this->input->post('billingContactName');
			$billingContactTitle = $this->input->post('billingContactTitle');
			$billingAddress1 = $this->input->post('billingAddress1');
			$dataforsave = array(
				'customer_id'=>$customerCode,
				'customerName'=>$customerName,
				'contact_name'=>$contactName,
				'contact_title'=>$contactTitle,
				'address'=>$address1." ".$address2,
				'city'=>$city,
				'country'=>$country
			);
			
			$this->auth_model->save_customer($dataforsave);			
			die;
		}

		

	
		
	
	
	}

?>	