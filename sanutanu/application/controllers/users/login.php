<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        
    }

    public function user_login(){
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[6]');

        if ($this->form_validation->run() != FALSE)
        {
            $this->registration->user_login();
        }else{
            echo validation_errors('<div class="error">', '</div>');
        }
    }

    public function registration(){
    	$this->form_validation->set_rules('user_first_name', 'First Name', 'trim|required|min_length[3]');
    	$this->form_validation->set_rules('user_last_name', 'Last Name', 'trim|required|min_length[3]');
    	$this->form_validation->set_rules('user_email', 'Email', 'trim|required');
    	$this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[6]');
    	$this->form_validation->set_rules('day', 'Day', 'required');
    	$this->form_validation->set_rules('month', 'Month', 'required');
    	$this->form_validation->set_rules('year', 'Year', 'required');

    	if ($this->form_validation->run() != FALSE)
        {
            $this->registration->registration();
        }else{
        	echo validation_errors('<div class="error">', '</div>');
        }
    }

    public function otp_authentication(){
        $this->load->view('layouts/header');
        $this->load->view("users/signup_otp");
    }

    public function save_registration(){
        $this->form_validation->set_rules('otpnumber', 'OTP', 'required');
        if ($this->form_validation->run() != FALSE){
            $otp_number = $this->session->userdata("mobile_otp");
            $user_otp = $this->input->post("otpnumber");
            if($otp_number == $user_otp){
                $this->session->unset_userdata("mobile_otp");
                $this->registration->save_registration();
            }
        }else{
            echo validation_errors('<div class="error">', '</div>');
        }
    }
}