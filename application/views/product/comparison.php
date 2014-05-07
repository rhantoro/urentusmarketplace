<div class="row" style="background: #fff;border-bottom:2px solid #ddd">
	 <div class="col-md-12">
	 	<h4 class="widget-header section-title">Product Comparison</h4>
	 	<?php //print_r($data); ?>
	 	<table class="table  table-hover general-table">            
            <thead>            
            <tr>            
                <th></th>
                <?php foreach ($data as $val) { ?>
                	<?php 
                	$path = FCPATH.'/assets/photo_products/'.encode_url($val->filteroptioncode.'_'.$val->idequipment).'/'.$val->mainphoto_thumb;
                	
                	if (file_exists($path)) { ?>
                		<th><img width="140px" src="<?php echo asset_url('/photo_products/'.encode_url($val->filteroptioncode.'_'.$val->idequipment).'/'.$val->mainphoto_thumb); ?>"></th>
                	<?php } else { ?>
                		<th><div style="border: solid 1px #ddd; width: 140px; height:80px; text-align: center;">Image None</div></th>
                	<?php } ?>
                <?php } ?>
                
            </tr>            
            </thead>            
            <tbody>
            <tr style="font-weight: bold;">
            <td>Name Of item</td>
            <?php foreach ($data as $val) { ?>
                	<td><?php echo $val->equipmentname; ?></td>
            <?php } ?>
            </tr>
            <tr>
            <td>Specification</td>
            <?php foreach ($data as $val) { ?>
                	<td><?php echo $val->specification; ?></td>
                <?php } ?>
            </tr>
            <tr>
            <td>Description</td>
             <?php foreach ($data as $val) { ?>
                	<td><?php echo $val->description; ?></td>
                <?php } ?>
            </tr>
            <tr>
            <td>Company Renter</td>
             <?php foreach ($data as $val) { ?>
                	<td><?php echo $val->companyname; ?></td>
                <?php } ?>
            </tr>
            </tbody>
        </table>
        
        <div class="col-md-3 add_bottom_5">			                						
                <input class="form-control btn btn-primary" type="button" onclick="javascript:location.href='<?php echo site_url('search/result')?>'" value="Back to Result">
        </div>
	 </div>
</div>