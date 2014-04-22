<div class="caption">
	<h3 class="widget-title"><?php echo __('List of Requests'); ?></h3>
</div>

<div class="row">
	<div class="col-md-6"><div></div></div>
	<div class="col-md-6 custom-form-inline">
		<div class="col-md-3 right">
			<label for="search_by" class="control-label"><?php echo __("Search By"); ?></label>
		</div>
		<div class="col-md-3">
			<select id="search_by" name="search_by" class="form-control">
				<option value="userid"><?php echo __('User ID'); ?></option>
				<option value="fullname"><?php echo __('Full Name'); ?></option>
				<option value="emailaddress"><?php echo __('Email Address'); ?></option>				
			</select>
		</div>
		<div class="col-md-4">
				<input type="text" id="search_term" name="search_term" value="" class="form-control" />
		</div>
		<div class="col-md-2">
			<input type="button" id="search_request" class="btn btn-default col-md-12" value="<?php echo __("Search"); ?>" />
		</div>	
	</div>
</div>
<br />
<div>
	<table id="list_user_account" class="table table-bordered datagrid">
		<thead>
			<tr>
				<th><?php echo __('No.'); ?></th>
				<th><?php echo __('User ID'); ?></th>
				<th><?php echo __('Full Name'); ?></th>
				<th><?php echo __('Email Address'); ?></th>
				<th><?php echo __('Is Active'); ?></th>
				<th><?php echo __('User Type'); ?></th>				
				<th><?php echo __('Action'); ?></th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>	
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/user_account.js');?>"></script>