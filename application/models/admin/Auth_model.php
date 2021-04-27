<?php
	class Auth_model extends CI_Model{

		public function login($data){
			$query = $this->db->get_where('ci_users', array('email' => $data['email']));
			if ($query->num_rows() == 0){
				return false;
			}
			else{
				//Compare the password attempt with the password we have stored.
				$result = $query->row_array();
			    $validPassword = md5($data['password'])== $result['password'];
			    if($validPassword){
			        return $result = $query->row_array();
			    }
				
			}
		}
	public function add_carrier($carrier)
	{
		$this->db->insert('carriers',$carrier);
		return $insert_id = $this->db->insert_id();
	}
	public function update_surcharge_data($data,$surcharges_id)
	{
		$this->db->where('id', $surcharges_id);
		$this->db->update('surcharges_list', $data);		
		return true;
	}
	public function add_surcharge_data($surgcharge)
	{
		
		$this->db->insert('surcharges_list',$surgcharge);
		return true;
	}
	public function get_surcharges()
	{
		$this->db->select('a.*,b.*');
		$this->db->from('carriers a');
		$this->db->join('surcharges_list b', 'a.id = b.carrier_id', 'inner'); 
		return $query = $this->db->get()->result_array();
		
	}
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

		public function get_carrier()
		{
			$this->db->select('*');
			$this->db->from('carriers');
			return $query = $this->db->get()->result_array();
		 
		}

		public function get_services()
		{
			
			$this->db->select('*');
			$this->db->from('star_services');
			return $query = $this->db->get()->result_array();
		 
		}


		public function get_zones()
		{
			//$this->db->distinct();
			$this->db->select('origin');
			$this->db->from('rates');
			return $query = $this->db->get()->result_array();
			//$query=$this->db->get();  
			//return $query->num_rows();  
		 
		}

	

		public function get_rates($zone,$id)
		{
			
			$this->db->select('*');
			$this->db->from('rates');
			$this->db->where(array('service_type'=>$id,'origin'=>$zone));
			return $query = $this->db->get()->result_array();

		}

		public function get_fix_rates($id)
		{
			
			$this->db->select('*');
			$this->db->from('fixed_price');
			$this->db->where('service_id', $id);
			return $query = $this->db->get()->result_array();
        }
		
	public function save_customer($customers)
	{
		$this->db->insert('customer',$customers);
		return true;
	}
	public function save_user($user)
	{
		$this->db->insert('user',$user);
		return true;
	}
		
	/*public function get_customer()
	{
			$this->db->select('customer_id,customerName');
			$this->db->from('customer');
			return $query = $this->db->get()->result_array();
	}*/

	public function get_customer()
	{
			$this->db->select('*');
			$this->db->from('customer');
			return $query = $this->db->get()->result_array();			
	}
	public function getemail($id)
	{
			$this->db->select('email');
			$query = $this->db->get_where('customer', array('customer_id' => $id));
			$result = $query->row_array();
			
			return $result['email'];
	}
	public function check_customer($id)
	{

		$query = $this->db->get_where('customer', array('customer_id' => $id));
		$result = $query->row_array();
		if(empty($result))
		{
			return false;
		}
		else {return true;}

	}
	public function get_users()
	{
			$this->db->select('*');
			$this->db->from('user');
			return $query = $this->db->get()->result_array();

			
	}

	public function get_customer_id()
	{

		$last = $this->db->order_by('id',"desc")->limit(1)->get('customer')->row();
		if($last)
		return $last->customer_id+1;
	}
	
	public function update_customer($data,$id)
	{

		$this->db->where('customer_id', $id);
		$this->db->update('customer', $data);
		return true;
	}
}

?>