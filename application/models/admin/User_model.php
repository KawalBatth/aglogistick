<?php
	class User_model extends CI_Model{
		
		public function login($data){
			$query = $this->db->get_where('ci_users', array('email' => $data['email'],'is_admin' =>0));
			if ($query->num_rows() == 0){
				return false;
			}
			else{
				//Compare the password attempt with the password we have stored.
				$result = $query->row_array();
			    $validPassword = MD5($data['password'])== $result['password'];
			    if($validPassword){
			        return $result = $query->row_array();
			    }
				
			}
		}
		public function user_login($data){
			$query = $this->db->get_where('user', array('user_name' => $data['name']));
			if ($query->num_rows() == 0){
				return false;
			}
			else{

				$result = $query->row_array();
			    $validPassword = MD5($data['password'])== $result['password'];
			    if($validPassword){
			        return $result = $query->row_array();
			    }
				
			}
		}
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}	

		public function update_user_data($data,$user_id)
        {
           $this->db->where('id', $user_id);
           $this->db->update('user', $data);       
           return true;
       }
	 
		public function add_user($data){
			$this->db->insert('ci_users', $data);
			return $this->db->insert_id();;	
		}


		public function add_address_book($data){
			$this->db->insert('address_book', $data);
			return true;
		}


		public function add_quote($data){
			$this->db->insert('quote', $data);
			return true;
		}


		public function get_quote()
		{
		   $this->db->select('*');
		   $this->db->from('quote');
		   return $query = $this->db->get()->result_array();
		 }


		 public function get_address_book()
		{
		   $this->db->select('*');
		   $this->db->from('address_book');
		   return $query = $this->db->get()->result_array();
		 }

		public function add_customers($data){
			
			$this->db->insert('customers', $data);
			
			return true;
		}

		public function get_all_users(){
			$query = $this->db->get('ci_users');
			return $result = $query->result_array();
		}

		public function get_all_customer(){
			$query = $this->db->get('customer');
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('ci_users', array('id' => $id));

			return $result = $query->row_array();
		}
		public function get_c_user_by_id($id){
			
			$query = $this->db->get_where('user', array('id' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}
		public function get_address($keyword)
		{
			$this->db->limit(5);
			return $return = $this->db->select('*')->from('recent_postcode')->where("suburb LIKE '%$keyword%'")->get()->result_array();



		}

		public function checkOldPassword($user_id, $oldPassword)
		{
		    $this->db->where(array('id' =>$user_id,'password'=> base64_encode($oldPassword)));
		    $query=$this->db->get('user');
			$row  = $query->row_array();
			if(empty($row))
			{
				return false;
			}
			else {
				return true;
			}
			
		}
		/*public function Update_User_Data($user_id, $data)
			{
				$this->db->set($data);
				$this->db->where('id', $user_id);
				$this->db->update('user');
				if($this->db->affected_rows() > 0)
					return true;
				else
					return false;
			}*/
public function savetempdata($str,$id)
{
	$arrayName = array('user_id' => $id,'formdata'=>$str);
	$this->db->insert('temp_data',$arrayName);
}

public function get_fix_rate($id)
{

	$this->db->select('*, price as per_kg');
	$this->db->from('star_services as service');
	$this->db->where('service.id', $id);
	$this->db->join('fixed_price', 'fixed_price.service_id = service.id');
	$query = $this->db->get();
	 if($query->num_rows() > 0)
        {
        	$data = $query->row()->per_kg;					
        	return $data;
        }
    	else {return $data ='';	}

}
public function gettempdata($id='')
{
	$this->db->select('*');
	$this->db->from('temp_data');
	$this->db->where('user_id', $id);
	$query = $this->db->get();
    return $query->row()->formdata;	
}
public function set_message($id,$data){
	$this->db->where('id', $id);
	$this->db->update('user',$data);
	return true;
}

public function save_notes($notes, $id)
	{
		$this->db->insert('user_notes', $notes);
		return true;
	}


	/*public function save_shipment($ship)
{
	//$arrayName = array('user_id' => $id,'formdata'=>$str);
	$this->db->insert('shipment',$ship);
	//$this->db->where('customer_id', $id);
	return true;
}*/


 public function get_all_notes($id)
 {
	$this->db->select('*');
	$this->db->from('user_notes');
	$this->db->where('customer_id', $id);
	return $result = $query->result_array();
  }
  
public function fetch_customer($id)
	{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->join('customer', 'customer.customer_id = user.customer_id');
			$this->db->where('user.id', $id);
			$query = $this->db->get();
            return $query->row();			
	}

	public function fetch_quote($id)
	{
			$this->db->select('*');
			$this->db->from('quote');
			//$this->db->join('customer', 'customer.customer_id = user.customer_id');
			$this->db->where('customer', $id);
			$query = $this->db->get();
            return $query->row();			
	}


	public function get_sender_zone($sender_state,$sender_postcode)
	{
		$this->db->select('sender_zone');
		$this->db->from('sender_zone');
		$this->db->where(array('sender_suburb'=>$sender_state,'sender_postcode'=>$sender_postcode));
		$query = $this->db->get();
        return $query->row()->sender_zone;				
	}
	
	public function get_rcv_zone($rc_statecode,$rc_postcode)
	{
		$this->db->select('receiver_zone');
		$this->db->from('receiver_zone');
		$this->db->where(array('receiver_suburb'=>$rc_statecode,'receiver_postcode'=>$rc_postcode));
		$query = $this->db->get();
        if($query->num_rows() > 0)
        {
        	$data = $query->row()->receiver_zone;					
        	return $data;
        }
        else {return $data ='';}

	}
	public function get_surchargebyid($id, $isdang=null)
	{
		$this->db->select('*');
		$this->db->from('surcharges_list');
		if($isdang==1)
		{
			$this->db->where(array('carrier_id'=>$id));			
			}
		else {
			$this->db->where(array('carrier_id'=>$id,'is_dangerous'=>$isdang));		
		}
		return $query = $this->db->get()->result_array();
			
	}
	public function get_base_rate($getsenderzone,$get_rcv_zone)
	{
		$this->db->select('*');
		$this->db->from('rates');
		$this->db->where(array('origin'=>$getsenderzone,'destination'=>$get_rcv_zone));
		return $query = $this->db->get()->result_array();
		//$query = $this->db->get();
       /* if($query->num_rows() > 0)
        {
        	$data = $query->row()->basic_charge;
			//$per = $query->row()->per_kg;	
			//$total =  ($data * $per);	
        	return $data;
        }
        else {return $data ='';}*/
	}


	}

?>