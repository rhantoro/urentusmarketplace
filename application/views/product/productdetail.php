<div class="row" style="background: #fff;border-bottom:2px solid #ddd">

    <div class="col-md-12">
    
        <div class="col-md-5">
        
            <h4 class="widget-header section-title">Product Detail</h4>
            
            <div class="imageBox_theImage add_bottom_15">
            
                <?php if (count($aaDataPhoto) > 0) {  ?>
                <img src="<?php echo asset_url('/photo_products/'.$id_product.'/'.$aaDataPhoto[0]->originalfilename); ?>" height="250px;">
                <?php } else { ?>
                image none
                <?php } ?>
                
            </div>
            
            <div class="desc add_bottom_15">
            
                <ul class="list-unstyled">
                
                    <li class="add_bottom_5"> <strong><?php echo $aaData[0]->equipmentname; ?></strong></li>
                    
                    <li class="add_bottom_5"> <strong>Specification</strong></li>
                    
                    <li class="add_bottom_5"> <?php echo $aaData[0]->specification; ?></li>
                    
                    <li class="add_bottom_5"> <strong>Description</strong></li>
                    
                    <li class="add_bottom_5"> <?php echo $aaData[0]->description; ?></li>
                    
                </ul>
            </div>
            
        </div>
        
        <div class="col-md-7">
        
            <h4 class="widget-header section-title">Company Detail</h4>
            
            <div class="row add_bottom_5">
            
                <div class="col-md-4"><i class="icon-map-marker add_margin_right_10"></i> Company</div><div class="col-md-8"> : <?php echo $aaData[0]->companyname; ?></div>
                
            </div>
            
            <div class="row add_bottom_5">
                
                <div class="col-md-4"><i class="icon-home add_margin_right_10"></i>Address</div><div class="col-md-8"> : <?php echo $aaData[0]->companyaddress; ?></div>
                
            </div>
            
            <div class="row add_bottom_5">
                
                <div class="col-md-4"><i class="icon-phone add_margin_right_10"></i>Contact Number</div><div class="col-md-8"> : <?php echo $aaData[0]->companyemailaddress; ?></div>
            
            </div>
            
            <div class="row add_bottom_5">
            
                <div class="col-md-4"><i class="icon-user add_margin_right_10"></i>PIC</div><div class="col-md-8"> : <?php echo $aaData[0]->companyname; ?></div>
            
            </div>
            
            <div class="row add_bottom_5">
            
                <div class="col-md-4"><i class="icon-globe add_margin_right_10"></i>Website</div><div class="col-md-8"> : <?php echo $aaData[0]->companyname; ?></div>
                
            </div>
            
        </div>
        
        <div class="col-md-7">
        
            <h4 class="widget-header section-title">Location Info</h4>
            
            <table class="table  table-hover general-table">            
            <thead>            
            <tr>            
                <th>#</th><th>#</th><th>#</th>                
            </tr>            
            </thead>            
            <tbody>
            
            <?php  foreach($aaDataLocation as $key=>$value){ ?>
            
            <tr>        
            	<td><?php echo $value->city; ?></td>    
                <td><?php echo $value->stock;?></td>                	
                <td><?php echo $value->stock;?></td> 
            </tr>
            <?php } ?>            
            </tbody>            
            </table>    
        </div>
    </div>  
</div>

<div class="clearfix" style=""></div>

<div class="row add_top_15" style="background: #fff;border-bottom:2px solid #ddd">

    <div class="col-md-12">
    
    <h4 class="widget-header section-title">Order to Cart</h4>
    
    <div class="row col-md-12">
        
        <form class="form-horizontal" name="frmOrdertoCart" id="frmOrdertoCart" method="post" action="<?php echo site_url('product/shopping-cart'); ?>">
        
            <div class="col-md-6">
            
                <div class="form-group">
                
                    <label class="col-lg-4 col-sm-4 control-label">Product Item</label>
                
                    <div class="col-md-8">
                    
                        <select class="form-control" name="product_name">
						<option value="<?php echo $aaData[0]->equipmentname; ?>"><?php echo $aaData[0]->equipmentname; ?></option>
						<option value="999">Free Request</option>
						</select>
                        
                        <input type="hidden" name="id_product" value="<?php echo $id_product; ?>">
                        
                    </div>
                
                </div>
                
                <div class="form-group">
                
                    <label class="col-lg-4 col-sm-4 control-label">Number of Item Request</label>
                
                    <div class="col-md-8">
                        
                        <input type="text" name="number_item" id="number_item" class="form-control" placeholder="enter number of item">
                        
                    </div>
                
                </div>
                
                <div class="form-group">
                
                    <label class="col-lg-4 col-sm-4 control-label">Location</label>
                
                    <div class="col-md-8">
                        
                        <input type="text" name="location" class="form-control" placeholder="enter location">
                        
                    </div>
                
                </div>
                
                <div class="form-group">
                        <label class="col-lg-4 col-sm-4 control-label">Start Date</label>
                        <div class="col-md-8">
                        <div class="col-md-6 row">
                            <div id="start_date_picker" class="input-group date">
                                <input type="text" class="form-control" name="start_date">
                                <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="end_date_picker" class="input-group date">
                                <input type="text" class="form-control" name="end_date">
                                <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span>
                                </span>
                            </div>
                        </div>    
                        </div>
                        
                </div>
                
                <!--
<div class="form-group merged date">
                    
                    <label class="col-lg-4 col-sm-4 control-label">Start Date</label>
                    
                    <div class="form-inline">
                        <div class="col-md-4">
                            <input type="text" name="start_date" id="start_date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="end_date" id="end_date" class="form-control">
                        </div>
                        
                        
                    </div>    
                    
              
                </div>
-->
                  

            </div>
            
            <div class="col-md-6">
            
                <div class="form-group">
                
                    <label class="col-lg-5 col-sm-5 control-label">Special Note Request</label>
                
                    <div class="col-md-6">
                    
                        <textarea class="form-control" name="special_note"></textarea>
                        
                    </div>
                
                </div>

            </div>
            
            <div class="col-md-12 add_bottom_15">
            
                <div class="col-md-6 add_bottom_5">                						
                	<input class="form-control btn btn-primary" type="submit" name="submit" value="Add to Cart">
                    
                </div>
                
                <div class="col-md-6">
                						
                	<input class="form-control btn btn-primary" type="submit" name="submit" value="Continue Shopping">
                    
                </div>
                
            </div>
            
        </form>
        
    </div>
    
    </div>
    
</div>
    

<script type="text/javascript" src="<?php echo asset_url('/js/productdetail.js');?>"></script>
