<?php 

class Registration_Model extends CI_Model  {

    public function save_registration(){
    	$user_first_name = $this->input->post('user_first_name');
    	$user_last_name = $this->input->post('user_last_name');
    	$user_email = $this->input->post('user_email');
    	$user_password = $this->input->post('user_password');
    	$day = $this->input->post('day');
    	$month = $this->input->post('month');
    	$year = $this->input->post('year');
    	$user_gender = $this->input->post('user_gender');
    	$user_date_of_birth = $year."-".$month."-".$day;
    	$signup_array = array(
    		'user_first_name' => $user_first_name,
    		'user_last_name' => $user_last_name,
    		'user_email' => $user_email,
    		'user_password' => $user_password,
    		'user_date_of_birth' => $user_date_of_birth,
    		'user_gender' => $user_gender,
    		'user_created_date' => date("Y-m-d"),
    	);
    	if($signup_array){
    		$this->db->insert('tbl_users' ,$signup_array );
    	}
    }

}

?>