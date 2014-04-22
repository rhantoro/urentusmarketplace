<div class="row" style="height:auto; background: none repeat scroll 0 0 #F6F6F6; border: 1px solid #EEEEEE; 
margin-bottom: 40px; margin-top: 20px; padding: 20px;">
	<?php echo form_open(null, array('class' => 'form-horizontal')); 
	if ( !empty($data) ) {
		$comp = $this->master_expense_type_model->getExpenseType($data->act_companycode);
	}
	?>
	<h3><?php echo __("Registration Form"); ?></h3>	
		In order to get more comprehensive services from UrentUs, you need to be registered member. Please diligently read the services package we offer thu
		you could select package that suits your needs.<br/>
	<div class="col-md-6">
		
		<?php 
		$validationError = validation_errors(); 
		if (!empty($validationError)): ?>
			<div class="row">
				<div class="col-md-12 error"><?php echo $validationError; ?></div>
			</div>
		<?php endif; ?>		
		
	<fieldset style="border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;">
            <legend style="font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;">Company Profile Information</legend>			
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">Company Type <span style="color: red">*</span></label>
			<div class="col-md-7 input-group merged date">
				<select name="companytype" class="form-control"><option value=""></option><option value="renter">Renter</option><option value="rentee">Rentee</option></select>				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4"><?php echo __("Company Name"); ?> <span style="color: red">*</span></label>
			<div class="col-md-7 input-group merged date">
				<input id="companyname" class="form-control" type="text" value="" name="companyname" placeholder="Enter Company Name"/>				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4"><?php echo __("Company Code Initial"); ?></label>
			<div class="col-md-7 input-group merged date">
				<input id="companycode" class="form-control" maxlength="5" style="text-transform:uppercase;" placeholder="Enter Company Code Initial, Max 5 Chars" type="text" value="" name="companycode" />				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companyname" class="col-md-4"><?php echo __("Company Address"); ?></label>						
				<div class="col-md-7">
					<input class="form-control" type="text" id="companyaddress"  value="" name="companyaddress" placeholder="Enter Company Address">
				</div>
		</div>
		<div class="form-group">
			<label for="act_companyname" class="col-md-4"><?php echo __("Zip Code"); ?></label>						
				<div class="col-md-7">
					<input class="form-control" type="text" id="zipcode"  value="" placeholder="Enter Zip Code" name="zipcode">
				</div>
		</div>	
		<div class="form-group">
			<label for="act_companyname" class="col-md-4"><?php echo __("Province"); ?></label>						
				<div class="col-md-7">
					<select name="province" id="province" class="form-control"></select>
				</div>
		</div>
		<div class="form-group">
			<label for="act_companyname" class="col-md-4"><?php echo __("City"); ?></label>						
				<div class="col-md-7">
					<select name="city" id="city" class="form-control"></select>
				</div>
		</div>
		
		
		<div class="form-group">
			<label for="company_code" class="col-md-4"><?php echo __("Email Address"); ?></label>
			<div class="col-md-7">
				<input class="form-control" type="text" name="email" id="email" value="" placeholder="Enter Email Address">
			</div>
		</div>	
		<div class="form-group">
			<label for="company_code" class="col-md-4"><?php echo __("Company Web Site"); ?></label>
			<div class="col-md-7">
				<input class="form-control" type="text" name="website" id="website" value="" placeholder="Enter Url Web Site">
			</div>
		</div>	
		<div class="form-group">
			<label for="company_code" class="col-md-4"><?php echo __("Office Number"); ?></label>
			<div class="col-md-7">
				<input class="form-control" type="text" name="officenumber" id="officenumber" value="" placeholder="Enter Office Number">
			</div>
		</div>	
		<div class="form-group">
			<label for="company_code" class="col-md-4"><?php echo __("Your Expectation on UrentUs"); ?></label>
			<div class="col-md-7">
				<textarea class="form-control" name="expectation" placeholder="Enter Expectation on UrentUs"></textarea>				
			</div>
		</div>			
	</fieldset>
		
	</div>
	<div class="col-md-6">
		<fieldset style="border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;">
            <legend style="font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;">User Access - PIC Super User</legend>
            
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">User ID Email Address</label>
			<div class="col-md-7 input-group merged date">
				<input id="userid" class="form-control" type="text" value="" placeholder="Enter Email Address Format" name="userid" />				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">Password</label>
			<div class="col-md-7 input-group merged date">
				<input id="password" class="form-control" type="text" value="" placeholder="Enter Password" name="password" />				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">Confirm Password</label>
			<div class="col-md-7 input-group merged date">
				<input id="confirmpassword" class="form-control" type="text" value="" placeholder="Enter Confirmation Password" name="confirmpassword" />				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">Your Complete Name</label>
			<div class="col-md-7 input-group merged date">
				<input id="fullname" class="form-control" type="text" value="" placeholder="Enter Your Complete Name" name="fullname" />				
			</div>
		</div>
		
	</fieldset>
		<div class="form-group">
			<label for="act_companycode" class="col-md-4">Terms and Condition</label>
		</div>
		<div class="form-group">
			<div class="col-md-1" style="margin-top:-10px;">
				
				<input id="act_companycode" class="form-control" type="checkbox" />
			</div>
			<div class="col-md-12">
				<label for="act_companycode" class="col-md-8">I've already read and agreed on the Terms and Condition</label>
			</div>
		</div>
	
		<div class="form-group">
			<label for="company_code" class="col-md-4 control-label sr-only"></label>
			
			<div class="col-md-2">
				<input class="form-control btn btn-primary" type="submit" id="submit" name="submit" value="Submit">
			</div>
			
			<div class="col-md-2 no-padding">
				<input class="form-control btn btn-default" type="reset" name="reset" value="Reset">
			</div>
			<div class="col-md-2">
				<input class="form-control btn btn-default" type="button" id="cancel" name="cancel" value="Cancel">
			</div>				
		</div>
		<div id="msg"></div>
	</div>
		<?php echo form_close(); ?>
	
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/companyregister.js');?>"></script>
