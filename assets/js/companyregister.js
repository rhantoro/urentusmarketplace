$(document).ready(function() {
	

	$('#loginAsRentee').click(function(e) {
		$('#loginAs').html("Login As Rentee");	
		$('#logintype').val("rentee");	
	});
	
	$('#loginAsRenter').click(function(e) {
		$('#loginAs').html("Login As Renter");
		$('#logintype').val("renter");
	});
	
	$('#submit').click(function() {		
		var data = $('body form').serialize();			
		$.ajax({
			url: config.siteURL + "company/submitregistercompany/",
			data: data,
			type: 'post',
			success: function(data) {			
				if (data.message == "") {
					$('#msg').html(data.message);
				} else {
					$('#msg').html(data.message);				
				}		
			},
			error: function(data) {
				alert("Error");
			}
		});
		return false;		
	});

	$.getJSON(config.siteURL + "location/getallprovince/", function(data){
			$("#province").append("<option value=''></option>");
	        $.each(data.data, function(index,item) {
	           $("#province").append("<option value=\'" + item.provincecode + "\' >" + item.provincecode + "</option>"); 
	        });	      
	});
	
	$('#province').change(function() {	
		var value = $(this).val();
		$.getJSON(config.siteURL + "location/getcitybyprovince/"+value, function(data){
			$('#city').find('option').remove();
			
			$("#city").append("<option value=''></option>");
	        $.each(data.data, function(index,item) {
	           $("#city").append("<option value=\'" + item.citycode + "\' >" + item.citycode + "</option>"); 
	        });	      
		});
	});
	
	function randomString(len, charSet) {
	    charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	    var randomString = '';
	    for (var i = 0; i < len; i++) {
	    	var randomPoz = Math.floor(Math.random() * charSet.length);
	    	randomString += charSet.substring(randomPoz,randomPoz+1);
	    }
	    return randomString;
	}
	
	
});