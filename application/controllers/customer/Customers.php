<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->model('admin/auth_model', 'auth_model');
			$this->load->helper('customer'); 
		}

		public function shipment()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
				$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
				$data['carriers']=$this->auth_model->get_carrier();
				$data['services']=$this->auth_model->get_services();
				$data['view'] = 'customers/shipment';
				$this->load->view('customers/layout', $data);
		}
		else {	
			redirect('user/login');
		}
		}

		public function address_book()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/address_book';
			$this->load->view('customers/layout', $data);
			}
			else {	
				redirect('user/login');
			}
		}

		public function address_book_add()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/address_book_add';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

		public function address_book_import()
		{

			$data['view'] = 'customers/address_book_import';
			$this->load->view('customers/layout', $data);
		}

		public function address_book_export()
		{
			$data['view'] = 'admin/customers/address_book_export';
			$this->load->view('customers/layout', $data);
		}

		public function history()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/history';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

		public function quote()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/quote';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

		
		public function setting()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/setting';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

			
		public function help()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/help';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

       


		public function get_postcode()
		{
			$cityname = $this->input->post('keyword');	
			$data['address'] = $this->user_model->get_address($cityname);
			echo json_encode($data['address']);
		}
		
		public function change_password()
		{
			
            $this->load->library('form_validation');
			$this->form_validation->set_rules('oldPassword','Old Password','trim|required');
			$this->form_validation->set_rules('newPassword', 'New Password', 'trim|required');
			$this->form_validation->set_rules('confirmPassword', 'Repeat Password', 'trim|required|matches[newPassword]');
			
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('customer/settings');
				
			}else{
				// Update Data
				$data = array(
					'password' => base64_encode($this->input->post('newPassword')),
					//'update_date' => time()
				);

				// Check Old {Password}

				$result = $this->user_model->checkOldPassword($this->session->userdata('customer_user_id'),$this->input->post('oldPassword'));				
				if($result > 0 AND $result === true ){
						$this->session->set_flashdata('success_msg', 'User Password Changed.');
						$results = $this->user_model->set_message($this->session->userdata('customer_user_id'), $data);
					// updata user data
					// $results = $this->user_model->set_message($this->session->userdata('customer_user_id'), $data);
					// if($results > 0){
					// 	$this->session->set_flashdata('success_msg', 'User Password Change.');
					// 	return redirect('customer/settings');
					// }else{
					// 	$this->session->set_flashdata('error_msg', '<b>Error: </b>User Password not Change.');
					// 	return redirect('customer/settings');
					// }
					return redirect('customer/shipment');
				}
				else {
					$this->session->set_flashdata('error_msg', '<b>Error: </b>Old password is incorrect.');
						return redirect('customer/settings');
				}
			}
				
		}

	    public function get_customers()
		{
			$this->session->userdata('customer_user_id');
			$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
			$data['view'] = 'customers/shipment';
			$this->load->view('customer/layout', $data);
		}



		public function get_calculate()
		{
			$weight = $this->input->post('weight');
			$length = $this->input->post('length');
			$dnh = $this->input->post('dnh');
			$dnw = $this->input->post('dnw');
			$totalweight = array_sum($weight);
			$sender_city = $this->input->post('sender_city');
			$sender_postcode = $this->input->post('sender_postcode');
			$sender_state =  $this->input->post('sender_state');
			$rc_postcode= $this->input->post('rc_postcode');
			$rc_statecode= $this->input->post('stateCode');
			$rcv_city= $this->input->post('rcv_city');
			$serviceId= $this->input->post('serviceId');
			$service_type_Id= $this->input->post('service_type_Id');
			$totalweight= $this->input->post('total_weight');
			$getsenderzone =  $this->user_model->get_sender_zone($sender_city,$sender_postcode);
			$get_rcv_zone =  $this->user_model->get_rcv_zone($rcv_city,$rc_postcode);
			$get_surcharge =  $this->user_model->get_surchargebyid($serviceId);
			$fixed_price =  $this->user_model->get_fix_rate($service_type_Id);

			$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone);
			$result['charges'] = $get_surcharge;
			$result['base_charge']= $get_base_rate;
			$result['totalweight']= $totalweight;
			echo json_encode($result);
			
		}

		
		 public function booking()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			
			$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
			$str = $this->user_model->gettempdata($this->session->userdata('customer_user_id'));
			$returndata = array();
    		$strArray = explode("&", $str);
    		$i = 0;
    		foreach ($strArray as $item) {
        		$array = explode("=", $item);
        		$returndata[$array[0]] = $array[1];
    		}
			$sender_city = $returndata['shipmentPage.senderAddress.city'];
			$sender_state =  $returndata['shipmentPage.senderAddress.state'];
			$sender_postcode =  $returndata['shipmentPage.senderAddress.postalCode'];
			$rc_postcode= $returndata['shipmentPage.receiverAddress.postalCode'];
			$rc_statecode= $returndata['shipmentPage.receiverAddress.state'];
			$rcv_city= $returndata['shipmentPage.receiverAddress.city'];
			$service_type_Id = $returndata['shipmentPage.shipmentTypeId'];
    		$get_surcharge =  $this->user_model->get_surchargebyid($returndata['shipmentPage.serviceId']);
    		$getsenderzone =  $this->user_model->get_sender_zone($sender_city,$sender_postcode);
			$get_rcv_zone =  $this->user_model->get_rcv_zone($rcv_city,$rc_postcode);
			$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone);
    		$fixed_price =  $this->user_model->get_fix_rate($service_type_Id);
    		$data['result'] = $returndata;
    		$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone);
    		$data['surcharge'] = array('base_charge' =>$get_base_rate,'fixed_price'=>$fixed_price,'charges'=>$get_surcharge);
    		$data['view'] = 'customers/booking';
			$this->load->view('customers/layout', $data);
			}
		else {	redirect('user/login');}
		}

		public function continuewbooking()
		{
			$str = urldecode($this->input->post('data'));
			$this->user_model->savetempdata($str,$this->session->userdata('customer_user_id'));
			

		}

		public function add_shipment()
		{

			$customerCode = $this->input->post('customerCode');
			$customerCodeexists = $this->auth_model->check_customer($customerCode);
			$senderCompanyName = $this->input->post('companyName');
			$senderAddressPhone = $this->input->post('phone');
			$senderAddressContact = $this->input->post('contactName');
			$senderAddressEmail = $this->input->post('email');
			$senderAddressCountry = $this->input->post('country');
			$senderAddress = $this->input->post('address');
			$senderaddress2 = $this->input->post('address2');
			$senderAddress3 = $this->input->post('.address3');
			$isSaveSenderAddressBook = $this->input->post('isSaveRecipientAddressBook');
			$residentialPickup = $this->input->post('residentialPickup');
			$senderAlternateUserName = $this->input->post('alternateUserName');
			$senderAddressCity = $this->input->post('city');
			$senderPostalCode = $this->input->post('postalCode');
			$senderState = $this->input->post('state');
			$receivercompanyName = $this->input->post('receivercompanyName');
			$receiverPhone = $this->input->post('receiverphone');
			$receivercontactName = $this->input->post('receivercontactName');
			$receiverEmail = $this->input->post('receiveremail');
			$receiverCountry = $this->input->post('receivercountry');
			$receiverAddress = $this->input->post('receiverAddress');
			$receiverAddress2 = $this->input->post('receiverAddress2');
			$receiverAddress3 = $this->input->post('receiverAddress3');
			$isSaveRecipientAddressBook = $this->input->post('isSaveRecipientAddressBook');
			$residentialDelivery = $this->input->post('residentialDelivery');
			$receiverAddressCity = $this->input->post('receivercity');
			$receiverpostalCode = $this->input->post('receiverpostalCode');
			$receiverState = $this->input->post('receiverstate');
			$ShippingDate = $this->input->post('shipping_date');
			$serviceId = $this->input->post('serviceId');
            $shipmentTypeId = $this->input->post('shipmentTypeId');
			$packageId = $this->input->post('packageId');
			$contentType = $this->input->post('contentType');
			$weightUnit = $this->input->post('weightUnit');
			$dimensionUnit = $this->input->post('dimensionUnit');
			$currencyCode = $this->input->post('currencyCode');
			$weight = $this->input->post('weight');
			$dimensionL = $this->input->post('dimensionL1');
			$dimensionW = $this->input->post('dimensionW1');
			$dimensionH = $this->input->post('dimensionH1');
			$quantity = $this->input->post('quantity1');
			$addCons = $this->input->post('addcons');
			$shipmentauthority = $this->input->post('authority');	
			
			$saveData = array(
				'customer_id'=>$customerCode,
				'sender_company'=>$senderCompanyName,
				'sender_phone'=>$senderAddressPhone,
				'sender_contact_name'=>$senderAddressContact,
				'sender_email'=>$senderAddressEmail,
				'sender_country'=>$senderAddressCountry,
				'sender_address'=>$senderAddress ." ".$$senderaddress2 ." ".$senderAddress3,
				'sender_save_address_book'=>$isSaveSenderAddressBook,
			    'sender_residence'=>$residentialPickup,
				'sender_alt_name'=>$senderAlternateUserName,
				'sender_city'=>$senderAddressCity,
				'sender_postal_code'=>$senderPostalCode,
				'sender_state'=>$senderState,
				'receiver_company'=>$receivercompanyName,
				'receiver_phone'=>$receiverPhone,
                'receiver_email'=>$receiverEmail,
				'receiver_country'=>$receiverCountry,
				'receiver_address'=>$receiverAddress,
				'receiver_address1'=>$receiverAddress2,
				'receiver_address2'=>$receiverAddress3,
				'receiver_save_address'=>$isSaveRecipientAddressBook,
				'receiver_residence'=>$residentialDelivery,
				'receiver_city'=>$receiverAddressCity,
				'receiver_postal_code'=>$receiverpostalCode,
				'receiver_state'=>$receiverState,
				'shipping_date'=>$ShippingDate,
				'service_type'=>$serviceId,
				'carrier_name'=>$shipmentTypeId,
				'package_type'=>$packageId,
				'contents'=>$contentType,
				'weight_unit'=>$weightUnit,
				'dimension_unit'=>$dimensionUnit,
				'currency'=>$currencyCode,
				'weight'=>$weight,
				'length'=>$dimensionL,
				'width'=>$dimensionW,
				'height'=>$dimensionH,
				'quantity'=>$quantity,
				'dangerous_goods'=>$addCons,
				'authorized_to_leave'=>$shipmentauthority

			);

				$this->user_model->save_shipment($saveData);
			}

	}

?>	