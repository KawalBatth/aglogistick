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
	public function add_surcharge_data($surgcharge,$carrier_id)
	{
		
		$carrier= array('carrier_id'=>$carrier_id);
		$i=0;
		$this->db->insert('surcharges_list',$carrier);
		$date = date('Y/m/d H:i:s');
		for($i=0;$i<count($surgcharge['surcharge_name']);$i++)
		{
			$this->db->set('surcharge_name', $surgcharge['surcharge_name'][$i]);
			$this->db->set('surcharge_price', $surgcharge['surcharge_price'][$i]);
			$this->db->set('s_description', $surgcharge['s_description'][$i]);
			$this->db->set('last_modified', $date);
			$this->db->where('carrier_id', $carrier_id);
			$this->db->update('surcharges_list');
			
		}
		return true;
	}
	public function get_surcharges()
	{
		$this->db->select('a.*,b.*');
		$this->db->from('carriers a');
		$this->db->join('surcharges_list b', 'a.id = b.carrier_id', 'left'); 
		return $query = $this->db->get()->result_array();
		
	}
		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>