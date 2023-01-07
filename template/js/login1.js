$( document ).ready(function() {
	
});

$("#login").unbind("click").click(function() {
	let result = null;
	
	if ($("#username").val().trim() == "" || $("#password").val().trim() == "") {
		alert("Missing Input!");
	}else{
		ajax_data = {
			"function": "signin",
			"username": $("#username").val(),
			"pass": $("#password").val()
		}
		
		$.ajax({
			type: "POST",
			url: "controlers/login_controler.php",
			data:  ajax_data,
			success: function(response){
				result = JSON.parse(response);
				console.log(result);
				if (result["status"] == "SUCCESS") {
					location.href = 'home.html';
				}else{
					alert("Invalid Username or Password!");
					location.href = 'index.html';
				}
			},
			error: function (response) {
				console.log(response);
			}
	   });
	}
});

$("#signup").unbind("click").click(function () {
	location.href = '../../../../snippets/pages/user/login.php';
});