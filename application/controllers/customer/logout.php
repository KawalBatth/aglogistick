<?php
class Logout extends CI_Controller {
    public function index() {
        $this->session->unset_userdata('user');  
        $this->session->set_flashdata('alert', array('type' => 'info', 'msg' => 'You are logged out.'));
        redirect(base_url('user/login/process'));
    }
}
?>