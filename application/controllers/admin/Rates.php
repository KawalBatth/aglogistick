<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Rates extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admin/auth_model', 'auth_model');

		}

		public function surcharge_list()
		{
			$data['surcharge_list'] =  $this->auth_model->get_surcharges();
			$data['carrier_list'] =  $this->auth_model->get_carrier();
			$data['view'] = 'admin/rates/surcharge_list';
			$this->load->view('admin/layout', $data);
		}

        public function rate_sheet()
		{
			$data['view'] = 'admin/rates/rate_sheet';
			$this->load->view('admin/layout', $data);
		}
 function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }
		public function import_rate()
		{

 

  // filename for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

 		 $flag = false;
 			 $result = pg_query("SELECT * FROM table ORDER BY field") or die('Query failed!');
 			 while(false !== ($row = pg_fetch_assoc($result))) {
    		if(!$flag) {
      // display field/column names as first row
    		  echo implode("\t", array_keys($row)) . "\r\n";
     			 $flag = true;
		    }
 			   array_walk($row, __NAMESPACE__ . '\cleanData');
 	   echo implode("\t", array_values($row)) . "\r\n";
  		}
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