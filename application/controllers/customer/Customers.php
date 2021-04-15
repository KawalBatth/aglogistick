<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
		
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

		public function change_password(){
			$this->load->library('form_validation');
			if($this->input->post('submit')){
			$this->form_validation->set_rules('oldPassword','Old Password','trim|required');
			$this->form_validation->set_rules('newPassword', 'New Password', 'trim|required');
			$this->form_validation->set_rules('confirmPassword', 'Repeat Password', 'trim|required|matches[newPassword]');
	
			if ($this->form_validation->run() == FALSE) {
			
				$this->load->view('customer/customers/setting');
			}else{
	
				// Update Data
				$data = array(
					'password' => md5($this->input->post('newPassword')),
					//'update_date' => time()
				);
				// Check Old {Password}
				$result = $this->user_model->checkOldPassword($this->session->userdata('user_id'), md5($this->input->post('oldPassword')));
				if($result > 0 AND $result === true ){
					// updata user data
					$result = $this->user_model->set_message($this->session->userdata('user_id'), $data);
					if($result > 0){
						$this->session->set_flashdata('success_msg', 'User Password Change.');
						return redirect('customer/settings');
					}else{
						$this->session->set_flashdata('error_msg', '<b>Error: </b>User Password not Change.');
						return redirect('customer/settings');
					}
				}
			}
				}else{
					$this->session->set_flashdata('error_msg', '<b>Error: </b>User Old Password not Match.');
					return redirect('customer/settings');
				}
		}
	
	
	}

?>	