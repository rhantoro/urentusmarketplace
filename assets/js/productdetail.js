$(document).ready(function() {
	$('#start_date_picker').datetimepicker({
        pickTime: false
	 });
	 $('#end_date_picker').datetimepicker({
	        pickTime: false
	 });
	 
	
	$('#submit-inquiry').click(function(e) {
		document.location.href = config.siteURL + "product/notification/";	
	});
	
	$('#continue-shop').click(function(e) {
		document.location.href = config.siteURL;	
	});
})

