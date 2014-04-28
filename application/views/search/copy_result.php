<div class="col-md-12">
<div class="col-md-2" style="background-color: #fff">
	Product Category
	<br/>
	<?php 
	$a = "";
	foreach($aaDataCategory as $key=>$value){		
		if ($a <> $value->categorycode) {
			echo "<b>".$value->categorycode."</b>";
			echo "<br/>";
		}
		echo "--<b>".$value->subcategorycode."</b>";
		echo "<br/>";
		
		$a = $value->categorycode;
	}
	?>
</div>
<div class="col-md-10" style="background-color: #fff">
	<div>Search Result : </div>
	<div class="f12 top20"><?php echo $iTotalDisplayRecords; ?> result for searching "<strong><?php echo $aaDataPost['category']; ?></strong>"</div>
	<div class="clearfix"></div>
	<?php 
    	foreach($aaData as $key=>$value){
    		
    ?>
    <div class="col-md-3 roundedbox" style="margin : 13px;">
		<div><a href="<?php echo site_url('product/show-product')."/".encode_url($value->idx)."/".str_replace(' ', '-', $value->equipmentname); ?>"><?php echo $value->equipmentname; ?></a></div>
		<div>
		<img alt="Daihatsu Taruna Murmer" width="180px;" src="http://im4.tokobagus.biz/s/51/56/51125564_14929583_5356fe89e7f84_list.jpg" 
	           class="fotoimage">
		</div>
		<div>Category : <?php echo $value->categorycode; ?></div>
		<div>Sub Category : <?php echo $value->subcategorycode; ?></div>
		<div>Brand : <?php echo $value->brandcode; ?></div>
	</div>
    <?php } ?>
	
	
	<div class="clearfix"></div>
	
	
	<br/>
	<div style="border: 1px solid #CCC;"></div>
	
</div>

</div>

