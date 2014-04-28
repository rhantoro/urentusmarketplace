<div class="col-md-11" style="background: none repeat scroll 0 0 #fff; border: 1px solid #EEEEEE; 
margin-bottom: 40px; margin-top: 20px; padding: 20px;">

<?php print_r($this->session->userdata('product')); ?>
<div class="col-md-12" style="vertical-align: top">
<h4 class="widget-header section-title">Inquiry Cart</h4>
</div>


<div class="col-md-1" style="background-color: #CCC">No</div>
<div class="col-md-6" style="background-color: #CCC">Product Name</div>
<div class="col-md-1" style="background-color: #CCC">Qty</div>
<div class="col-md-2" style="background-color: #CCC">Location</div>
<div class="col-md-2" style="background-color: #CCC">Delete from Cart</div>

<?php 
$no = 1;
if ($this->session->userdata('product') != null) {
foreach($this->session->userdata('product') as $key=>$value){
?>
	<div class="col-md-1" style="border: 1px solid #EEEEEE;"><?php echo $no; ?></div>	
	<div class="col-md-6" style="border: 1px solid #EEEEEE;"><?php echo $value['product_name']; ?></div>
	<div class="col-md-1" style="border: 1px solid #EEEEEE;"><?php echo $value['number_item']; ?></div>
	<div class="col-md-2" style="border: 1px solid #EEEEEE;"><?php echo $value['location']; ?></div>
	<div class="col-md-2" style="border: 1px solid #EEEEEE;">Delete</div>
<?php 
	$no++;
}
}
?>

<div class="clearfix"></div>
<div class="col-md-12" style="vertical-align: top">
<h4 class="widget-header section-title">Term and Condition</h4>
</div>

<div class="clearfix"></div>
<input class="form-control btn btn-primary" type="submit" name="submit" value="Submit Inquiry">
</div>