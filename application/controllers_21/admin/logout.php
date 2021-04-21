<?php
class Logout extends CI_Controller {
    public function index() {
        $this->session->unset_userdata(array('admin_id', 'is_admin_login','name'));
        $this->session->set_flashdata('alert', array('type' => 'info', 'msg' => 'You are logged out.'));
        redirect(base_url('admin/auth/login'));
    }
}
?>