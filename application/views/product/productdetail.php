<div class="col-md-11" style="background: none repeat scroll 0 0 #fff; border: 1px solid #EEEEEE; 
margin-bottom: 40px; margin-top: 20px; padding: 20px;">
<div class="col-md-5" style="vertical-align: top">
<h4 class="widget-header section-title">Product Detail</h4>
<div style="border: 1px solid #EEEEEE; height:250px;">
<?php if (count($aaDataPhoto) > 0) {  ?>
<img src="<?php echo asset_url('/photo_products/'.$id_product.'/'.$aaDataPhoto[0]->originalfilename); ?>" height="250px;">
<?php } else { ?>
image none
<?php } ?>
</div>
<div>&nbsp;</div>
<div class="col-md-13"><b><?php echo $aaData[0]->equipmentname; ?></b></div>
<div class="col-md-13"><b>Specification</b></div>
<div class="col-md-11"><?php echo $aaData[0]->specification; ?></div>
<div class="col-md-13"><b>Description</b></div>
<div class="col-md-11"><?php echo $aaData[0]->description; ?></div>
</div>

<div class="col-md-7" style="vertical-align: top">
<h4 class="widget-header section-title">Company Detail</h4>
<div class="col-md-3">Company</div><div class="col-md-9">: <?php echo $aaData[0]->companyname; ?></div>
<div class="col-md-3">Address</div><div class="col-md-9">: <?php echo $aaData[0]->companyaddress; ?></div>
<div class="col-md-3">Contact Number</div><div class="col-md-9">: <?php echo $aaData[0]->companyemailaddress; ?></div>
<div class="col-md-3">PiC</div><div class="col-md-9">: Company</div>
<div class="col-md-3">Web Site</div><div class="col-md-9">: <?php echo $aaData[0]->website; ?></div>
</div>
<div class="col-md-7" style="vertical-align: top">
<h4 class="widget-header section-title">Location Info</h4>
<div class="col-md-8">
<div class="col-md-8" style="background-color: #CCC">Items</div><div class="col-md-2" style="background-color: #CCC">#</div><div class="col-md-2" style="background-color: #CCC">#</div>
<?php 
foreach($aaDataLocation as $key=>$value){
?>
	<div class="col-md-8" style="border: 1px solid #EEEEEE;"><?php echo $value->city; ?></div><div class="col-md-2" style="border: 1px solid #EEEEEE;"><?php echo $value->stock;?></div><div class="col-md-2" style="border: 1px solid #EEEEEE;"><?php echo $value->stock;?></div>	
<?php 
	
}
?>

</div>
</div>
<div class="clearfix"></div>
<br/>
<div style="border: 1px solid #CCC;"></div>

<div class="col-md-12" >
<h4 class="widget-header section-title">Order to Cart</h4>
<form name="frmOrdertoCart" id="frmOrdertoCart" method="post" action="<?php echo site_url('product/shopping-cart'); ?>">
<div class="col-md-6">

<div class="col-md-5">Product Item</div>
<div class="col-md-6">
<select class="form-control" name="product_name">
<option value="<?php echo $aaData[0]->equipmentname; ?>"><?php echo $aaData[0]->equipmentname; ?></option>
<option value="999">Free Request</option>
</select>
<input type="hidden" name="id_product" value="<?php echo $id_product; ?>">
</div>
<div class="col-md-5">Number of Item Request</div><div class="col-md-6">
<input type="text" name="number_item" id="number_item" class="form-control" placeholder="enter number of item">
</div>
<div class="col-md-5">Location</div><div class="col-md-6"><input type="text" name="location" class="form-control" placeholder="enter location"></div>
<div class="col-md-5">Start Date</div><div class="col-md-6 input-group merged date"><input type="text" name="start_date" id="start_date" class="form-control"><span class="input-group-addon">
					<i class="icon-th"></i>
					</span></div>
<div class="col-md-5">End Date</div><div class="col-md-6 input-group merged date"><input type="text" name="end_date" id="end_date" class="form-control"></div>
<div class="col-md-11">&nbsp;</div>
<div class="col-md-6">						
	<input class="form-control btn btn-primary" type="submit" name="submit" value="Add to Cart">
</div>
<div class="col-md-6">						
	<input class="form-control btn btn-primary" type="submit" name="submit" value="Continue Shopping">
</div>      
</div>
<div class="col-md-6">
<div class="col-md-5">Special Note Request</div><div class="col-md-7"><textarea class="form-control" name="special_note"></textarea></div>

</div>
</form>
</div>
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/productdetail.js');?>"></script>
