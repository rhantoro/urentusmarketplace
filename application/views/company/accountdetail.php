<div class="row">
	<div class="col-md-12">
		<h2><?php echo __("Company Profile"); ?></h2>
	
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
			<label for="act_companycode" class="col-md-2 control-label"><?php echo __("Company Code"); ?></label>
			<div class="col-md-3 input-group merged date">
				<input id="act_companycode" class="form-control" type="text" readonly value="<?php echo !empty($this->session->userdata)? $this->session->userdata('companycode') : ''; ?>" name="act_companycode" />
				
			</div>
		</div>
		<div class="form-group">
			<label for="act_companyname" class="col-md-2 control-label"><?php echo __("Company Name"); ?></label>						
				<div class="col-md-3">
					<input class="form-control" type="text" id="act_companycode_name" readonly="readonly" value="<?php echo !empty($this->session->userdata)? $this->session->userdata('company')  : ''; ?>">
				</div>
			</div>	
		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Expense Code"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_expensecode" value="<?php echo !empty($data)? $data->act_expensecode : ''; ?>">
			</div>
		</div>	
			
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Expense Name"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_expensename" value="<?php echo !empty($data)? $data->act_expensename : ''; ?>">
			</div>
		</div>	
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Maximal Amount"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_maxrequest" value="<?php echo !empty($data)? $data->act_maxrequest : ''; ?>">
			</div>
		</div>		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Level"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_level" value="<?php echo !empty($data)? $data->act_level : ''; ?>">
			</div>
		</div>		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label"><?php echo __("Type"); ?></label>
			<div class="col-md-3">
				<input class="form-control" type="text" name="act_type" value="<?php echo !empty($data)? $data->act_type : ''; ?>">
			</div>
		</div>		
		
		<div class="form-group">
			<label for="company_code" class="col-md-2 control-label sr-only"></label>
			
			<div class="col-md-1">
				<input class="form-control btn btn-primary" type="submit" name="submit" value="Submit">
			</div>
			
			<div class="col-md-1 no-padding">
				<input class="form-control btn btn-default" type="reset" name="submit" value="Reset">
			</div>
			<div class="col-md-1">
				<input class="form-control btn btn-default" type="button" id="cancel" name="cancel" value="Cancel">
			</div>				
		</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/master_expense_type.js');?>"></script>
