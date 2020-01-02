var base_url = $('#base_url').val();
function registeration_submit(id){
	var country_code = $('div#User_PhoneNumber button#btn-country span.btn-cc').text();
	var num = document.getElementById('phoneNumber').value;
	alert(country_code);
	alert(num);
	var valid = signup_validations();
	if(valid == true){
		ajaxSubmit(id,"Data Submited");	
	}
}
$('#phoneNumber').on('keypress', function(ev) {
	debugger;
    var keyCode = window.event ? ev.keyCode : ev.which;
    //codes for 0-9
    if (keyCode < 48 || keyCode > 57) {
        //codes for backspace, delete, enter
        if (keyCode != 0 && keyCode != 8 && keyCode != 13 && !ev.ctrlKey) {
            ev.preventDefault();
        }
    }
});

// LIst check list register or login validations removel

$("ul#list1").on('click',function(){
	var id =$("#list1 li.active").attr('id');

	if(id=="register1"){
		document.getElementById('user_first_name').style.borderColor='';
	         	    		$('#user_first_name').popover("hide");
	    document.getElementById('user_last_name').style.borderColor='';
	         	    		$('#user_last_name').popover("hide");
	    document.getElementById('user_email').style.borderColor='';
	         	    		$('#user_email').popover("hide");
	    document.getElementById('user_password').style.borderColor='';
	         	    		$('#user_password').popover("hide"); 
	    document.getElementById('day').style.borderColor='';
		document.getElementById('month').style.borderColor='';
		document.getElementById('year').style.borderColor='';    	    		     	    		
		$('#day').popover("hide");$('#month').popover("hide");
		$('#year').popover("hide");
	}else if(id=="login1"){
		document.getElementById('user_email_Login').style.borderColor='';
	         	    		$('#user_email_Login').popover("hide");
	    document.getElementById('user_password_Log').style.borderColor='';
	         	    		$('#user_password_Log').popover("hide");
	}

});

// validations function for register and login forms on foucus out 
  
