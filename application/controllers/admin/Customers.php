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
	}

?>	