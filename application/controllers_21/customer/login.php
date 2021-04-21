<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller 
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
				 $this->load->view('customers/login_view');  
			}
		}

    

    public function process()  
    {  
		if($this->input->post('submit')){
				//$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$this->load->view('customers/login_view');
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
						$data['msg'] = 'Invalid Username or Password!';
						$this->load->view('customers/login_view', $data);
					}
				}
			}
			else{
				$this->load->view('customers/login_view');
			}
       
    }  
	
    /*public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("Login");  
    }  */
  
}  
?>  