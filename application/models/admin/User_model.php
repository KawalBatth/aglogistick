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
				//Compare the password attempt with the password we have stored.
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

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>