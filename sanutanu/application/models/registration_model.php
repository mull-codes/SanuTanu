<?php 

class Registration_Model extends CI_Model  {

    public function registration(){
    	$user_first_name = $this->input->post('user_first_name');
    	$user_last_name = $this->input->post('user_last_name');
    	$user_email = $this->input->post('user_email');
    	$user_password = md5($this->input->post('user_password'));
    	$day = $this->input->post('day');
    	$month = $this->input->post('month');
    	$year = $this->input->post('year');
    	$user_gender = $this->input->post('user_gender');
    	$user_date_of_birth = $year."-".$month."-".$day;
        $auth_data = explode('@', $user_email);
    	$signup_array = array(
    		'user_first_name' => $user_first_name,
    		'user_last_name' => $user_last_name,
    		'user_email' => $user_email,
    		'user_password' => $user_password,
    		'user_date_of_birth' => $user_date_of_birth,
    		'user_gender' => $user_gender,
    		'user_created_date' => date("Y-m-d"),
    	);
        $response = check_registration($user_email);
        if($response == true){
            if($signup_array){
            $this->session->set_userdata("signup_array", $signup_array);
            if(count($auth_data) == 1){
                mobile_auth($auth_data);
                //redirect(base_url().'index.php/users/login/otp_authentication','refresh');
                echo 'success';
            }
        }
        }else{
            echo "exists";
        }
    	
    }

    public function user_login(){
        $user_email = $this->input->post('user_email');
        $user_password = md5($this->input->post('user_password'));
        $this->session->set_userdata('email',$user_email);
        $this->session->set_userdata('password',$user_password);
        $this->db->select("user_id,user_first_name,user_last_name,user_date_of_birth,user_gender,user_email,user_password")
                ->from("tbl_users")
                ->where(array("user_email" => $user_email,"user_password" => $user_password));
        $user_data = $this->db->get()->result_array();
        if($user_data){
            $this->session->set_userdata('logged_in',"logged_in");
            $this->session->set_userdata('user_id',$user_data[0]['user_id']);
            $this->session->set_userdata('first_name',$user_data[0]['user_first_name']);
            $this->session->set_userdata('last_name',$user_data[0]['user_last_name']);
            $this->session->set_userdata('date_of_birth',$user_data[0]['user_date_of_birth']);
            $this->session->set_userdata('gender',$user_data[0]['user_gender']);
            activity_log($this->session->userdata('user_id'),"User Logged In");
            echo "success";
        }else{
            echo "error";
        }
    }

    public function save_registration(){
        $signup_data = $this->session->userdata("signup_array");
        $signup_array = array(
            'user_first_name' => $signup_data['user_first_name'],
            'user_last_name' => $signup_data['user_last_name'],
            'user_email' => $signup_data['user_email'],
            'user_password' => $signup_data['user_password'],
            'user_date_of_birth' => $signup_data['user_date_of_birth'],
            'user_gender' => $signup_data['user_gender'],
            'user_created_date' => $signup_data['user_created_date'],
        );
        if($signup_array){
            $this->db->insert('tbl_users' ,$signup_array );
            echo "inserted";
            //$this->session->sess_destroy();
        }
    }

}

?>