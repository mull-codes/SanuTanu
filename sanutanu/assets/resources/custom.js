var base_url = $('#base_url').val();

function registeration_submit(id){
	var user_first_name = $("#user_first_name").val();
	var user_last_name = $("#user_last_name").val();
	var user_email = $("#user_email").val();
	var user_password = $("#user_password").val();
	var day = $("#day").val();
	var month = $("#month").val();
	var year = $("#year").val();
	var user_gender = $("input[name=user_gender]:checked").val();
	if(user_first_name != "" && user_last_name != "" && user_email != "" && user_password != "" && day != "" && month != "" && year != ""){
		ajaxSubmit(id,"Success");
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
			$("#"+form_id).trigger("reset");
			if(after_submit != ""){
				alert(after_submit);
			}
		}
	});
}
