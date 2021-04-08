<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');

		}

		public function customer_search()
		{
			$data['view'] = 'customers/customer_search';
			$this->load->view('admin/layout', $data);
		}

        public function customer_list()
		{
			$data['all_users'] =  $this->user_model->get_all_users();
			$data['view'] = 'customers/customer_list';
			$this->load->view('admin/layout', $data);
		}

		public function customer_manage()
		{
			$data['view'] = 'customers/customer_manage';
			$this->load->view('admin/layout', $data);
		}

		public function status_report()
		{
			$data['view'] = 'customers/status_report';
			$this->load->view('admin/layout', $data);
		}

		public function summary_report()
		{
			$data['view'] = 'customers/summary_report';
			$this->load->view('admin/layout', $data);
		}

		public function customer_add()
		{
			$data['view'] = 'customers/customer_add';
			$this->load->view('admin/layout', $data);
		}

		public function shipment()
		{
			$data['view'] = 'customers/shipment';
			$this->load->view('admin/layout', $data);
		}

		public function address_book()
		{
			$data['view'] = 'customers/address_book';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_add()
		{
			$data['view'] = 'customers/address_book_add';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_import()
		{
			$data['view'] = 'customers/address_book_import';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_export()
		{
			$data['view'] = 'admin/customers/address_book_export';
			$this->load->view('admin/layout', $data);
		}

		public function history()
		{
			$data['view'] = 'customers/history';
			$this->load->view('admin/layout', $data);
		}

		public function quote()
		{
			$data['view'] = 'customers/quote';
			$this->load->view('admin/layout', $data);
		}

		
		public function setting()
		{
			$data['view'] = 'customers/setting';
			$this->load->view('admin/layout', $data);
		}

			
		public function order_supply()
		{
			$data['view'] = 'customers/order_supply';
			$this->load->view('admin/layout', $data);
		}

		public function help()
		{
			$data['view'] = 'customers/help';
			$this->load->view('admin/layout', $data);
		}

        public function booking()
		{
			$data['view'] = 'customers/booking';
			$this->load->view('admin/layout', $data);
		}
	
	
	}

?>	