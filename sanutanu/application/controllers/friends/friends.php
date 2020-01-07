<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friends extends CI_Controller {

	function __construct() {
        parent::__construct();
        
    }

    public function friends_suggestion(){
    	$this->load->view('layouts/header');
        $this->load->view("friends/friend_suggestion_view");
    }

    public function friend_requests(){
    	// if($this->session->userdata("logged_in") != "logged_in"){
    	//  	redirect(base_url().'index.php/home' , 'refresh');
    	// }
    	$friend_request_id = $_POST["id"];
    	$this->session->set_userdata("friend_request_id",$friend_request_id);
    	$this->friends->send_friend_request();
    }
}