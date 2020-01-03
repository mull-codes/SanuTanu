var base_url = $('#base_url').val();

function registeration_submit(id){
	var valid = signup_validations();
	if(valid == true){
		ajaxSubmit(id,"Data Submited");	
	}
}

$("form#registration_form input,select").on("focusout focus",function(){
	$('#user_first_name').css("border-color", "");
	$('#user_last_name').css("border-color", "");
	$('#user_email').css("border-color", "");
	$('#user_password').css("border-color", "");
	//$('#user_phone').css("border-color", "");
	$('#day').css("border-color", "");
	$('#month').css("border-color", "");
	$('#year').css("border-color", "");
	$('[data="popover"]').popover("hide");
	signup_validations();
});
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
		return false;
	}else if(user_last_name == "" ||user_last_name.length <3){
		$('#user_last_name').css("border-color", "red");
		$('#user_last_name').popover();
		return false;
	// }else if(user_phone == "" ||user_phone.length <11){
	// 	$('#user_phone').css("border-color", "red");
	// 	$('#user_phone').popover();
	}else if(user_email == ""){
		$('#user_email').css("border-color", "red");
		$('#user_email').popover();
		return false;
	}else if(user_password == "" || user_password.length <6){
		$('#user_password').css("border-color", "red");
		$('#user_password').popover();
		return false;
	}else if(day == null || month == null || year == null){
		$('#day').css("border-color", "red");
		$('#month').css("border-color", "red");
		$('#year').css("border-color", "red");
		$('#year').popover();
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
			//$("#"+form_id).trigger("reset");
			if(after_submit != ""){
				alert(after_submit);
			}
		}
	});
}

function login_submit(form_id){
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