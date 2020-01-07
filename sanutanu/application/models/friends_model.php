<?php

class Friends_Model extends CI_Model  {
	public function send_friend_request(){
		$friend_request_id = $this->session->userdata("friend_request_id");
		$user_id = $this->session->userdata("user_id");
		$created_date = date("Y-m-d");
		$request_array = array(
			'friend_request' => "1",
			'user_id' => $user_id,
			'created_date' => $created_date,
			'friend_id' => $friend_request_id
		);
		//$this->db->insert("tbl_friends_request", $request_array);
		echo "requested";
	}
}

?>