<div class="row" style="background-color: #fff;">
    <div class="col-md-12">
        <div class="col-md-2">
            <div class="sidebar" id="sidebar">
                <h4>Product Category</h4>
                <ul class="nav list-unstyled">
                <?php 
            	$a = "";
            	foreach($aaDataCategory as $key=>$value){		
            		 if ($a <> $value->categorycode) {
    		     ?>
                <li><a href="<?php echo site_url('search/result/0/cat/'.str_replace(' ', '-',$value->categorycode)); ?>"><?php echo $value->categorycode;?></a></li>
                <?php } ?>
                
                <li>
                    <ul class="sub">
                        <li><a href="<?php echo site_url('search/result/0/sub/'.str_replace(' ', '-',$value->subcategorycode)); ?>"><?php echo $value->subcategorycode;?></a></li>
                    </ul>
                </li>
                <?php 	$a = $value->categorycode; } ?>            
                </ul>
                                 
            </div>
        </div>
        <div class="col-md-10">
            <h4>Search Result :</h4>
            <?php if (!$this->session->userdata('loggedin')) { ?>
            <div style="border: 1px solid #EEEEEE; height:25px; color: red;">! Info, You are not registered. Please register here as member to get more detail.</div> 
            <?php } ?>
            
    	    <div class="f12 top20"><?php echo $iTotalDisplayRecords; ?> result for searching "<strong><?php echo $aaDataPost['preference']; ?><?php echo ($aaDataPost['category']<>"")? ", ".$aaDataPost['category'] : ""; ?><?php echo ($aaDataPost['brand']<>"") ? ", ".$aaDataPost['brand'] : ""; ?><?php echo ($aaDataPost['location']<>"") ? ", ".$aaDataPost['location'] : ""; ?></strong>"</div>
    	    <div class="clearfix"></div>
    	    
            <ul id="og-grid" class="og-grid">
        	<?php       	
            	foreach($aaData as $key=>$value){
            ?>
            	 <?php if ($this->session->userdata('loggedin')) { ?>  
                <li class="imageBox_theImage">
                	<input type="checkbox" name="check_to_compare[]" id="check_<?php echo encode_url($aaDataPost['product_input']."_".$value->idx); ?>" onclick="compareData('<?php echo encode_url($aaDataPost['product_input']."_".$value->idx); ?>')"> <b><?php echo $value->equipmentname; ?></b>
                    <a href="<?php echo site_url('product/show-product')."/".encode_url($aaDataPost['product_input']."_".$value->idx)."/".str_replace(' ', '-', $value->equipmentname); ?>" data-largesrc="<?php echo asset_url('/photo_products/'.encode_url($aaDataPost['product_input']."_".$value->idx).'/'.$value->mainphoto_original); ?>" data-title="<?php echo $value->equipmentname; ?>" data-description="<?php echo $value->description; ?>">
                        <img height="200px;" width="250px;" src="<?php echo ($value->mainphoto_middle <> "") ? asset_url('/photo_products/'.encode_url($aaDataPost['product_input']."_".$value->idx).'/'.$value->mainphoto_middle) : asset_url('/images/no-image-icon.jpg'); ?>" alt="<?php echo $value->equipmentname; ?>"/>
                    </a>
                </li>
                <?php } else { ?>
                <li class="imageBox_theImage">
                    <a href="" data-largesrc="<?php echo asset_url('/photo_products/'.encode_url($aaDataPost['product_input']."_".$value->idx).'/'.$value->mainphoto_original); ?>" data-title="<?php echo $value->equipmentname; ?>" data-description="<?php echo $value->description; ?>">
                        <img height="200px;" width="250px;" src="<?php echo ($value->mainphoto_middle <> "") ? asset_url('/photo_products/'.encode_url($aaDataPost['product_input']."_".$value->idx).'/'.$value->mainphoto_middle) : asset_url('/images/no-image-icon.jpg'); ?>"/>
                    </a>
                </li>
                <?php } ?>
        
        <?php } ?>
            </ul>
            <div><?php echo $paging; ?></div>
            <?php if ($this->session->userdata('loggedin')) { ?>
            <form class="form-horizontal" name="frmCompare" id="frmCompare" method="post" action="<?php echo site_url('product/comparison'); ?>">
            <div><input type="hidden" size="50" name="id_checks" value="" id="id_checks"></div>
			<div class="col-md-6 add_bottom_5">			                						
                <input class="form-control btn btn-primary" type="submit" id="compare_product" value="Compare Product">
            </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo asset_url('/js/productdetail.js');?>"></script>