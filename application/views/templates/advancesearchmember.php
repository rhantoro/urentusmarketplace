<div class="col-md-12" style="">
    <p class="caption">Advance Search Member Mode | <strong>Select Product</strong> </p>
    
    <div class="row" style="background-color: #fff;">
    	<div class="col-md-12">
    		<div class="col-md-3">
    		</div>
    		<div class="col-md-6">
    			<div class="col-md-4">
    				<div class="dashboard-stat yellow">                
    				<div class="visual">                    
    					<i class="icon-gear"></i>                        
    				</div>
                    
    				<div class="details">                    
    					<div class="number">    					
    					</div>                        
    					<div class="desc">                        
    						<a style="cursor:pointer" id="product_equipment">Equipment & Machinery</a>                            
    					</div>                        
    				</div>                    
    				<a class="more" style="cursor:pointer" id="product_equipment">View more <i class="m-icon-swapright m-icon-white"></i>
    				</a>    				
    				</div>      
	    		</div>
	    		<div class="col-md-4">
	    			<div class="dashboard-stat yellow">
                
    				<div class="visual">                    
    					<i class="icon-ticket"></i>                        
    				</div>
                    
    				<div class="details">                    
    					<div class="number">    					
    					</div>
                        
    					<div class="desc">                        
    						<a style="cursor:pointer" id="product_tools">Tools & Attachment</a>                            
    					</div>                        
    				</div>
                    
    				<a class="more" style="cursor:pointer" id="product_tools">View more <i class="m-icon-swapright m-icon-white"></i>
    				</a>    				
    			</div>         		
	    		</div>
	    		<div class="col-md-4">
	    			<div class="dashboard-stat yellow" style="margin-bottom:0;">
                
    				<div class="visual">                    
    					<i class="icon-pencil"></i>                        
    				</div>
                    
    				<div class="details">                    
    					<div class="number">    					
    					</div>
                        
    					<div class="desc">
    						<a style="cursor:pointer" id="product_parts">Component & Parts</a>
    					</div>
    				</div>
    				<a class="more" style="cursor:pointer" id="product_parts">View more <i class="m-icon-swapright m-icon-white"></i>
    				</a>
    				
    			</div>      
	    		</div>
    		</div>
    		<div class="col-md-3">
    		</div>
    	</div>
    	<div class="clearfix"> </div>
    	<h5 class="col-md-12" id="product_select">Product : </h5>
    	<form name="frmAdvanceSearchUser" id="frmAdvanceSearchUser" method="post" action="search/result/">
    	<input type="hidden" name="product_input" id="product_input" class="form-control" value=""/>
    	<input type="hidden" name="modes" id="modes" class="form-control" value="member"/>
    	<div class="col-md-12">
    		<div class="col-md-3" style="vertical-align: top;" style="padding: 2px;">
    			<select class="form-control" name="preference"> <option value="New">New</option> <option value="Used">Used</option><option value="Rent">Rent</option></select>
    			<br/>
    			<div id="the-industry" style="padding: 2px;">
    			Industry :<br/>
    			<select class="multiselect form-control" id="industry" name="industry" multiple="multiple"></select>
				</div>
    		</div>
    		<div class="col-md-3" style="vertical-align: top;">
    			<div id="the-category" style="padding: 2px;"><input type="text" name="category" id="category" size="40" class="typeahead form-control" placeholder="Please Type Category"></div>
    			<div id="the-sub-category" style="padding: 2px;"><input type="text" name="subcategory" id="subcategory" size="40" class="typeahead form-control" placeholder="Please Type Sub Category"></div>
    			<div id="the-attachment" style="padding: 2px;"><input type="text" name="attachment" id="attachment" size="40" class="typeahead form-control" placeholder="Please Type Attachment"></div>
    		</div>
    		<div class="col-md-3" style="vertical-align: top;">
    			<div id="the-brand" style="padding: 2px;"><input type="text" name="brand" id="brand" size="40" class="typeahead form-control" placeholder="Please Type Brand"></div>
    			<div id="the-model" style="padding: 2px;"><input type="text" name="model" id="model" size="40" class="typeahead form-control" placeholder="Please Type Model"></div>
    			<div id="the-capacity" style="padding: 2px;"><input type="text" name="capacity" id="capacity" size="40" class="typeahead form-control" placeholder="Please Type Capacity"></div>
    		</div>
    		<div class="col-md-3" style="vertical-align: top;">
    			<div id="the-yearmade" style="padding: 2px;"><input type="text" name="yearmade" id="yearmade" size="40" class="typeahead form-control" placeholder="Please Type Year Made"></div>
    			<div id="the-hourmeter" style="padding: 2px;"><input type="text" name="hourmeter" id="hourmeter" size="40" class="typeahead form-control" placeholder="Please Type Hour Meter"></div>
    			<div id="the-location" style="padding: 2px;"><input type="text" name="location" id="location" size="40" class="typeahead form-control" placeholder="Please Type Location"></div>
    		</div>
    	</div>
    	<div class="clearfix"> </div>
    	 <div class="col-md-10" id="msg"></div>
    	<div class="col-md-12" style="margin-top:15px;">
    		<div class="col-md-2"></div>
    		<div class="col-md-2"></div>
    		<div class="col-md-2">						
				<input class="form-control btn btn-primary" type="submit" name="submit" value="Find">
			</div>
        
			<div class="col-md-2">
				<input class="form-control btn btn-primary" type="reset" name="reset" value="Reset">
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
    	</div>   	
    	</form>
    	<div class="clearfix"> </div>
    	
        
        
        <div class="row col-md-6"  style="padding:20px;">
        
        
        </div>
        
        </div>
</div>
<script type="text/javascript" src="<?php echo asset_url('/js/advancesearchmember.js');?>"></script>