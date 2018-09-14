$(document).ready(function(){
	$("#register_form").on("submit",function(){
		var DOMAIN = "http://localhost/inventory/public_html"
		var status = false;
		var fullName = $("#fullName");
		var name = $("#username");
		var email = $("#email");
		var pass1 = $("#password");
		var pass2 = $("#password2");
		var type = $("#usertype");
		//test.test@gmail.com
		var e_patt = new RegExp(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);
		if (fullName.val() == "") {
			fullName.addClass("border-danger");
			$("#fn_error").html("<span class='text-danger'>Please Enter your Full Name.</span>");
			status = false;
		}else{
			fullName.removeClass("border-danger");
			$("#fn_error").html("");
			status = true;
		}
		if (name.val() == "" || name.val().length < 6) {
			name.addClass("border-danger");
			$("#u_error").html("<span class='text-danger'>Please Enter Username and should more than 6 char.</span>");
			status = false;
		}else{
			name.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
		}
		if (!e_patt.test(email.val())) {
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address.</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html('<span id="e_error" class="form-text text-muted">We\'ll never share your email with anyone else.</span>');
			status = true;
		}
		if (pass1.val() == "" || pass1.val().length < 6) {
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Please Enter more than 6 digit Password.</span>");
			status = false;
		}else{
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}
		if (pass2.val() == "" || pass2.val().length < 6) {
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Please Enter more than 6 digit Password.</span>");
			status = false;
		}else{
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		}
		if (type.val() == "") {
			type.addClass("border-danger");
			$("#t_error").html("<span class='text-danger'>Please Choose Usertype.</span>");
			status = false;
		}else{
			type.removeClass("border-danger");
			$("#t_error").html("");
			status = true;
		}
		if ((pass1.val() == pass2.val()) && status == true) {
			$.ajax({
				url : DOMAIN + "/includes/process.php",
				method : "POST",
				data : $("#register_form").serialize(),
				success : function(data){
					if (data == "EMAIL_ALREADY_EXISTS") {
						alert("It");
					}
				}
			})
		}else{
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Password is not matched.</span>");
			status = true;
		}
	})
})

