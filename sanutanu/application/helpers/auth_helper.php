<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function mobile_auth(){
	$ci =& get_instance();
	$account_sid = 'AC72319f9ac98742d1f89f83a1f3e42b98';
    $auth_token = '544429fd0641108c6d18c489bac83ea4';
    $twilio_number = "+12066735546";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
	    '00923016171706',
	    array(
		    'from' => $twilio_number,
		    'body' => 'I sent this message in under 10 minutes!'
	    )
    );
}

?>