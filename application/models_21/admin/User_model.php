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

public function save_notes($notes, $id)
	{
		$this->db->insert('customer', $notes);
		$this->db->where('customer_id', $id);
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

	public function get_history_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('additional_details');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
		
	}
	

	public function get_histroy_detail($id)
	{
		$this->db->from('additional_details');
		$this->db->where('customer_id', $id);
		$quary = $this->db->get();
		$result = $quary->result_array();
		return $result;
	}


	public function get_history($id)
	{
		$this->db->from('additional_details');
		$this->db->where('id', $id);
		$quary = $this->db->get();
		$history = $quary->result_array();
		foreach ($history as $his) {
			$datas = json_decode($his['shipapi_res'], True);
		}

		foreach ($datas['shipments'] as $data) {
			$b = $data['shipment_id'];
		}
		return $b;
	}

	public function get_iteam_weight($id)
	{
		$this->db->from('additional_details');
		$this->db->where('id', $id);
		$quary = $this->db->get();
		$history = $quary->result_array();
		foreach ($history as $his) {
			$datas = json_decode($his['shipapi_res'], True);
		}
		foreach ($datas['shipments'] as $data) {

			foreach ($data['items'] as $a) {
				$b = $a['weight'];
			}
		}
		return $b;
	}

	public function get_sechdule_date($id)
	{
		$this->db->from('additional_details');
		$this->db->where('id', $id);
		$quary = $this->db->get();
		$history = $quary->result_array();
		foreach ($history as $his) {
			$datas = json_decode($his['shipapi_res'], True);
		}
		foreach ($datas['shipments'] as $data) {
			$b = $data['shipment_creation_date'];
		}
		return $b;
	}
	public function get_price($id)
	{
		$this->db->from('additional_details');
		$this->db->where('id', $id);
		$quary = $this->db->get();
		$history = $quary->result_array();
		foreach ($history as $his) {
			$datas = json_decode($his['shipapi_res'], True);
		}
		foreach ($datas['shipments'] as $data) {
			$a = $data['shipment_summary'];
		}
		$b = $a['total_cost'] + $a['total_cost_ex_gst'] + $a['shipping_cost'] + $a['total_gst'] + $a['freight_charge'];
		return $b;
	}

	}

?>