<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->view('layouts/header');
    }

    public function index(){
    	//$this->load->view('users/signup_view');
    	// $this->session->set_userdata("logged_in",FALSE);
    	// if($this->session->userdata("logged_in" === FALSE)){
    	 	redirect(base_url().'index.php/home/login');
    	// }
    }

    public function login(){
    	$this->load->view('users/signup_view');
    }
}