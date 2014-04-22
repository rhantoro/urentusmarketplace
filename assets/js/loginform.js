$('#loginAsRentee').click(function(e) {
	$('#loginAs').html("Login As Rentee");	
	$('#logintype').val("rentee");	
});

$('#loginAsRenter').click(function(e) {
	$('#loginAs').html("Login As Renter");
	$('#logintype').val("renter");
});

$('#submit').click(function() {
	emailaddress = $('#emailaddress').val();
	password = $('#password').val();
	logintype = $('#logintype').val();
			
	$.ajax({
		url: config.siteURL + "users/login/",
		data: "emailaddress="+emailaddress+"&password="+password+"&logintype="+logintype,
		type: 'post',
		success: function(result) {			
			if (result) {				
				document.location.href = config.siteURL+"pages/dashboard-user";
			} else {
				$('#msg').html("Email Address and Password is wrong");				
			}		
		},
		error: function(result) {
			alert("Error");
		}
	});
	return false;		
});

