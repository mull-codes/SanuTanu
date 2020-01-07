<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function all_users(){
	$ci =& get_instance();
	// $user_id = $ci->session->userdata("user_id");
	// $ci->db->select("users.user_id")
	// 	->from("tbl_users users")
	// 	->where("users.user_id !=",$user_id)
	// 	->join("tbl_friends_request friends_request","friends_request.user_id = users.user_id", "inner")
	// 	->where("friends_request.user_id",$user_id);
	// 	//->where("friends_request.friend_id !=",$friend_id);
	// $users_list = $ci->db->get()->result_array();
	// print_r($ci->db->last_query());
	//foreach($users_list as $users){
		// $friend_id = $users['user_id'];
		// $ci->db->distinct("users.user_id");
		// $ci->db->select("users.*")
		// 	->from("tbl_users users")
		// 	->join("tbl_friends_request friends_request","friends_request.user_id = users.user_id", "inner")
		// 	->where("friends_request.user_id",$user_id)
		// 	->where("friends_request.friend_id !=",$friend_id);
		// $data = $ci->db->get()->result_array();print_r($data);
		
	//}
	
}

function add_friends($friend_id = ""){
	$ci =& get_instance();
	// $user_id = $ci->session->userdata("user_id");
	// $ci->db->select("*")
	// 	->from("tbl_users")
	// 	->where("user_id !=",$user_id);
	// $data = $ci->db->get()->result_array();

	// $ci->db->select("*")
	// 	->from("tbl_users users")
	// 	->join("tbl_friends_request friends_request","friends_request.user_id = users.user_id")
	// 	->where("friends_request.user_id",$user_id)
	// 	->where("friends_request.friend_id !=",$friend_id);
	// $ci->db->get()->result_array();
}

?>