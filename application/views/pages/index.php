<h3>Welcome To CAST</h3>
<p class="col-md-12 control-label" style="font-family: AvenirNextLTW01-Regular,sans-serif; font-size:16px; ">CAST is a tool that automate your company <font style="font-family:calibri; font-size: 16px; !important; font-weight: bold;">Travel Cash Advance</font> process and
					<font style="font-family:calibri; font-size: 16px; !important; font-weight: bold;">Settlement</font> process within custom workflow. Collaboration with ERP System (SAP).</p>
<br />
<div class="">
<h3 class="widget-title">Travel Cash Advance Management</h3>
<div class="portlet-body">
	<div class="col-md-4">
		<div class="portlet box blue">
			<div class="portlet-title">									 
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body white">
				<strong>
					Last Travel Cast Adv. Req Date
				</strong>
				<p id="last_travel_advance"></p>
				<br>
				<br>
				<strong>
					Outstanding Cast Advance Amount
				</strong>
				<p id="outstanding_cash_amount"></p>
			</div>
		</div>
	</div>
	<div class="col-md-8">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue">
			<div class="visual">
				<i class="icon-ticket"></i>
			</div>
			<div class="details">
				<div class="number">
				
				</div>
				<div class="desc">
					<a href="<?php echo site_url('travel_advances/request'); ?>">Request</a>
				</div>
			</div>
			<a class="more" href="<?php echo site_url('travel_advances/request'); ?>">View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
			<!--  <a href="<?php echo site_url('travel_advances/request'); ?>">-->
				<!-- <img src="<?php echo asset_url('/images/request_icon.png'); ?>" /> -->
				<!-- <strong>Request</strong>-->
			<!-- </a>-->
		</div>
	</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="dashboard-stat green">
		<div class="visual">
			<i class="icon-inbox"></i>
		</div>
		<div class="details">
			<div class="number">
			
			</div>
			<div class="desc">
				<a href="<?php echo site_url('travel_advances/requests_list'); ?>">Status</a>
			</div>
		</div>
		<a class="more" href="<?php echo site_url('travel_advances/requests_list'); ?>">View more <i class="m-icon-swapright m-icon-white"></i></a>
		<!-- <a href="<?php echo site_url('travel_advances/requests_list'); ?>">
			<img src="<?php echo asset_url('/images/status_icon.png'); ?>" />
			<strong>Status</strong>
		</a>-->
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="dashboard-stat purple">
		<div class="visual">
			<i class="icon-thumbs-up"></i>
		</div>
		<div class="details">
			<div class="number">
			
			</div>
			<div class="desc">
				<a href="<?php echo site_url('travel_advances/approvals_list'); ?>">Approval</a>
			</div>
		</div>
		<a class="more" href="<?php echo site_url('travel_advances/approvals_list'); ?>">View more <i class="m-icon-swapright m-icon-white"></i></a>
		<!-- <a href="<?php echo site_url('travel_advances/approvals_list'); ?>">
			<img src="<?php echo asset_url('/images/approval_icon.png'); ?>" />
			<strong>Approval</strong>
		</a>-->
	</div>
</div>
</div>
</div>
</div>

<div class="clearfix"></div>
<br /><br />
<!-- end settlement -->
<div class="">
<h3 class="widget-title">Settlement</h3>
<div class="portlet-body">
<div class="col-md-4">
    <div class="portlet box blue">
			<div class="portlet-title">									 
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="#portlet-config" data-toggle="modal" class="config"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body white">
				<strong>
					Last settlement requested date:
				</strong>
				<p id="last_settlement"></p>
				<br>
				<br>
				 
			</div>
	</div> 
