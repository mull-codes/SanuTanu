var base_url = $('#base_url').val();

function registeration_submit(id){
	var valid = signup_validations();
	if(valid == true){
		ajaxSubmit(id,"Data Submited");	
	}
}

$("form#registration_form input,select").on("focusout",function(){
	$('#user_first_name').css("border-color", "");
	$('#user_last_name').css("border-color", "");
	$('#user_email').css("border-color", "");
	$('#user_password').css("border-color", "");
	//$('#user_phone').css("border-color", "");
	$('#day').css("border-color", "");
	$('#month').css("border-color", "");
	$('#year').css("border-color", "");
	$('[data-toggle="popover"]').popover("hide");
    $('[data-toggle="popover"]').popover("disable");
	signup_validations();
});
// validations for login form
// function work for removel of errors
$("form#login_form input").on("focusout",function(){
	$('.Remove').css("border-color", "");
	$('[data-toggle="popover"]').popover("hide");
    $('[data-toggle="popover"]').popover("disable");
    Login_validations();
});
// validations function that will validate the input data
function Login_validations(){
	var Login_email = $("form#login_form #user_email_login").val();
	var Login_Password = $("form#login_form #user_password_login").val();
	if(Login_email=="")
	{
		$('#user_email_login').css("border-color", "red");
		$('#user_email_login').popover('enable');
		$('#user_email_login').popover('show');
	}else if(Login_Password=="")
	{
		$('#user_password_login').css("border-color", "red");
		$('#user_password_login').popover('enable');
		$('#user_password_login').popover('show');
	}
}
function signup_validations(){
	var user_first_name = $("form#registration_form #user_first_name").val();
	var user_last_name = $("form#registration_form #user_last_name").val();
	var user_email = $("form#registration_form #user_email").val();
	var user_password = $("form#registration_form #user_password").val();
	//var user_phone = $("form#registration_form #user_phone").val();
	var day = $("form#registration_form #day").val();
	var month = $("form#registration_form #month").val();
	var year = $("form#registration_form #year").val();
	var user_gender = $("form#registration_form input[name=user_gender]:checked").val();
	if(user_first_name == "" || user_first_name.length <3){
		$('#user_first_name').css("border-color", "red");
		$('#user_first_name').popover();
		$('#user_first_name').popover('enable');
		$('#user_first_name').popover('show');
		return false;
	}else if(user_last_name == "" ||user_last_name.length <3){
		$('#user_last_name').css("border-color", "red");
		$('#user_last_name').popover('enable');
		$('#user_last_name').popover('show');
		return false;
	// }else if(user_phone == "" ||user_phone.length <11){
	// 	$('#user_phone').css("border-color", "red");
	// 	$('#user_phone').popover();
	}else if(user_email == ""){
		$('#user_email').css("border-color", "red");
		$('#user_email').popover('enable');
		$('#user_email').popover('show');
		return false;
	}else if(user_password == "" || user_password.length <6){
		$('#user_password').css("border-color", "red");
		$('#user_password').popover('enable');
		$('#user_password').popover('show');
		return false;
	}else if(day == null || month == null || year == null){
		$('#day').css("border-color", "red");
		$('#month').css("border-color", "red");
		$('#year').css("border-color", "red");
		$('#DateOfbirth').popover('enable');
		$('#DateOfbirth').popover('show');
		return false;
	}else{
		return true;
	}
}

function ajaxSubmit(form_id,after_submit = ''){
	/* -- second parameter for display message 
	on success -- */ 
	var form_action = $("#"+form_id).attr('action');
	$.ajax({
		type: "POST",
		url: base_url+form_action,
		data:$("#"+form_id).serialize(),
		success:function(res){
			console.log(res);
			if(res == "success"){
				$("#"+form_id).trigger("reset");
				window.location.href = base_url+"index.php/users/login/otp_authentication";
			}else if(res == "exists"){
				alert("Email already exists");
			}
		}
	});
}

function login_submit(form_id){
	Login_validations();
	var form_action = $("#"+form_id).attr('action');
	$.ajax({
		type: "POST",
		url: base_url+form_action,
		data:$("#"+form_id).serialize(),
		success:function(res){
			if(res == "success"){
				$("#"+form_id).trigger("reset");
				window.location.href = base_url+"index.php/home/login";
			}
		}
	});
}

function edit_profile_picture(id){
	$.ajax({
		type:"post",
		url: base_url+"index.php/users/userprofile/edit_profile_cover",
		data:{"id":"cover"},
		success:function(res){
			$('.timeline-cover').css({"background-image": "<?php echo base_url('assets/images/background_image.png'); ?>", "color": "red !important"});
            console.log("ok2!");
		}
	});
}

function OtpValidation(){
	$.ajax({
		type:"post",
		url: base_url+"index.php/users/login/save_registration",
		data:$("#otp_form").serialize(),
		success:function(res){
			if(res == "inserted"){
				var html = "<p style='font-size:15px;'>You have to successfully confirmed your account.</p>";
				$("#m_body").html(html);
				$('#myModal').modal('show');
				window.location.href = base_url+"index.php/friends/friends/friends_suggestion";
			}else{
				var html = "<p style='font-size:15px;'>Please enter your otp again.</p>";
				$("#m_body").html(html);
				$('#myModal').modal('show');
				$("#otp_form").trigger("reset");
			}
		}
	});
}

function send_friend_request(id){
	if(id){
		
		$.ajax({
			type: "POST",
			url: base_url + "index.php/friends/friends/friend_requests",
			data: {"id":id},
			success:function(res){
				if(res == "requested"){
					$("button#"+id).html("Cancel");
					$("button#"+id).removeClass("btn-success");
					$("button#"+id).addClass("btn-default");
				}
			}
		});
	}
}