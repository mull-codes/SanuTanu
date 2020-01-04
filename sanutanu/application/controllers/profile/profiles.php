<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {

	function __construct() {
        parent::__construct();
        
    }

    public function edit_profile_pic_suggestion(){
    	$this->load->view('layouts/header');
        $this->load->view("Profiles/edit_profile_sugges");
    }
}