</div>
<!-- begin  -->
<div class="col-md-8">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue">
			<div class="visual">
				<i class="icon-ticket"></i>
			</div>
			<div class="details">
				<div class="number">
				
				</div>
				<div class="desc">
					<a href="<?php echo site_url('settlements/request'); ?>">Request</a>
				</div>
			</div>
			<a class="more" href="<?php echo site_url('settlements/request'); ?>">View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
			<!--  <a href="<?php echo site_url('travel_advances/request'); ?>">-->
				<!-- <img src="<?php echo asset_url('/images/request_icon.png'); ?>" /> -->
				<!-- <strong>Request</strong>-->
			<!-- </a>-->
		</div>
	</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="dashboard-stat green">
		<div class="visual">
			<i class="icon-inbox"></i>
		</div>
		<div class="details">
			<div class="number">
			
			</div>
			<div class="desc">
				<a href="<?php echo site_url('settlements/requests_list'); ?>">Status</a>
			</div>
		</div>
		<a class="more" href="<?php echo site_url('settlements/requests_list'); ?>">View more <i class="m-icon-swapright m-icon-white"></i></a>
		<!-- <a href="<?php echo site_url('travel_advances/requests_list'); ?>">
			<img src="<?php echo asset_url('/images/status_icon.png'); ?>" />
			<strong>Status</strong>
		</a>-->
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<div class="dashboard-stat purple">
		<div class="visual">
			<i class="icon-thumbs-up"></i>
		</div>
		<div class="details">
			<div class="number">
			
			</div>
			<div class="desc">
				<a href="<?php echo site_url('settlements/approvals_list'); ?>">Approval</a>
			</div>
		</div>
		<a class="more" href="<?php echo site_url('settlements/approvals_list'); ?>">View more <i class="m-icon-swapright m-icon-white"></i></a>
		<!-- <a href="<?php echo site_url('travel_advances/approvals_list'); ?>">
			<img src="<?php echo asset_url('/images/approval_icon.png'); ?>" />
			<strong>Approval</strong>
		</a>-->
	</div>
</div>
</div>
<!-- end -->
</div>
</div> <!-- end settlement -->

<div class="clearfix"></div>
<br /><br /><br />
<div class="col-md-12">
	<div class="rounded flexi">
		<h3>FAQ</h3>
		<p><b>Q : What is the purpose of this CAST application ?</b></p>
		<p>A : CAST is an application that aims to make a Travel Cash Advance request and Settlement Cash Advance request. </p>
		<p><b>Q : Who is involved in the CAST application ?</b></p>
		<p>A : Employee, Superior, Finance (Cashier), Travel Agent, General Affairs Dept.</p>
		<p><b>Q : Can I make a request for myself traveller ?</b></p>
		<p>A : Yes, you can.</p>
		<p><b>Q : Can I make a request for others traveller ?</b></p>
		<p>A : By default you can not, you should be set as an Admin Role Requestor. </p>
		<p><b>Q : What are the terms to be able to login at this CAST application ?</b></p>
		<p>A : - You are listed as an employee in SAP HR Module</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Has an Active Directory User ID</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Employee Code you must be registered in Active Directory User ID of you</p>
		<p><b>Q : What are the terms that must be met before it can make a travel cash advance request and settlement request ?</b></p>
		<p>A : - Traveller listed as an employee in SAP HR Module</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Vendor Code Traveller already registered in the SAP Finance Module</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Level / Grade Traveller must be defined</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Matrix traveler approval must be defined.</p>
		<p><b>Q : If the above requirements have not been met , how to complete it ?</b></p>
		<p>A : - The first layer , you can contact CAST Admin in your company</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - The second layer , you can contact the Helpdesk MST.</p>
		<p><b>Q : What software can be used to run the application CAST ?</b></p>
		<p>A : You need a browser :</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Mozilla Firefox minimum version 25 ( or higher )</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp; - Google Chrome version 30 min ( or higher )</p>
		<p><b>Q : If I have questions and barriers to the use of this application , where should i contact ?</b></p>
		<p>A : You can contact the Helpdesk MST.</p>
	</div>
</div>

<script type="text/javascript" src="<?php echo asset_url('/js/pages.js');?>"></script>