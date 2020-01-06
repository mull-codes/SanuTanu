<?php

class Friends_Model extends CI_Model  {
	public function send_friend_request(){
		$friend_request_id = $this->session->userdata("friend_request_id");
		print_r($friend_request_id);exit();
	}
}

?>