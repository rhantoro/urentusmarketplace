		</div>
	</div>
	<div class="footer" id="footer">
		<div class="container">
			<a href="#top" id="back-top" style=""><i class="icon-arrow-up"></i>Top</a>
			<div class="footer-inner">
				2013 &copy; Mitra Solusi Telematika.
			</div>
			<div class="footer-tools" style="display:none;">
				<span class="go-top"><i class="icon-angle-up"></i></span>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div id="general_modal_container"></div>
	
	<!-- load Image -->
	<div id="image-loading" style="display:none;">
		<span class="helper"></span>
		<image src="<?php echo base_url('/assets/images/ajax-loader.gif'); ?>" />
	</div>
	
	<!-- table lookup -->
	<div class="modal fade" id="table_lookup_container" tabindex="-1" role="dialog" aria-labelledby="general_modalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="general_modal_title">Set Title Here</h4>
	      </div>
	      <div class="modal-body">
			<div id="table_container">
				
			</div>
		  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default close_button" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-primary action_button">Select</button>
	      </div>
	    </div>
	  </div>
	</div>
	</div>
  </div>
</body>
</html>