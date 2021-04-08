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
	
	
	}

?>	