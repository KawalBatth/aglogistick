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
			    $validPassword = md5($data['password'])== $result['password'];
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
			    $validPassword = base64_encode($data['password'])== $result['password'];
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
		public function add_customers($data){
			
			$this->db->insert('customers', $data);
			
			return true;
		}

		public function get_all_users(){
			$query = $this->db->get('ci_users');
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

public function set_message($id,$data){
	$this->db->where('id', $id);
	$this->db->update('user',$data);
	return true;
}

public function save_notes($notes)
	{
		$this->db->insert('user_notes',$notes);
		return true;
	}


 public function get_all_notes()
 {
	$query = $this->db->get('user_notes');
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

	public function save_shipment($shipment)
	{
		$this->db->insert('shipment',$shipment);
		return true;
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
	public function get_surchargebyid($id)
	{
		$this->db->select('*');
		$this->db->from('surcharges_list');
		$this->db->where('carrier_id', $id);	
		return $query = $this->db->get()->result_array();
			
	}

	

}
?>