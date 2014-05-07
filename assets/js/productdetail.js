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
	
	var cookieValue = $.cookie("id_chk");	
	if (cookieValue != "" && cookieValue != "undefined" && cookieValue != null) {
		var spl = cookieValue.split(';'); 
		for (i=1; i < (spl.length); i++ ) {	
			//alert(spl[i]);
			$('#check_'+spl[i]).prop('checked', true);
		}
		$('#id_checks').val(cookieValue);
	}	
	//$.removeCookie("id_chk");
	
})

function compareData(id_check) {
	var chk = $('#check_'+id_check).prop('checked');
	if (chk) {
		var valchk = ";"+id_check;		
		$('#id_checks').val($('#id_checks').val()+valchk);
		$.cookie("id_chk", $('#id_checks').val());
	} else {
		var spl = $('#id_checks').val().split(';');
		var chkvalue = ""; 
		var chkval = "";
		
		for (i=1; i < (spl.length); i++ ) {			
			if (spl[i] != id_check) {
				chkval = ";"+spl[i];				
			} else {
				chkval = "";
			}		
			chkvalue = chkvalue + "" + chkval;			
		}
		$('#id_checks').val(chkvalue);
		$.cookie("id_chk", $('#id_checks').val());
	}
	
}