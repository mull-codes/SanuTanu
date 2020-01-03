<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProfile extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

    public function index(){
    	
    }

    public function edit_user_profile(){
    	if($this->session->userdata("logged_in") != "logged_in"){
    	 	redirect(base_url().'index.php/home' , 'refresh');
    	}
    	$this->load->view('users/edit_user_profile');
    }

    public function edit_profile_cover(){
        $image_type = $_POST['id'];
        $this->profile->profile_cover($image_type);
    }
}