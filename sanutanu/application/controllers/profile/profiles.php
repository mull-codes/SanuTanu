<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {

	function __construct() {
        parent::__construct();
        
    }
    public function profile_image_sugges()
    {
        $this->load->view('layouts/header');
        $this->load->view('profile/profile_image_sugges');
    }

}