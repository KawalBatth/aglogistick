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
			$billingAddress2 = $this->input->post('billingAddress2');
			$billingCity = $this->input->post('billingCity');
			$billingCountry = $this->input->post('billingCountry');
			$billingPostalCode = $this->input->post('billingPostalCode');
			$billingStateCode = $this->input->post('billingStateCode');
			$billingPhone = $this->input->post('billingPhone');
			$billingFax = $this->input->post('billingFax');
			$billingEmail = $this->input->post('billingEmail');
			$billingMobile = $this->input->post('billingMobile');
			$billingAlternatePhone = $this->input->post('billingAlternatePhone');
            $owner = $this->input->post('owner');
			$ownerPhone = $this->input->post('ownerPhone');
			$ownerEmail = $this->input->post('ownerEmail');
			$apContact = $this->input->post('apContact');
			$apPhone = $this->input->post('apPhone');
			$apEmail = $this->input->post('apEmail');
			$otherContact = $this->input->post('otherContact');
			$otherPhone = $this->input->post('otherPhone');
			$otherEmail = $this->input->post('otherEmail');
			$other2Contact = $this->input->post('other2Contact');
			$other2Phone = $this->input->post('other2Phone');
			$other2Email = $this->input->post('other2Email');
			$dataforsave = array(
				'customer_id'=>$customerCode,
				'customerName'=>$customerName,
				'contact_name'=>$contactName,
				'contact_title'=>$contactTitle,
				'address'=>$address1." ".$address2,
				'city'=>$city,
				'country'=>$country,
				'postalCode'=>$postalCode,
				'stateCode'=>$stateCode,
				'phone'=>$phone,
				'fax'=>$fax,
				'email'=>$email,
				'mobile'=>$mobile,
				'alternatePhone'=>$alternatePhone,
                'billingCustomerName'=>$billingCustomerName,
				'billingContactName'=>$billingContactName,
				'billingContactTitle'=>$billingContactTitle,
				'billingAddress1'=>$billingAddress1,
				'billingAddress2'=>$billingAddress2,
				'billingCity'=>$billingCity,
				'billingCountry'=>$billingCountry,
				'billingPostalCode'=>$billingPostalCode,
				'billingStateCode'=>$billingStateCode,
				'billingPhone'=>$billingPhone,
				'billingFax'=>$billingFax,
				'billingEmail'=>$billingEmail,
				'billingMobile'=>$billingMobile,
				'billingAlternatePhone'=>$billingAlternatePhone,
				'owner'=>$owner,
				'ownerPhone'=>$ownerPhone,
				'ownerEmail'=>$ownerEmail,
				'apContact'=>$apContact,
				'apPhone'=>$apPhone,
				'apEmail'=>$apEmail,
				'otherContact'=>$otherContact,
				'otherPhone'=>$otherPhone,
				'otherEmail'=>$otherEmail,
				'other2Contact'=>$other2Contact,
				'other2Phone'=>$other2Phone,
				'other2Email'=>$other2Email,
			);
			
			$this->auth_model->save_customer($dataforsave);			
			die;
		}

		

	
		
	
	
	}

?>	