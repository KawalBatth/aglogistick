<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');

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

		public function status_report()
		{
			$data['view'] = 'admin/customers/status_report';
			$this->load->view('admin/layout', $data);
		}

		public function summary_report()
		{
			$data['view'] = 'admin/customers/summary_report';
			$this->load->view('admin/layout', $data);
		}

		public function customer_add()
		{
			$data['view'] = 'admin/customers/customer_add';
			$this->load->view('admin/layout', $data);
		}

		public function shipment()
		{
			$data['view'] = 'admin/customers/shipment';
			$this->load->view('admin/layout', $data);
		}

		public function address_book()
		{
			$data['view'] = 'admin/customers/address_book';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_add()
		{
			$data['view'] = 'admin/customers/address_book_add';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_import()
		{
			$data['view'] = 'admin/customers/address_book_import';
			$this->load->view('admin/layout', $data);
		}

		public function address_book_export()
		{
			$data['view'] = 'admin/customers/address_book_export';
			$this->load->view('admin/layout', $data);
		}

		public function history()
		{
			$data['view'] = 'admin/customers/history';
			$this->load->view('admin/layout', $data);
		}

		public function quote()
		{
			$data['view'] = 'admin/customers/quote';
			$this->load->view('admin/layout', $data);
		}

		
		public function setting()
		{
			$data['view'] = 'admin/customers/setting';
			$this->load->view('admin/layout', $data);
		}

			
		public function order_supply()
		{
			$data['view'] = 'admin/customers/order_supply';
			$this->load->view('admin/layout', $data);
		}

		public function help()
		{
			$data['view'] = 'admin/customers/help';
			$this->load->view('admin/layout', $data);
		}

        public function booking()
		{
			$data['view'] = 'admin/customers/booking';
			$this->load->view('admin/layout', $data);
		}
	
	
	}

?>	