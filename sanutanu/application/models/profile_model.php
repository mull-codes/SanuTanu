<?php

class Profile_Model extends CI_Model  {
	public function profile_cover($image_type){
		$user_id = $this->session->userdata("user_id");
		$this->db->select("image_type,profile_id")
				->where("user_id",$user_id)
				->where("image_type",$image_type)
				->from("tbl_profiles");
		$profile_data = $this->db->get()->result_array();
		// $this->db->select("users_data")
		// 		->where("profile_id",)
		// 		->from("tbl_cover_photo");
		// $data = $this->db->get()->result_array();
		// print_r($this->db->last_query());
	}
}

?>