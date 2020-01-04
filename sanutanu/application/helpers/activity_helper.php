<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function activity_log($user_id = 0,$message = ""){
	$ci =& get_instance();
	$activity_data = array(
		"user_id" => $user_id,
		"name" => $message,
	);
	$ci->db->insert("tbl_activities" , $activity_data);
}

?>