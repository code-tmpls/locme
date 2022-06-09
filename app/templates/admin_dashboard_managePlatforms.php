<div id="managePlatformModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Platform</h4>
      </div>
      <div class="modal-body">
        <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- -->
					<div id="managePlatform_addPlatform_alert" class="form-group"></div>
					<div class="form-group">
						<label>Platform Name <span class="font-red">*</span></label>
						<input id="managePlatform_addPlatform_platformName" type="text" class="form-control" placeholder="Enter Platform Name" />
					</div><!--/.form-group -->
					<div class="form-group">
						<label>Platform Description <span class="font-red">*</span></label>
						<textarea id="managePlatform_addPlatform_platformDesc" class="form-control" placeholder="Enter Platform Description"></textarea>
					</div><!--/.form-group -->
					<div class="form-group">
						<button class="btn btn-sm btn-primary btn-style form-control" onclick="javascript:managePlatform_add_newPlatform();"><b>Add New Platform</b></button>
					</div><!--/.form-group -->
					<!-- -->
				</div><!--/.col-md-12 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
      </div><!--/.modal-body -->
    </div><!--/.modal-content -->

  </div><!--/.modal-dialog -->
</div><!--/.modal -->
<!-- -->

<div><h4><b>Manage Platforms</b></h4><hr/></div>
<div align="right">
	<button class="btn btn-sm btn-primary-o btn-style" data-toggle="modal" data-target="#managePlatformModal" data-backdrop="static">
		<i class="fa fa-plus-circle" aria-hidden="true"></i> <b>Add New Platform</b>
	</button>
</div>
<div id="managePlatform_viewPlatform_info" class="mtop15p"></div>