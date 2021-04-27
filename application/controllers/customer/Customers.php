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

		public function save_quote()
		{
			
			$quote_date= $this->input->post('quote_date');	
			$customer= $this->input->post('customer');	
			$customer_name= $this->input->post('customer_name');
			$qoute_jobnumber= $this->input->post('qoute_jobnumber');			
			$sender_subrub = $this->input->post('sender_subrub');
			$sender_postcode = $this->input->post('sender_postcode');
			$reciver_subrub= $this->input->post('reciver_subrub');
			$reciver_postcode= $this->input->post('reciver_postcode');
			$shipment_type= $this->input->post('shipment_type');
			$package_type= $this->input->post('package_type');
			$total_amount =$this->input->post('total_amount');

			$array = array(
				//'webshipId' =>$webshipId,
				'quote_date' =>$quote_date,
				'customer'=>$customer,
				'customer_name'=>$customer_name,
				'quote_number'=>$qoute_jobnumber,
				'sender_suburb'=>$sender_subrub,
				'sender_postcode'=>$sender_postcode,
				'receiver_suburb'=>$reciver_subrub,
				'receiver_postcode' =>$reciver_postcode,
				'shipment_type'=>$shipment_type,
				'package_type'=>$package_type,
				'total_amount'=>$total_amount,
				'quote_date' => date('Y-m-d')
			
			 );
			$this->user_model->add_quote($array);
			$data['view'] = 'customers/shipment';
			$this->load->view('customers/layout', $data);
		}

		public function address_book()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['address_book']  = $this->user_model->get_address_book();
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
			$data['address_book']  = $this->user_model->get_address_book();
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
		    $data['quote']  = $this->user_model->get_quote();
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
			$data['view'] = 'customer/shipment';
			$this->load->view('customer/layout', $data);
		}



		public function get_calculate()
		{
			
			
			$sender_city = $this->input->post('sender_city');
			$sender_postcode = $this->input->post('sender_postcode');
			$sender_state =  $this->input->post('sender_state');
			$rc_postcode= $this->input->post('rc_postcode');
			$rc_statecode= $this->input->post('stateCode');
			$rcv_city= $this->input->post('rcv_city');
			$serviceId= $this->input->post('serviceId');
			$service_type_Id= $this->input->post('service_type_Id');
			$shipment_type= $this->input->post('shipment_type');
			$totalweight= $this->input->post('total_weight');
			$getsenderzone =  $this->user_model->get_sender_zone($sender_city,$sender_postcode);
			$get_rcv_zone =  $this->user_model->get_rcv_zone($rcv_city,$rc_postcode);
			$isdange = $this->input->post('isdangerous');
			
			$get_surcharge =  $this->user_model->get_surchargebyid($serviceId,$isdange);
			$fixed_price =  $this->user_model->get_fix_rate($service_type_Id);
			if(empty($fixed_price))
			{
				$base_charge =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone,$service_type_Id);	
				$result['base_charge']= $base_charge;
			}
			else {
				$result['fixed_price']= $fixed_price;
			}
			
			$result['charges'] = $get_surcharge;
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
			$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone,$service_type_Id);
    		$fixed_price =  $this->user_model->get_fix_rate($service_type_Id);
    		$data['result'] = $returndata;
    		$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone,$service_type_Id);
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
		

		public function delAddress($id = 0){
			$this->db->delete('address_book', array('id' => $id));
			//$this->session->set_flashdata('msg', 'Record is Deleted Successfully!');
			redirect(base_url('customers/address_book'), 'refresh');
			
		}
		/*public function continue_booking_new()
		{
			$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
			$str = urldecode($this->input->post('data'));
			$returndata = array();
    		$strArray = explode("&", $str);
    		$i = 0;
    		foreach ($strArray as $item) {
        		$array = explode("=", $item);
        		$returndata[$array[0]] = $array[1];
    		}

	$senderCompany = $returndata['companyName'];
    $senderPhone = $returndata['phone']; 
    $senderContact = $returndata['contactName']; 
    $senderEmail = $returndata['email'];
    $senderCountry = $returndata['country'];  
    $senderAddress = $returndata['address'];  
    $senderaddress2 = $returndata['address2'];  
    $senderAddress3 = $returndata['address3']; 
	$isSaveSenderAddressBook = $returndata['isSaveSenderAddressBook']; 
	$residentialPickup = $returndata['residentialPickup']; 
    $senderAlternateUserName = $returndata['alternateUserName'];  
    $senderAddressCity = $returndata['city'];  
    $senderPostalCode = $returndata['postalCode'];  
    $senderState = $returndata['state'];  
	$receivercompanyName = $returndata['receiverCompanyName'];  
	$receiverPhone = $returndata['receiverphone'];  
    $receivercontactName = $returndata['receivercontactName'];  
    $receiverEmail = $returndata['receiveremail'];  
	$receiverCountry  = $returndata['receivercountry']; 
    $receiverAddress  = $returndata['receiverAddress']; 
	$receiverAddress2  = $returndata['receiverAddress2'];  
    $receiverAddress3  = $returndata['receiverAddress3'];  
	$isSaveRecipientAddressBook = $returndata['isSaveRecipientAddressBook'];
	$residentialDelivery = $returndata['residentialDelivery']; 
    $receiverAddressCity  = $returndata['receivercity'];  
	$receiverpostalCode = $returndata['receiverpostalCode'];  
    $receiverState = $returndata['receiverstate'];  
	$ShippingDate = $returndata['shipping_date'];
	$serviceId = $returndata['serviceId'];  
    $shipmentTypeId = $returndata['shipmentTypeId']; 
    $packageId = $returndata['packageId']; 
    $contentType = $returndata['contentType'];  
    $weightUnit = $returndata['weightUnit'];  
    $dimensionUnit = $returndata['dimensionUnit'];  
    $currencyCode = $returndata['currencyCode'];  
    //$weight = $returndata['shipmentPage.pieces.weight'];  
    $weight = $returndata['total_weight'];
	$dimensionL = $returndata['dimensionL1'];  
    $dimensionW = $returndata['dimensionW1'];  
    $dimensionH = $returndata['dimensionH1'];
    //$returndata['get_volume'];  
	//$quantity = $returndata['shipmentPage.pieces.quantity1'];  
	$quantity = $returndata['final_total']; 
	$isDangerous = $returndata['isdangerous']; 
    //$returndata['shipmentPage.isAddPiece'];  
	//$addCons = $returndata['value'];  
    $addConName = $returndata['dangerName'];  
    $addConCode = $returndata['dangerCode'];  
    $addConDetailName = $returndata['dangerDetailName'];  
    $addConDetailCode = $returndata['dangerDetailCode'];  
    $addConValue = $ $returndata['dangerNumber'];  
    $packName = $returndata['packDetailName'];  
    $packCode = $returndata['packDetailCode'];  
    $packValue = $returndata['packValue'];  
    $danMsg = $returndata['packName'];  
    $danMsgCode = $returndata['packCode'];  
    $danMsgValue = $returndata['packMsg'];  
	$authorityValue = $returndata['authorityValue']; 
    $authorityName = $returndata['authorityName']; 
    $authorityCode = $returndata['authorityCode']; 
    $authorityLeave = $returndata['authorityQuestion'];  
    $leaveName = $returndata['authorityCode'];  
    $leaveValue = $returndata['authorityAnswer']; 
  

         $shipData = array(
				//'customer_id'=>$customerCode,
				'sender_company'=>$senderCompany,
				'sender_phone'=>$senderPhone,
				'sender_contact_name'=>$senderContact,
				'sender_email'=>$senderEmail,
				'sender_country'=>$senderCountry,
				'sender_address'=>$senderAddress ." ".$$senderaddress2 ." ".$senderAddress3,
				'sender_save_address_book'=>$isSaveSenderAddressBook,
			    'sender_residence'=>$residentialPickup,
				'sender_alt_name'=>$senderAlternateUserName,
				'sender_city'=>$senderAddressCity,
				'sender_postal_code'=>$senderPostalCode,
				'sender_state'=>$senderState,
				'receiver_company'=>$receivercompanyName,
				'receiver_phone'=>$receiverPhone,
				'receiver_contact_name'=>$receivercontactName, 
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
				'dangerous_goods'=>$isDangerous,
				'addConName'=>$addConName, 
				'addConCode'=>$addConCode,
				'addConDetailName'=>$addConDetailName, 
				'addConDetailCode'=>$addConDetailCode,
				'addConValue'=>$addConValue, 
				'packName'=>$packName, 
				'packCode'=>$packCode, 
				'packValue'=>$packValue, 
				'danMsg'=>$danMsg,
				'danMsgCode'=>$danMsgCode, 
				'danMsgValue'=>$danMsgValue, 
				'leaveValue'=>$authorityValue,
				'authorityName'=>$authorityName, 
				'authorityCode'=>$authorityCode, 
				'authorityLeave'=>$authorityLeave, 
				'leaveName'=>$leaveName, 
				'leavemsg'=>$leaveValue,
				

			);
			//$this->user_model->save_shipment($str,$this->session->userdata('customer_user_id'));
			$this->auth_model->save_shipment($shipData);
    		//print_r($returndata);
    			
		}*/

		

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


			public function add_address_book()
			{
				
				$addressContactName= $this->input->post('addressContactName');	
				$addressCompanyName= $this->input->post('addressCompanyName');	
				$addressAddress1= $this->input->post('addressAddress1');
				$addressAddress2= $this->input->post('addressAddress2');			
				$addressCity = $this->input->post('addressCity');
				$addressState = $this->input->post('addressState');
				$addressPostalCode= $this->input->post('addressPostalCode');
				$addressCountry= $this->input->post('addressCountry');
				$addressPhone= $this->input->post('addressPhone');
				$addressEmail= $this->input->post('addressEmail');
				$addressDepartment =$this->input->post('addressDepartment');
				$addressFax= $this->input->post('addressFax');
				$addressDefaultServiceType= $this->input->post('addressDefaultServiceType');
				$addressDefaultPackageType= $this->input->post('addressDefaultPackageType');
				$addressDefaultBillingType =$this->input->post('addressDefaultBillingType');
				$addressAccountNumber =$this->input->post('addressAccountNumber');
				$isResidential =$this->input->post('isResidential');
	
				$array = array(
					'contact_name' =>$addressContactName,
					'company_name'=>$addressCompanyName,
					'address'=>$addressAddress1,
					'address1'=>$addressAddress2,
					'city'=>$addressCity,
					'state'=>$addressState,
					'postcode'=>$addressPostalCode,
					'phone'=>$addressPhone,
					'email' =>$addressEmail,
					'country' =>$addressCountry,
					'department'=>$addressDepartment,
					'fax'=>$addressFax,
					'default_service_type'=>$addressDefaultServiceType,
					'default_package_type'=>$addressDefaultPackageType,
					'deafult_billing_type'=>$addressDefaultBillingType,
					'account_number'=>$addressAccountNumber,
					'residential_address'=>$isResidential,
					
			  );
				$this->user_model->add_address_book($array);
				$data['view'] = 'customers/quote';
				$this->load->view('customers/layout', $data);
			}

	}

?>	