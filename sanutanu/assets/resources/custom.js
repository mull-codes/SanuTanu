var base_url = $('#base_url').val();

function registeration_submit(id){
	var valid = signup_validations();
	if(valid == true){
		ajaxSubmit(id,"Data Submited");	
	}
}

$("form#registration_form input,select").on("keyup change",function(){
	signup_validations();
});
function signup_validations(){
	var user_first_name = $("form#registration_form #user_first_name").val();
	var user_last_name = $("form#registration_form #user_last_name").val();
	var user_email = $("form#registration_form #user_email").val();
	var user_password = $("form#registration_form user_password").val();
	var day = $("form#registration_form #day").val();
	var month = $("form#registration_form #month").val();
	var year = $("form#registration_form #year").val();
	var user_gender = $("form#registration_form input[name=user_gender]:checked").val();
	if(user_first_name == "" || user_last_name == "" || user_email == "" || user_password == "" || day == "" || month == "" || year == ""){
		$('[data="popover"]').popover("show");
		return false;
	}else{
		$('[data="popover"]').popover("hide");
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
