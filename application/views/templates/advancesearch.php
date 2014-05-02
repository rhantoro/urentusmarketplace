<div class="col-md-12" style="">
    <p class="caption">Advance Search Mode | <strong>Select Product</strong> </p>
    
    <div class="row" style="background-color: #fff;">
    
        <div class="row col-md-6" style="padding:20px;">
        		
    		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
            
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
            
    		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
            
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
    				<!--  <a href="<?php echo site_url('travel_advances/request'); ?>">-->
    					<!-- <img src="<?php echo asset_url('/images/request_icon.png'); ?>" /> -->
    					<!-- <strong>Request</strong>-->
    				<!-- </a>-->
    			</div>
                
    		</div>
            
    		<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
            
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
    				<!--  <a href="<?php echo site_url('travel_advances/request'); ?>">-->
    					<!-- <img src="<?php echo asset_url('/images/request_icon.png'); ?>" /> -->
    					<!-- <strong>Request</strong>-->
    				<!-- </a>-->
    			</div>
    		</div>
    	</div>
        
        <div class="row col-md-6"  style="padding:20px;">
        <h5 class="col-md-12" id="product_select">Product : </h5>
		<form name="frmAdvanceSearchUser" id="frmAdvanceSearchUser" method="post" action="search/result/">
		<input type="hidden" name="product_input" id="product_input" class="form-control" value=""/>
		<input type="hidden" name="modes" id="modes" class="form-control" value="public"/>
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:30px;" id="div_preference">
			 <select class="form-control" name="preference"> <option value="New">New</option> <option value="Used">Used</option><option value="Rent">Rent</option></select>
		</div>
        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:30px;" id="div_part_number">
			<div id="the-part"><input type="text" name="partnumber" id="partnumber" size="40" class="typeahead form-control" placeholder="Please Type Part Number"></div>	
		</div>
		
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:30px;">
			<div id="the-category"><input type="text" name="category" id="category" size="40" class="typeahead form-control" placeholder="Please Type Category"></div>	
		</div>
        		
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:30px;">
			<div id="the-brand"><input type="text" name="brand" id="brand" size="40" class="typeahead form-control" placeholder="Please Type Brand"></div>
		</div>
        
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12" style="margin-bottom:30px;">
			<div id="the-location"><input type="text" name="location" id="location" size="40" class="typeahead form-control" placeholder="Please Type Location"></div>
		</div>
        <div class="col-md-10" id="msg"></div>
		<div class="col-md-3">						
			<input class="form-control btn btn-primary" type="submit" name="submit" value="Find">
		</div>
        
		<div class="col-md-3">
				<input class="form-control btn btn-primary" type="reset" name="reset" value="Reset">
		</div>
		</form>
        
        </div>
        
        </div>
</div>
<script type="text/javascript" src="<?php echo asset_url('/js/advancesearch.js');?>"></script>