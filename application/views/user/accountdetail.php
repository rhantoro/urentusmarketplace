<div class="row">
	<div class="col-md-12">
		<h2><?php echo __("Account Detail"); ?></h2>
	
		<?php 
		
		$validationError = validation_errors(); 
		if (!empty($validationError)): ?>
			<div class="row">
				<div class="col-md-12 error"><?php echo $validationError; ?></div>
			</div>
		<?php endif; ?>
		
		<?php echo form_open(null, array('class' => 'form-horizontal')); 
		if ( !empty($data) ) {
			$comp = $this->master_expense_type_model->getExpenseType($data->act_companycode);
			}
		?>
		<input class="form-control" type="hidden" name="prev_act_id" value="<?php echo !empty($data)? $data->act_id : ''; ?>">
		
		<div class="form-group">
			<label for="act_companyname" class="col-md-2 control-label"><?php echo __("Company Name"); ?></label>						
				<div class="col-md-3">
					<input class="form-control" type="text" id="act_companycode_name" readonly="readonly" value="<?php echo  !empty($this->session->userdata)? $this->session->userdata('company') : ''; ?>">
				</div>
			</div>	
		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("User ID"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" readonly name="act_expensecode" value="<?php echo !empty($this->session->userdata)? $this->session->userdata('emailaddress') : ''; ?>">
			</div>
		</div>	
			
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Full Name"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_expensename" value="<?php echo !empty($this->session->userdata) ? $this->session->userdata('fullname') : ''; ?>">
			</div>
		</div>	
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Email Address"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_maxrequest" value="<?php echo !empty($this->session->userdata)? $this->session->userdata('emailaddress')  : ''; ?>">
			</div>
		</div>		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("User Type"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" readonly name="act_level" value="<?php echo !empty($this->session->userdata)? $this->session->userdata('usertype') : ''; ?>">
			</div>
		</div>		
		
		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label sr-only"></label>
			
			<div class="col-md-1">
				<input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
			</div>			
			
			<div class="col-md-1">
				<input class="form-control btn btn-default" type="button" id="cancel" name="cancel" value="Cancel">
			</div>				
		</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/useraccountdetail.js');?>"></script>
