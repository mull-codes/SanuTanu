<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Profile_Model');
        
    }
    public function profile_image_sugges()
    {
        $this->load->view('layouts/header');
        $this->load->view('profile/profile_image_sugges');  
    }
    public function profile_image_save()
    {
    
        $this->load->library('form_validation');
        $this->form_validation->set_rules('profile_picture','Upload Image','trim_rquired'); 
        if($this->form_validation->run()==FALSE)
    {
        $this->load->view('layouts/header');
        $this->load->view('profile/profile_image_sugges'); 
    }else{
        $this->Profile_Model->profile_image_save();
        redirect('home/login');
     
    }
    }

}
