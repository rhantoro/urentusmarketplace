<div class="col-md-12">

<div style="height:300px; background: none repeat scroll 0 0 #F6F6F6; border: 1px solid #EEEEEE; 
margin-bottom: 40px; margin-top: 20px; padding: 20px;">
	
	<div class="col-md-6" style="margin-top:40px;">
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-ticket"></i>
				</div>
				<div class="details">
					<div class="number">
					
					</div>
					<div class="desc">
						<a id="loginAsRentee" style="cursor: pointer;">Rentee</a>
					</div>
				</div>
				<a class="more" id="loginAsRentee" style="cursor: pointer;">Login as Rentee <i class="m-icon-swapright m-icon-white"></i>
				</a>
				
			</div>
		</div>
		<div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
			<div class="dashboard-stat blue">
				<div class="visual">
					<i class="icon-ticket"></i>
				</div>
				<div class="details">
					<div class="number">
					
					</div>
					<div class="desc">
						<a id="loginAsRenter" style="cursor: pointer;">Renter</a>
					</div>
				</div>
				<a class="more" id="loginAsRenter" style="cursor: pointer;">Login as Renter <i class="m-icon-swapright m-icon-white"></i>
				</a>
				
			</div>
		</div>
	</div>
	<form name="frmlogin" id="frmlogin" method="post">
	<div class="col-md-4">
			<div class="col-md-12">
				<h4 id="loginAs">Login As</h4> 
			</div>
			<div class="col-md-12">
				<input class="form-control" type="text" id="emailaddress" name="emailaddress" placeholder="Email Address">
				<input class="form-control" type="hidden" id="logintype" name="logintype" value="">
			</div>
			</br/>
			<div class="col-md-12">
				<input class="form-control" type="password" id="password" name="password" placeholder="Password">
				<div id="msg"></div>
			</div>
			
			</br/>
			<div class="col-md-12">
				<button class="form-control btn btn-primary" id="submit">Login</button>
				
			</div>
	</div>
	</form>
</div>
</div>
<script type="text/javascript" src="<?php echo asset_url('/js/loginform.js');?>"></script>