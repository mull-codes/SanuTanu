<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function add_friends(){
	$ci =& get_instance();
	$user_id = $ci->session->userdata("user_id");
	$ci->db->select("*")
		->from("tbl_users")
		->where("user_id !=",$user_id);
	$data = $ci->db->get()->result_array();
	return $data;
	
}

?>