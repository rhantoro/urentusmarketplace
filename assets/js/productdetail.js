$(document).ready(function() {
	
	$('#start_date').datepicker({
		 todayBtn: true,
		 autoclose: true,
		 todayHighlight: true,
		 format: 'MM d, yyyy'
	});
	
	$('#end_date').datepicker({
		 todayBtn: true,
		 autoclose: true,
		 todayHighlight: true,
		 format: 'MM d, yyyy'
	});
	
	$('#submit-inquiry').click(function(e) {
		document.location.href = config.siteURL + "product/notification/";	
	});
	
	$('#continue-shop').click(function(e) {
		document.location.href = config.siteURL;	
	});
})

