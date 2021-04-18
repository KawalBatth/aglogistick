<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class User extends CI_Controller 
{
	
     	public function __construct(){
			parent::__construct();
			$this->load->model('admin/user_model', 'user_model');
		}

		public function index(){
			if($this->session->has_userdata('is_user_login'))
			{
				redirect('customers/shipment');
			}
			else{
				//redirect('customer/login');
				 $this->load->view('user/login_view');  
			}
		}

    

    public function process()  
    {  
		if($this->input->post('submit')){
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$this->load->view('user/login_view');
				}
				else {
					$data = array(
					'name' => $this->input->post('name'),
					'password' => $this->input->post('password')
					);
					$result = $this->user_model->user_login($data);
					if ($result == TRUE) {

						$forcepassword =$result['isRequireChangePassword'];
						if($forcepassword==1)
						{
							redirect(base_url('customer/settings'), 'refresh');
						}
						else {
								$admin_data = array(
								'customer_user_id' => $result['id'],
						 		'user_name' => $result['user_name'],
						 		'is_customer_user_login' => TRUE
							);
							$this->session->set_userdata($admin_data);
							redirect(base_url('customer/shipment'), 'refresh');
						}
					}
					else{
						$data['msg'] = 'Invalid Name or Password!';
						$this->load->view('user/login_view', $data);
					}
				}
			}
			else{
				$this->load->view('user/login_view');
			}
       
    }  
	public function change_pwd(){
			$id = $this->session->userdata('customer_user_id');
			if($this->input->post('submit')){
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('confirm_pwd', 'Confirm Password', 'trim|required|matches[password]');
				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'customers/settings';
					$this->load->view('customers/layout', $data);
				}
				else{
					$data = array(
						'password' => md5($this->input->post('password'))
					);
					$result = $this->user_model->change_pwd($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Password has been changed successfully!');
						redirect(base_url('customers/add'));
					}
				}
			}
			else{
				$data['view'] = 'customers/settings';
				$this->load->view('customers/layout', $data);
			}
		}

		
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('customer_user_id');  
        redirect("Login");  
    }  
  
}  
?>  