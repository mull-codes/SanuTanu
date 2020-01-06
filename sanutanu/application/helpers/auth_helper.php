<?php 

	use Twilio\Rest\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

function mobile_auth($mobile_number = ""){
	$ci =& get_instance();
	$random_number = rand(100000,999999);
	$account_sid = 'AC67ba3de3b7345497442587ac29fb10ee';
    $auth_token = '847daf1643ba1009aad61d83b833d47e';
    $twilio_number = "+14063565283";
    $message = "Six digits ".$random_number." OTP for  Sanu Tanu Registrations";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
	    "+923016171706",
	    array(
		    'from' => $twilio_number,
		    'body' => $message
	    )
    );
    $ci->session->set_userdata("mobile_otp",$random_number);
}

function check_registration($user_name = ''){
	$ci =& get_instance();
	$ci->db->select("user_email");
	$ci->db->from("tbl_users");
	$ci->db->where("user_email",$user_name);
	$data = $ci->db->get()->result_array();
	if($data){
		return false;
	}else{
		return true;
	}
}

?>