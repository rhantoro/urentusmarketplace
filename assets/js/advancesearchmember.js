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
		
		var configurationSet = {
			includeSelectAllOption: true,
			buttonWidth: '300px'
		};
	
		 function rebuildMultiselect(options) {
			 $('#industry').multiselect('refresh',options);
		 }
		
		$.getJSON(config.siteURL + "industry/getalldata/", function(data){			
			$("#industry").append("<option value='multiselect-all'> Select all</option>");			
	        $.each(data.data, function(index,item) {
	           $("#industry").append("<option value=\'" + item.industrycode + "\' >" + item.industrycode + "</option>"); 
	        });	   
	        rebuildMultiselect(configurationSet);
		});
		
		
		
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
		
		$.getJSON(config.siteURL + "subcategory/getalldata/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['subcategorycode']);		        
		    });
		    var theSubCategory = items;
		    
		    $('#the-sub-category .typeahead').typeahead(
					{
						hint: true,
						highlight: true,
						minLength: 1
					},
					{
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(theSubCategory)
					}
				);
		});
		
		$.getJSON(config.siteURL + "attachmenttool/getalldata/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['attachmenttoolcode']);		        
		    });
		    var theCategory = items;
		    
		    $('#the-attachment .typeahead').typeahead(
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
		
		$.getJSON(config.siteURL + "model/getalldata/", function(data){
			var items = [];
		    $.each(data.data, function (key,val) {
		        items.push(val['modelcode']);		        
		    });
		    var theModel = items;
		    
		    $('#the-model .typeahead').typeahead(
					{
						hint: true,
						highlight: true,
						minLength: 1
					},
					{
						name: 'states',
						displayKey: 'value',
						source: substringMatcher(theModel)
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
			$('#the-attachment').hide();
			$('#the-industry').show();
			$('#the-hourmeter').show();
			$('#the-capacity').show();
			$('#the-yearmade').show();
		});

		$('#product_tools').click(function(e) {
			$('#product_select').html("Product : Tools & Attachment");
			$('#product_input').val("TOLATC");
			$('#the-attachment').show();
			$('#the-industry').hide();
			$('#the-hourmeter').hide();
			$('#the-yearmade').show();
			$('#the-capacity').show();
		});
		
		$('#product_parts').click(function(e) {
			$('#product_select').html("Product : Component & Parts");
			$('#product_input').val("COMPAR");
			//$('#div_part_number').show();
			$('#the-industry').show();
			$('#the-attachment').hide();
			$('#the-hourmeter').hide();
			$('#the-capacity').hide();
			$('#the-yearmade').hide();
			
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

