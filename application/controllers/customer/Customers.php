<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
			$this->load->helper('customer'); 
		}

		public function shipment()
		{
			$data['view'] = 'customers/shipment';
			$this->load->view('customers/layout', $data);
		}

		public function address_book()
		{
			$data['view'] = 'customers/address_book';
			$this->load->view('customers/layout', $data);
		}

		public function address_book_add()
		{
			$data['view'] = 'customers/address_book_add';
			$this->load->view('customers/layout', $data);
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
			$data['view'] = 'customers/history';
			$this->load->view('customers/layout', $data);
		}

		public function quote()
		{
			$data['view'] = 'customers/quote';
			$this->load->view('customers/layout', $data);
		}

		
		public function setting()
		{
			$data['view'] = 'customers/setting';
			$this->load->view('customers/layout', $data);
		}

			
		public function help()
		{
			$data['view'] = 'customers/help';
			$this->load->view('customers/layout', $data);
		}

        public function booking()
		{
			$data['view'] = 'customers/booking';
			$this->load->view('customers/layout', $data);
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
					return redirect('customer/settings');
				}
				else {
					$this->session->set_flashdata('error_msg', '<b>Error: </b>Old password is incorrect.');
						return redirect('customer/settings');
				}
			}
				
		}
	public function get_customers()
		{
			$data['customer']=$this->user_model->fetch_customer($this->session->userdata('username'));
			$data['view'] = 'customers/shipment';
			$this->load->view('customer/layout', $data);
		}
	
	}

?>	