function Form_validations(F_data){
	debugger;
	var Password_rxp = /^(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
	var Name_RXP = /^[a-zA-Z\s ]{3,50}$/;
	var Email_RXP = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var InputName = F_data.name;
	var InputValue = F_data.value;
	var InputId = F_data.id;
// chek for user first name 
// it will check field is empty or pattren
if(InputName=="user_first_name")
  {

	if((InputValue==null || InputValue==""))
       {
       	document.getElementById('user_first_name').style.borderColor='red';
	 $('#user_first_name').popover('enable');
	 $('#user_first_name').popover('show');
	      return false;
        }
         else if(!(InputValue.match(Name_RXP)))
         	    {
         	    		document.getElementById('user_first_name').style.borderColor='red';
         	    		$('#user_first_name').popover('enable');
	                     $('#user_first_name').popover('show');
         	    } 
         	    else 
         	    {
         	    	document.getElementById('user_first_name').style.borderColor='';
         	    		$('#user_first_name').popover("disable");
         	    		return true;
         	    }
// chek for user last name 
// it will check field is empty or pattren
  } else if(InputName=="user_last_name")
               {
  	        if((InputValue==null || InputValue==""))
                     {
       	document.getElementById('user_last_name').style.borderColor='red';
	 $('#user_last_name').popover('enable');
	 $('#user_last_name').popover('show');
	      return false;
                     }
         else if(!(InputValue.match(Name_RXP)))
         	    {
         	    		document.getElementById('user_last_name').style.borderColor='red';
         	    		$('#user_last_name').popover('enable');
	                    $('#user_last_name').popover('show');
	      return false;
         	    }
         	    else 
         	    {
         	    	document.getElementById('user_last_name').style.borderColor='';
         	    		$('#user_last_name').popover("disable");
         	    		return true;
         	    }
  }
  // chek for user email for login
// it will check field is empty or pattren
     else if(InputName=="user_email")
     { if(InputId=="user_email_Login")
 {
     	if((InputValue==null || InputValue==""))
                     {
       	document.getElementById('user_email_Login').style.borderColor='red';
	                    $('#user_email_Login').popover('enable');
	                    $('#user_last_name').popover('show');
	      return false;
                     }
                     else if(!(InputValue.match(Email_RXP)))
                             {
                             	document.getElementById('user_email_Login').style.borderColor='red';
	                             $('#user_email_Login').popover('enable');
	                             $('#user_last_name').popover('show');
                             }else 
         	    {
         	    	document.getElementById('user_email_Login').style.borderColor='';
         	    		$('#user_email_Login').popover("disable");
         	    		return true;
         	    }
         	     // chek for user email for rigisteration 
// it will check field is empty or pattren
}else if(InputId="user_email")
{
if((InputValue==null || InputValue==""))
                     {
       	document.getElementById('user_email').style.borderColor='red';
	                    $('#user_email').popover('enable');
	                    $('#user_email').popover('show');
	      return false;
                     }
                     else if(!(InputValue.match(Email_RXP)))
                             {
                             	document.getElementById('user_email').style.borderColor='red';
	                              $('#user_email').popover('enable');
	                              $('#user_email').popover('show');
                             }else 
         	    {
         	    	document.getElementById('user_email').style.borderColor='';
         	    		$('#user_email').popover("disable");
         	    		return true;
         	    }	
}

     } else if(InputName=="user_password")
       {
       	 // chek for user password for login 
// it will check field is empty or pattren
       	if(InputId=="user_password_Log")
       	{
       	if((InputValue==null || InputValue==""))
                     {
       	document.getElementById('user_password_Log').style.borderColor='red';
	                    $('#user_password_Log').popover('enable');
	                    $('#user_password_Log').popover('show');
	      return false;
                     }else if(!(InputValue.match(Password_rxp)) )
                     {
                     		document.getElementById('user_password_Log').style.borderColor='red';
	                        $('#user_password_Log').popover('enable');
	                    $('#user_password_Log').popover('show');
	                             return false;
                     } 
         	    {
         	    	document.getElementById('user_password_Log').style.borderColor='';
         	    		$('#user_password_Log').popover("disable");
         	    		return true;
         	    } 
                   // chek for user password for rigisterations
// it will check field is empty or pattren   
       } else if(InputId="user_password")
       {
       	if((InputValue==null || InputValue==""))
                     {
       	document.getElementById('user_password').style.borderColor='red';
	                     $('#user_password').popover('enable');
	                    $('#user_password').popover('show');

	      return false;
                     }else if(!(InputValue.match(Password_rxp)) )
                     {
                     		document.getElementById('user_password').style.borderColor='red';
	                         $('#user_password').popover();
	                        $('#user_password').popover();
	                             return false;
                     } 
         	    {
         	    	document.getElementById('user_password').style.borderColor='';
         	    		$('#user_password').popover("disable");
         	    		return true;
         	    } 
       }
}

}
// function for rmovel of validations on input when user start typing during error
// it will remove all validations errors from all fields 
function Remove_Validations()
{
	    document.getElementById('user_first_name').style.borderColor='';
		document.getElementById('user_last_name').style.borderColor='';
		document.getElementById('user_email').style.borderColor='';
		document.getElementById('user_password').style.borderColor='';
		document.getElementById('day').style.borderColor='';
		document.getElementById('month').style.borderColor='';
		document.getElementById('year').style.borderColor='';
						  $('[data="popover"]').popover("hide");
						  $('[data="popover"]').popover("dispose");

}
// this function work when sing up button hit
// it will show error on every feilds 
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
		  document.getElementById('user_first_name').style.borderColor='red';
				document.getElementById('user_last_name').style.borderColor='red';
					document.getElementById('user_email').style.borderColor='red';
						document.getElementById('user_password').style.borderColor='red';
						document.getElementById('day').style.borderColor='red';
						document.getElementById('month').style.borderColor='red';
						document.getElementById('year').style.borderColor='red';
						  $('[data="popover"]').popover("show");

		return false;


	}else{
		                 document.getElementById('day').style.borderColor='';
						document.getElementById('month').style.borderColor='';
						document.getElementById('year').style.borderColor='';
		$('[data="popover"]').popover("disable");
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
	registeration_submit(id)
	var form_action = $("#"+form_id).attr('action');
	$.ajax({
		type: "POST",
		url: base_url+form_action,
		data:$("#"+form_id).serialize(),
		success:function(res){
			//$("#"+form_id).trigger("reset");
		}
	});
}