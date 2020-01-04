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
}