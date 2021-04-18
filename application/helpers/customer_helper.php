<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_customer($id)
{
	$ci=& get_instance();
    $ci->load->database();
    $sql = "select * from customer where customer_id=".$id; 
    $query = $ci->db->query($sql);
 	return $row = $query->row();
}

function get_ratess($id)
{
	$ci=& get_instance();
    $ci->load->database();
    $sql = "select * from rates where service_type=".$id; 
    $query = $ci->db->query($sql);
 	return $row = $query->result_array();	
}