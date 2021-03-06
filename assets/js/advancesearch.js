$(document).ready(function() {
	
	$('#div_part_number').hide();
	
	var substringMatcher = function(strs) {
		return function findMatches(q, cb) {
		var matches, substringRegex;
		 
		// an array that will be populated with substring matches
		matches = [];
		 
		// regex used to determine if a string contains the substring `q`
		substrRegex = new RegExp(q, 'i');
		 
		// iterate through the pool of strings and for any string that
		// contains the substring `q`, add it to the `matches` array
		$.each(strs, function(i, str) {
		if (substrRegex.test(str)) {
		// the typeahead jQuery plugin expects suggestions to a
		// JavaScript object, refer to typeahead docs for more info
		matches.push({ value: str });
		}
		});
		 
		cb(matches);
		};
		};
		
		
		
		$.getJSON(config.siteURL + "category/getalldata/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['categorycode']);		        
		    });
		    var theCategory = items;
		    
		    $('#the-category .typeahead').typeahead(
					{
						hint: true,
						highlight: true,
						minLength: 1
					},
					{
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(theCategory)
					}
				);
		});
		
		$.getJSON(config.siteURL + "brand/getalldata/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['brandcode']);		        
		    });
		    var theCategory = items;
		    
		    $('#the-brand .typeahead').typeahead(
					{
						hint: true,
						highlight: true,
						minLength: 1
					},
					{
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(theCategory)
					}
				);
		}); 
		
		$.getJSON(config.siteURL + "location/getallprovince/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['provincecode']);		        
		    });
		    var theCategory = items;
		    
		    $('#the-location .typeahead').typeahead(
					{
						hint: true,
						highlight: true,
						minLength: 1
					},
					{
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(theCategory)
					}
				);
		}); 
		
		$('#product_equipment').click(function(e) {
			$('#product_select').html("Product : Equipment & Machinery");	
			$('#product_input').val("EQPMAC");
			$('#div_part_number').hide();
			$('#div_preference').show();
		});

		$('#product_tools').click(function(e) {
			$('#product_select').html("Product : Tools & Attachment");
			$('#product_input').val("TOLATC");
			$('#div_part_number').hide();
			$('#div_preference').show();
		});
		
		$('#product_parts').click(function(e) {
			$('#product_select').html("Product : Component & Parts");
			$('#product_input').val("COMPAR");
			$('#div_part_number').show();
			$('#div_preference').hide();
		});
		
		$('#frmAdvanceSearchUser').submit(function( event ) {
			if ( $('#product_input').val() == "") {
				$('#msg').html("Please select product first").show().fadeOut( 3000 );
				return false;
			} else {			 	
				return true;				
			}
		});
		
})

