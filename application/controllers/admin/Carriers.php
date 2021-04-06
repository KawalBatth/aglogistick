<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Carriers extends MY_Controller {
		public function __construct()
        {
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');

		}

        public function carrier_list()
		{
			$data['view'] = 'admin/carriers/carrier_list';
			$this->load->view('admin/layout', $data);
		}

        public function country_list()
		{
			$data['view'] = 'admin/carriers/country_list';
			$this->load->view('admin/layout', $data);
		}

	}

?>	