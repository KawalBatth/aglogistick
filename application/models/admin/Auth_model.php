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

	}

?>