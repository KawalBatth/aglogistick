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
			$data['data']=$this->auth_model->get_customer();
			$data['view'] = 'admin/customers/customer_manage';
			$this->load->view('admin/layout', $data);
		}

		/*public function customer_manage()
		{
			$data['view'] = 'admin/customers/customer_manage';
			$this->load->view('admin/layout', $data);
		}*/

		
		public function customer_add()
		{
			$data['customer_id'] =$this->auth_model->get_customer_id();
			$data['customers'] =$this->auth_model->get_customer();
			
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
				'postal_code'=>$postalCode,
				'state_code'=>$stateCode,
				'phone'=>$phone,
				'fax'=>$fax,
				'email'=>$email,
				'mobile'=>$mobile,
				'alt_contact'=>$alternatePhone,
                'billing_customer_name'=>$billingCustomerName,
				'billing_contact_name'=>$billingContactName,
				'billing_contact_title'=>$billingContactTitle,
				'billing_address'=>$billingAddress1,
				'billing_address2'=>$billingAddress2,
				'billing_city'=>$billingCity,
				'billing_country'=>$billingCountry,
				'billing_postal_code'=>$billingPostalCode,
				'billing_state_code'=>$billingStateCode,
				'billing_phone'=>$billingPhone,
				'billing_fax'=>$billingFax,
				'billing_email'=>$billingEmail,
				'billing_mobile'=>$billingMobile,
				'billing_alt_contact'=>$billingAlternatePhone,
				'owner'=>$owner,
				'other_phone'=>$ownerPhone,
				'other_email'=>$ownerEmail,
				'other_contact'=>$apContact,
				'other_phone1'=>$apPhone,
				'other_email1'=>$apEmail,
				'other_contact1'=>$otherContact,
				'other_phone2'=>$otherPhone,
				'other_email2'=>$otherEmail,
				'other_contact2'=>$other2Contact,
				'other_phone3'=>$other2Phone,
				'other_email3'=>$other2Email,
			);
			
			$this->auth_model->save_customer($dataforsave);			
			
		}

		

	
		
	
	
	}

?>	