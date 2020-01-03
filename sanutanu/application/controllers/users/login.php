<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper('url');
            $this->load->library('email');

		// $config['protocol'] = 'smtp';
		// $config['smtp_host'] = 'ssl://smtp.googlemail.com';
		// $config['smtp_user'] = 'its.techsupport@gmail.com';
		// $config['smtp_pass'] = '03328140718';
		// $config['smtp_port'] = 465;
		 
		// $config['charset'] = 'utf-8';
		// $config['mailtype'] = 'html';
		// $config['newline'] = "\r\n";
		// ini_set("SMTP","ssl://smtp.gmail.com");
		// ini_set("smtp_port","465");
    }

    public function user_login(){
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[8]');

        if ($this->form_validation->run() != FALSE)
        {
            $this->registration->user_login();
        }else{
            echo validation_errors('<div class="error">', '</div>');
        }
    }

    public function save_registration(){
    	$this->form_validation->set_rules('user_first_name', 'First Name', 'trim|required|min_length[3]');
    	$this->form_validation->set_rules('user_last_name', 'Last Name', 'trim|required|min_length[3]');
    	$this->form_validation->set_rules('user_email', 'Email', 'trim|required|valid_email');
    	$this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[8]');
    	$this->form_validation->set_rules('day', 'Day', 'required');
    	$this->form_validation->set_rules('month', 'Month', 'required');
    	$this->form_validation->set_rules('year', 'Year', 'required');

    	if ($this->form_validation->run() != FALSE)
        {
            $this->registration->save_registration();
        }else{
        	echo validation_errors('<div class="error">', '</div>');
        }
    	
            // $account_sid = 'AC72319f9ac98742d1f89f83a1f3e42b98';
            // $auth_token = '544429fd0641108c6d18c489bac83ea4';
            // $twilio_number = "+12066735546";

            // $client = new Client($account_sid, $auth_token);
            // $client->messages->create(
            // '00923016171706',
            // array(
            // 'from' => $twilio_number,
            // 'body' => 'I sent this message in under 10 minutes!'
            // )
            // );
    }
}