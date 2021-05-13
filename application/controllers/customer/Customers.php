<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller {
		public function __construct(){
			parent::__construct();
			//$this->load->database();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->model('admin/auth_model', 'auth_model');
			$this->load->helper('customer'); 
		}

		public function shipment()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
				$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
				$data['addres']="";
				if(isset($_GET['id'])){
					$data['addres']=$this->user_model->get_address_book_by_id($_GET['id']);
				}
				$data['quotes']="";
				if(isset($_GET['quote_id'])){
					$data['quotes']=$this->user_model->get_quote_by_id($_GET['quote_id']);
				}
				$data['carriers']=$this->auth_model->get_carrier();
				$data['services']=$this->auth_model->get_services();

				//$data['country']=$this->user_model->get_country();

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
			$receiver_city= $this->input->post('receiver_city');

			$sender_companyName= $this->input->post('sender_companyName');
			$sender_contactName= $this->input->post('sender_contactName');			
			$sender_phone = $this->input->post('sender_phone');
			$sender_address = $this->input->post('sender_address');
			$sender_country= $this->input->post('sender_country');
			$surcharge_amount= $this->input->post('surcharge_amount');

			$reciver_postcode= $this->input->post('reciver_postcode');
			$shipment_type= $this->input->post('shipment_type');
			$package_type= $this->input->post('package_type');
			$total_amount =$this->input->post('total_amount');
			$final_amount =$this->input->post('final_amount');
			$get_volume_input =$this->input->post('get_volume_input');

			$rcv_state= $this->input->post('rcv_state');	
			$rcv_phone= $this->input->post('rcv_phone');	
			$rcv_company= $this->input->post('rcv_company');
			$rcv_contact= $this->input->post('rcv_contact');			
			$rcv_email = $this->input->post('rcv_email');
			$rcv_address = $this->input->post('rcv_address');
			$rcv_address3= $this->input->post('rcv_address3');
			$quote_weight= $this->input->post('quote_weight');
			$quote_length= $this->input->post('quote_length');
			$quote_width= $this->input->post('quote_width');
			$quote_height =$this->input->post('quote_height');
            $quote_quantity= $this->input->post('quote_quantity');
			$rcv_country= $this->input->post('rcv_country');
			$stateCode =$this->input->post('sender_state');
			$servicename =$this->input->post('servicename');

   
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    		$pwd= substr(str_shuffle($chars),0,1);
			
			$array = array(
				//'webshipId' =>$webshipId,
				'quote_date' =>$quote_date,
				'customer'=>$customer,
				'customer_name'=>$customer_name,
                'quote_number'=>$qoute_jobnumber.'AGL'.$pwd,
				'sender_suburb'=>$sender_subrub,
				'sender_postcode'=>$sender_postcode,
				'receiver_suburb'=>$receiver_city,
				'receiver_postcode' =>$reciver_postcode,
				'shipment_type'=>$shipment_type,
				'package_type'=>$package_type,
				'total_amount'=>$total_amount,
                'receiver_phone'=>$rcv_phone,
				'receiver_company'=>$rcv_company,
				'receiver_contact' =>$rcv_contact,
				'receiver_email'=>$rcv_email,
				'receiver_address'=>$rcv_address,
				'receiver_address1'=>$rcv_address3,
                'quote_weight'=>$quote_weight,
				'quote_length'=>$quote_length,
				'quote_width'=>$quote_width,
				'quote_height' =>$quote_height,
				'quote_quantity'=>$quote_quantity,
				'sender_state'=>$stateCode,
				'servicename'=>$servicename,
				'receiver_country'=>$rcv_country,
				'receiver_state'=>$rcv_state,
				'surcharge_amount'=>$surcharge_amount,

				'sender_contact'=>$sender_contactName,
				'sender_company'=>$sender_companyName,
				'sender_address'=>$sender_address,
				'sender_phone'=>$sender_phone,
				'sender_country'=>$sender_country,
				'final_amount'=>$final_amount,
				'dimension_weight'=>$get_volume_input,
				'quote_date' => date('Y-m-d'),
			 );
		
			$this->user_model->add_quote($array);
			$data['view'] = 'customers/shipment';
			$this->load->view('customers/layout', $data);
		}

		public function address_book()
		{
			
			if($this->session->has_userdata('is_customer_user_login'))
			{
				$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
				$data['address_book']  = $this->user_model->get_address_book($data['customers']->customer_id);
				$data['view'] = 'customers/address_book';
				$this->load->view('customers/layout', $data);
			} else {	
				redirect('user/login');
			}
		}

		public function address_book_add()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
				$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
				$data['address_book']  = $this->user_model->get_address_book($this->session->userdata('customer_user_id'));
				$data['view'] = 'customers/address_book_add';
				$this->load->view('customers/layout', $data);
			}
			else {	
				redirect('user/login');
			}
		}

		public function import_excel()
		{

			$data['view'] = 'customers/import_excel';
			$this->load->view('customers/layout', $data);
		}

		public function history_void()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$history_id = $this->input->get('history_id');
			$data['void'] = $this->user_model->get_void_detail($history_id);
			$data['view'] = 'customers/history_void';
			$this->load->view('customers/layout', $data);
		}
		else 
		  {	
			redirect('user/login');
	      }
		}


		public function password_setting()
		{
			$data['view'] = 'customers/password_setting';
			$this->load->view('customers/layout', $data);
		}

		public function history()
	{
		if ($this->session->has_userdata('is_customer_user_login')) {
			
			$id = $this->session->userdata();
			$data['historys'] = $this->user_model->get_histroy_detail($id['customer_id']);
			//$data['historys'] = $this->user_model->get_history_data($id['customer_id']);

			$data['view'] = 'customers/history';
			$this->load->view('customers/layout', $data);
		} else {
			redirect('user/login');
		}
	}

		public function quote()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
			
			$data['quote']  = $this->user_model->get_quote();
			$data['view'] = 'customers/quote';
			$this->load->view('customers/layout', $data);
		}
		else {	redirect('user/login');}
		}

		public function gets_quote()
           {	
		         $id = $this->input->post('zone');	
		         $data=  $this->auth_model->get_fix_quote($id);
	        	echo json_encode($data);
            }

			public function gets_history()
           {	
		         $id = $this->input->post('historyId');	
		         $data=  $this->user_model->get_history_data($id);
	        	echo json_encode($data);
            }
		
		public function setting()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
			$data['view'] = 'customers/setting';
			$this->load->view('settings/layout', $data);
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


		public function get_receiver()
		{
			$companyName = $this->input->post('keyword');
		    $customer_id = $this->session->userdata('customer_id');
			$data['receiver'] = $this->user_model->get_receiver_data($companyName,$customer_id);
			echo json_encode($data['receiver']);
		}


		public function get_contact_name()
		{
			$contactName = $this->input->post('keyword');	
			$customer_id = $this->session->userdata('customer_id');	
			$data['contact'] = $this->user_model->get_contact_data($contactName,$customer_id);
			echo json_encode($data['contact']);
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
					'password' => md5($this->input->post('newPassword')),
					'plain_password' => $this->input->post('newPassword'),
					//'update_date' => time()
				);

				// Check Old {Password}

				$result = $this->user_model->checkOldPassword($this->session->userdata('customer_user_id'),$this->input->post('oldPassword'));		
				if($result > 0 || $result === true ){
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
			$customer_id = $this->session->userdata('customer_id');
			$sender_city = $this->input->post('sender_city');
			$sender_postcode = $this->input->post('sender_postcode');
			$sender_state =  $this->input->post('sender_state');
			$rc_postcode= $this->input->post('rc_postcode');
			$rc_statecode= $this->input->post('stateCode');
			$rcv_city= $this->input->post('rcv_city');
			$serviceId= $this->input->post('serviceId');
			$service_type_Id= $this->input->post('service_type_Id');
			$shipment_type= $this->input->post('shipment_type');
			//$totalweight= $this->input->post('total_weight');
			$getsenderzone =  $this->user_model->get_sender_zone($sender_city,$sender_postcode);
			$get_rcv_zone =  $this->user_model->get_rcv_zone($rcv_city,$rc_postcode);
			$isdange = $this->input->post('isdangerous');
			
			$get_surcharge =  $this->user_model->get_surchargebyid($serviceId,$isdange);
			$fixed_price   =  $this->user_model->get_fix_rate($service_type_Id);
			if(empty($fixed_price))
			{
				$base_charge =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone,$service_type_Id);	
				$result['base_charge'] = $base_charge;
			} else {
				$result['fixed_price'] = $fixed_price;
			}
			
			$result['charges'] = $get_surcharge;
			$margin = $this->auth_model->get_margin($customer_id);
			$result['margin'] = "";
			if(!empty($margin)){
				$margin_rates = json_decode($margin->margin_rate);
				foreach($margin_rates as $margins){
					if($margins->service_id == $service_type_Id){
						$result['margin'] = $margins->margin_rate;
					}
				}
			}
			echo json_encode($result);
			
		}
	

		
		public function booking()
		{
			if($this->session->has_userdata('is_customer_user_login'))
			{
				$str = $this->user_model->gettempdata($this->session->userdata('customer_user_id'));
				$returndata = array();
				$strArray   = explode("&", $str);
				$i = 0;
				foreach ($strArray as $item) {
					$array = explode("=", $item);
					$returndata[$array[0]] = $array[1];
				}
				$sender_city     = $returndata['shipmentPage.senderAddress.city'];
				$sender_state    = $returndata['shipmentPage.senderAddress.state'];
				$sender_postcode = $returndata['shipmentPage.senderAddress.postalCode'];
				$rc_postcode     = $returndata['shipmentPage.receiverAddress.postalCode'];
				$rc_statecode    = $returndata['shipmentPage.receiverAddress.state'];
				$rcv_city        = $returndata['shipmentPage.receiverAddress.city'];
				$service_type_Id = $returndata['shipmentPage.shipmentTypeId'];
				$service_Id      = $returndata['shipmentPage.serviceId'];
			    $isdang          = (isset($returndata['isdangerous'])) ? $returndata['isdangerous'] : "";

			//	$sender_company_name = $returndata['shipmentPage.senderAddress.companyName'];
			//	$sender_phone = $returndata['shipmentPage.senderAddress.phone'];
			//	$sender_isSave = $returndata['shipmentPage.isSaveSenderAddressBook'];
				//$sender_address = $returndata['shipmentPage.senderAddress.address'];

			//	$receiver_company_name = $returndata['shipmentPage.receiverAddress.companyName'];
			//	$receiver_contact_name = $returndata['shipmentPage.receiverAddress.contactName'];
			//	$receiver_phone = $returndata['shipmentPage.receiverAddress.phone'];
				//$receiver_isSave = $returndata['shipmentPage.isSaveRecipientAddressBook'];

				$get_surcharge =  $this->user_model->get_surchargebyid($service_Id,$isdang);
				$getsenderzone =  $this->user_model->get_sender_zone($sender_city,$sender_postcode);
				$get_rcv_zone  =  $this->user_model->get_rcv_zone($rcv_city,$rc_postcode);
				$fixed_price   =  $this->user_model->get_fix_rate($service_type_Id);
				$get_base_rate =  $this->user_model->get_base_rate($getsenderzone,$get_rcv_zone,$service_type_Id);
				
				$data['get_carrier']   =  $this->user_model->get_carrierbyid($service_Id);
				$data['get_service']   =  $this->user_model->get_servicebyid($service_type_Id);
				$data['result']    = $returndata;
				$data['surcharge'] = array('base_charge'=>$get_base_rate,'fixed_price'=>$fixed_price,'charges'=>$get_surcharge);
				$data['customers'] = $this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
				
				$margin = $this->auth_model->get_margin($this->session->userdata('customer_id'));
				$data['margin'] = "";
				if(!empty($margin)){
					$margin_rates = json_decode($margin->margin_rate);
					foreach($margin_rates as $margins){
						if($margins->service_id == $service_type_Id){
							$data['margin'] = $margins->margin_rate;
						}
					}
				}
			
				$data['view']      = 'customers/booking';
				$this->load->view('customers/layout', $data);
			} else {	
				redirect('user/login');
			}
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

				$addressCustomerId= $this->input->post('customerCode');
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
					'customer_id' =>$addressCustomerId,
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
				$this->session->set_flashdata('address_msg', 'Address Book Added Succesfully.');
				$data['view'] = 'customers/address_book_add';
				$this->load->view('customers/layout', $data);
			}


			public function add_booking()
	{
		/********************** Ship API ***********************************/

		$sender_name = $this->input->post('sender_name');
		$sender_email = $this->input->post('sender_email');
		$sender_phone = $this->input->post('sender_phone');
		$sender_address = $this->input->post('sender_address');
		$sender_city = $this->input->post('sender_city');
		$sender_pin = $this->input->post('sender_pin');
		$sender_state = $this->input->post('sender_state');
		$sender_company = $this->input->post('sender_company');
		$sender_country = $this->input->post('sender_country');
		$serviceId = $this->input->post('serviceId');
		$shipmentTypeId = $this->input->post('shipmentTypeId');
		

		$receiver_name = $this->input->post('receiver_name');
		$receiver_company = $this->input->post('receiver_company');
		$receiver_address = $this->input->post('receiver_address');
		$receiver_email = $this->input->post('receiver_email');
		$receiver_phone = $this->input->post('receiver_phone');
		$receiver_city = $this->input->post('receiver_city');
		$receiver_pin = $this->input->post('receiver_pin');
		$receiver_state = $this->input->post('receiver_state');
		$receiver_country = $this->input->post('receiver_country');

		$ship_total = $this->input->post('ship_total');
		$ship_weight = $this->input->post('ship_weight');
		$ship_length = $this->input->post('ship_length');
		$ship_width = $this->input->post('ship_width');
		$ship_height = $this->input->post('ship_height');


		$customerCode = $this->input->post('customerCode');
		//$data['customers']=$this->user_model->fetch_customer($this->session->userdata('customer_user_id'));
		$contentDescription = $this->input->post('contentDescription');
		$shipmentReference = $this->input->post('shipmentReference');
		$specialDelivery = $this->input->post('specialDelivery');
		$collectionReference = $this->input->post('collectionReference');
		$scheduleCollectionSelect = $this->input->post('scheduleCollectionSelect');
		$scheduleCollectioncompanyName = $this->input->post('scheduleCollectioncompanyName');
		$scheduleCollectionContactName = $this->input->post('scheduleCollectionContactName');
		$scheduleCollectionAddress = $this->input->post('scheduleCollectionAddress');
		$scheduleCollectionAddress2 = $this->input->post('scheduleCollectionAddress2');
		$scheduleCollectionCity = $this->input->post('scheduleCollectionCity');
		$scheduleCollectionPhone = $this->input->post('scheduleCollectionPhone');
		$scheduleCollectionpostalCode = $this->input->post('scheduleCollectionpostalCode');
		$scheduleCollectionstate = $this->input->post('scheduleCollectionstate');
		$scheduleCollectionPickupDate = $this->input->post('scheduleCollectionPickupDate');
		$scheduleCollectionPickupTime = $this->input->post('scheduleCollectionPickupTime');
		$scheduleCollectionPickupTimeNoLater = $this->input->post('scheduleCollectionPickupTimeNoLater');
		$scheduleCollectionPickupLocation = $this->input->post('scheduleCollectionPickupLocation');
		$scheduleCollectionLocationCodeId = $this->input->post('scheduleCollectionLocationCodeId');
		$scheduleCollectionDescription = $this->input->post('scheduleCollectionDescription');



		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://digitalapi.auspost.com.au/test/shipping/v1/shipments",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => '
				  {
					"shipments":[
						{
							"shipment_reference":"' . $shipmentReference . '",
							"customer_reference_1":"' . $collectionReference . '",
							"email_tracking_enabled":true,
							
							"from":{
								"name":"' . $sender_name . '",
								"lines": [
									"' . $sender_address . '"
								],
								"suburb": "' . $sender_city . '",
								"state": "' . $sender_state . '",
								"postcode": "' . $sender_pin . '",
								"phone": "' . $sender_phone . '",
								"email":"' . $sender_email . '"
							},
							"to":{
								"name":"' . $receiver_name . '",
								"business_name":"' . $receiver_company . '",
								"lines":[
									"' . $receiver_address . '"
								],
								"suburb":"' . $receiver_city . '",
								"state":"' . $receiver_state . '",
								"postcode":"' . $receiver_pin . '",
								"phone":"' . $receiver_phone . '",
								"email":"' . $receiver_email . '"
							},
							"items":[
												{
													"packaging_type":"CTN",
													"item_reference":"SKU-1",
													"product_id":"FPP",
													"length":"' . $ship_length . '",
													"height":"' . $ship_height . '",
													"width":"' . $ship_weight . '",
													"weight":"' . $ship_width . '",
													"authority_to_leave":false,
													"allow_partial_delivery":false,
													"features":{
														"TRANSIT_COVER":{
															 "attributes":{
																 "cover_amount":' . $ship_total . '
															  }
														 }
													 }
												}
												
											]
						}
					]
				}',
			CURLOPT_HTTPHEADER => array(
				"accept: application/json",
				"account-number: 05028762",
				"authorization: Basic MjdjNDlhYzMtNGRlYi00OTExLTliMjgtZWY0NmIxNjRiYmNmOngxODFiN2RkMjFjMDhkMjFjZTdi",
				"cache-control: no-cache",
				"content-type: application/json",
				"postman-token: b88ec344-008f-4570-97af-c7436cf64b4f"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);



		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$result = json_decode($response);
			$shipment_id = $result->shipments[0]->shipment_id;
		}

		curl_close($curl);



		$array = array(
			'customer_id' => $customerCode,
			'carrier_id' => $serviceId,
			'content_desc' => $contentDescription,
			'billing_ref' => $shipmentReference,
			'special_delivery' => $specialDelivery,
			'collection_ref' => $collectionReference,
			'schedule_select' => $scheduleCollectionSelect,
			'collect_company' => $scheduleCollectioncompanyName,
			'collect_Contact_name' => $scheduleCollectionContactName,
			'collect_address' => $scheduleCollectionAddress,
			'collect_address1' => $scheduleCollectionAddress2,
			'collect_city' => $scheduleCollectionCity,
			'collect_phone' => $scheduleCollectionPhone,
			'contact_postal_code' => $scheduleCollectionpostalCode,
			'collect_state' => $scheduleCollectionstate,
			'ready_date' => $scheduleCollectionPickupDate,
			'collect_ready_time' => $scheduleCollectionPickupTime,
			'collect_close_time' => $scheduleCollectionPickupTimeNoLater,
			'collect_pickup_location' => $scheduleCollectionPickupLocation,
			'collect_location_code' => $scheduleCollectionLocationCodeId,
			'collect_location_description' => $scheduleCollectionDescription,

			'sender_contact' => $sender_name,
			'sender_email' => $sender_email,
			'sender_phone' => $sender_phone,
			'sender_address' => $sender_address,
			'sender_city' => $sender_city,
			'sender_pin' => $sender_pin,
			'sender_state' => $sender_state,
			'sender_company' => $sender_company,
			'sender_country' => $sender_country,
			'receiver_contact' => $receiver_name,
			'receiver_company' => $receiver_company,
			'receiver_address' => $receiver_address,
			'receiver_email' => $receiver_email,
			'receiver_phone' => $receiver_phone,
			'receiver_city' => $receiver_city,
			'receiver_pin' => $receiver_pin,
			'receiver_state' => $receiver_state,
			'receiver_country' => $receiver_country,
			'service_name' => $shipmentTypeId,

			'ship_length' => $ship_length,
			'ship_height' => $ship_height,
			'ship_weight' => $ship_weight,
			'ship_width' => $ship_width,
			 'shipapi_res' => $response,

		);
		$this->user_model->add_booking($array);
		echo $shipment_id;
		exit;

		//$this->session->set_flashdata('address_msg', 'Booking Added Succesfully.');
		$data['view'] = 'customers/booking';
		$this->load->view('customers/layout', $data);
	}





			public function update_address_book()
			{
				$address_id = $this->input->post('address_id');
				$address = array(
				'contact_name' => $this->input->post('addressContactName'),
				'company_name' => $this->input->post('addressCompanyName'),
				'state' => $this->input->post('addressState'),
				'postcode' => $this->input->post('addressPostalCode'),
				'address' => $this->input->post('addressAddress1'),
				'address1' => $this->input->post('addressAddress2'),
				'phone' => $this->input->post('addressPhone'),
				'city' => $this->input->post('addressCity'),
				'email' => $this->input->post('addressEmail'),
				'country' => $this->input->post('addressCountry'),
				'department' => $this->input->post('addressDepartment'),
				'deafult_billing_type' => $this->input->post('addressDefaultBillingType'),
				'fax' => $this->input->post('addressFax'),
				'account_number' => $this->input->post('addressAccountNumber'),
				'residential_address' => $this->input->post('isResidential'),
				'default_service_type' => $this->input->post('addressDefaultServiceType'),
				'default_package_type' => $this->input->post('addressDefaultPackageType'),
				'modified'=>$date = date('Y/m/d H:i:s')
				);
				$address = $this->user_model->update_address_data($address,$address_id);
				$this->session->set_flashdata('msg', 'SuAddress Book is Edited Successfully!');
				redirect(base_url('customer/address_book'), 'refresh');
	
			}

			public function track()
	{
		$curl = curl_init();
		$id = $this->input->post('id');


		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://digitalapi.auspost.com.au/test/shipping/v1/labels",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => '
								{
								"wait_for_label_url": true,
								"unlabelled_articles_only": false,
								"preferences": [
								{
							"type": "PRINT",
							"groups": [
{
"group": "Startrack",
"layout": "A4-1pp",
"branded": true,
"left_offset": 0,
"top_offset": 0
}
]
}
],
"shipments": [
{
"shipment_id":"' . $id . ' "
}
]
}',
			CURLOPT_HTTPHEADER => array(
				"accept: application/json",
				"account-number: 05028762",
				"authorization: Basic MjdjNDlhYzMtNGRlYi00OTExLTliMjgtZWY0NmIxNjRiYmNmOngxODFiN2RkMjFjMDhkMjFjZTdi",
				"cache-control: no-cache",
				"content-type: application/json",
				"postman-token: b88ec344-008f-4570-97af-c7436cf64b4f"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$datas = (json_decode($response, True));

			foreach ($datas as $data) {
				foreach ($data as $da) {
					echo $da['url'];
				}
			}
		}
	}

	public function histroy_tracking()
	{
		if ($this->session->has_userdata('is_customer_user_login')) {
			$id = $this->input->get('trackingId');
			$tableId = $this->input->get('id');

			$curl = curl_init();


			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://digitalapi.auspost.com.au/test/shipping/v1/track?tracking_ids=$id",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"accept: application/json",
					"account-number: 05028762",
					"authorization: Basic MjdjNDlhYzMtNGRlYi00OTExLTliMjgtZWY0NmIxNjRiYmNmOngxODFiN2RkMjFjMDhkMjFjZTdi",
					"cache-control: no-cache",
					"content-type: application/json",
					"postman-token: b88ec344-008f-4570-97af-c7436cf64b4f"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				$data['result'] = json_decode($response, True);
			}
			$data['shipmentdatas'] = $this->user_model->get_history_data($tableId);
			$data['view']      = 'customers/tracking';
			$this->load->view('customers/layout', $data);
		} else {
			redirect('user/login');
		}
	}


	
	
	
	}

?>	