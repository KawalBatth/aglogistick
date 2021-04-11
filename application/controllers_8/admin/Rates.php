<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rates extends MY_Controller {
		public function __construct(){
			parent::__construct();

		}

		public function surcharge_list()
		{
			$data['view'] = 'admin/rates/surcharge_list';
			$this->load->view('admin/layout', $data);
		}

        public function rate_sheet()
		{
			$data['view'] = 'admin/rates/rate_sheet';
			$this->load->view('admin/layout', $data);
		}

		public function import_rate()
		{
			$data['view'] = 'admin/rates/import_rate';
			$this->load->view('admin/layout', $data);
		}

		public function manage_cover()
		{
			$data['view'] = 'admin/rates/manage_cover';
			$this->load->view('admin/layout', $data);
		}

		public function set_cost()
		{
			$data['view'] = 'admin/rates/set_cost';
			$this->load->view('admin/layout', $data);
		}

	}

?>	