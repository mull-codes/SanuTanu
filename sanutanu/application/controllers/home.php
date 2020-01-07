<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

    public function index(){
    	if($this->session->userdata("logged_in") == "logged_in"){
    	 	redirect(base_url().'index.php/home/login' , 'refresh');
    	}
        $this->load->view('layouts/login_header');
    	$this->load->view('users/signup_view');	
    }

    public function login(){
    	if($this->session->userdata("logged_in") != "logged_in"){
    	 	redirect(base_url().'index.php/home' , 'refresh');
    	}
        $this->load->view('layouts/header');
    	$this->load->view('users/timeline_view');
        //all_users();
    	//$this->session->sess_destroy();
    }

    public function logout(){
        if($this->session->userdata("logged_in") != "logged_in"){
            redirect(base_url().'index.php/home' , 'refresh');
        }
        $this->session->sess_destroy();
        redirect(base_url().'index.php/home' , 'refresh'); 
    }

    
}
