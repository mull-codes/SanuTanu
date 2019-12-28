<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->view('layouts/header');
    }

    public function index(){
    	$this->load->view('users/signup_view');
    }
}