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
	public function profile_image_save()
	{
		$pic = $_FILES["profile_picture"]["name"];        
		if(!empty($pic)){
		$target_directory = "assets/profile_image/";
		$target_file = $target_directory.time().basename($pic);
		$input_file_type = pathinfo($target_file,PATHINFO_EXTENSION);
		$check_exist_picture = time().basename($_FILES["profile_picture"]["name"]);
		move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
		}
		$data = array(
			'user_id' => "10",
			'image_type' =>  "Profile",
			'created_date'=> date("Y-m-d")
			);
		 $this->db->insert('tbl_profiles',$data);
		 $last_inserted_id = $this->db->insert_id();
		 $profile_image_array = array(
			 'profile_id' => $last_inserted_id,
			'users_data' =>  $this->input->post('image'),
		 	'created_date'=> date("Y-m-d")
		 );
		$this->db->insert('tbl_profile_photo',$profile_image_array);
		 

	}
}

?>