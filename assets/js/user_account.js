$(document).ready(function() {
	
	$('#list_user_account').dataTable({
		"bLengthChange": false,
		"bFilter": false,
        "bProcessing": true,
        "bServerSide": true,
		"sPaginationType": "full_numbers",
		"fnServerData": function (sSource, aoData, fnCallback, oSettings) {
			var url = config.siteURL  + "users/get_list_user_account";
			if ($('select[name="search_by"]').val().trim() != '') {
        		var criteria = $('select[name="search_by"]').val() + "/" + $('input[name="search_term"]').val().trim();
        		url = config.siteURL  + "users/get_list_user_account/" + criteria;
        	}    
			
			oSettings.jqXHR = $.ajax({
		        "dataType": 'json',
		        "type": "POST",
		        "url": url,
		        "data": aoData,
		        "success": fnCallback
		    });
		},
		"sServerMethod": "POST",
		"aoColumns": [
			{ "mData": "iduseraccess", "bSortable": false },
            { "mData": "userid"},
            { "mData": "fullname" },
            { "mData": "emailaddress" },
            { "mData": "isactive" },   
            { "mData": "usertype" },
 			{ "mData": "iduseraccess", "bSortable": false, "mRender": function(data) {
				var actionData = '<a href="' + config.siteURL + '/users/view/' + data + '">View</a>';
				return actionData;
			}},
			
		],
		"aaSorting": [[ 1, 'asc' ]],
		"fnInfoCallback": function( oSettings, iStart, iEnd, iMax, iTotal, sPre ) {
			var that = this;
			var i = iStart;
			this.$('td:first-child', {"filter":"applied"}).each(function () {
				that.fnUpdate( i++, this.parentNode, 0, false, false );
			});
			return "Showing " + iStart + " to " + iEnd + " of " + iTotal + " entries ";
		},
		"fnServerParams": function(aoData) {
            aoData.push({
				name: config.csrf_token_name,
				value: $.cookie(config.csrf_cookie_name)
			});    
		}
    });
	
	$('#search_request').click(function(e) {
		e.preventDefault();
		oTable = $('#requests_list').dataTable();
		oTable.fnDraw();
	});
	
});