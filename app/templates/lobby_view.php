<script type="text/javascript">

</script>
<nav class="navbar navbar-page-header">
 
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
		<a class="navbar-brand a-custom" onclick="javascript:sideWrapperToggle();">
			<span class="glyphicon glyphicon-align-justify white-font"></span> <span class="logoName">locum Me</span>
		</a>
	</div><!--/.col-md-2 -->
	<div class="col-md-6 pad10p">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo $PROJECT_URL; ?>lobby/list">My Lobby</a></li>
				<li class="breadcrumb-item active" aria-current="page">LobbyId</li>
			</ol>
		</nav>
	</div><!--/.col-md-6 -->
	<div class="col-md-2">
		<!-- -->
		<div class="list-group mtop10p">
			<div align="center" class="list-group-item font-texgyreadventor" style="font-size:16px;padding:5px;"><b>00 hr : 00 min : 00 sec <i class="fa fa-plus-circle"></i></b></div><!--/.list-group-item -->
		</div><!--/.list-group -->
		<!-- -->
	</div><!--/.col-md-2 -->
	<div align="right" class="col-md-2 pad15p">
		<button class="btn btn-sm btn-danger btn-style">
			<i class="fa fa-external-link" aria-hidden="true"></i> <b>Leave Lobby</b>
		</button>
	</div><!--/.col-md-2 -->
  </div><!--/.row -->
 </div><!--/.container-fluid -->
</nav>

<div class="container-fluid font-texgyreadventor">
 <div class="row">
  <div class="col-md-6">	
	<!-- -->
	<div class="list-group">
		<div class="list-group-item prompt-div">
			<div class="container-fluid">
				<div class="row">
					<div id="prompt-status" class="col-md-10 prompt-type">
						<i class="fa fa-volume-up"></i>&nbsp; Now, you are allowed for Prompting <i class="fa fa-check-circle"></i>
					</div><!--/.col-md-6 -->
					<div align="right" class="col-md-2">
						<button class="btn btn-sm btn-success btn-style" onclick="javascript:publishToUser();">
							<i class="fa fa-send" aria-hidden="true"></i> <b>Produce</b>
						</button>
					</div><!--/.col-md-6 -->
				</div><!--/.row -->
			</div><!--/.container-fluid -->
			
			<div class="ui-widget">			
			<div class="prompt-div-box">
				<textarea id="printPromptWrite" class="form-control prompt-txt" onkeyup="javascript:lobbyView_printPromptWriteOnChange()" disabled>"Say Something that you want to publish"</textarea>
			</div>
			</div>
					
			<div class="container-fluid">
				<div class="row">
					<div align="left" class="col-md-6">
						<div class="btn-group">
							<button id="promptTxtBtn" class="btn btn-sm btn-primary btn-style" onclick="javascript:lobbyView_promptTxt();">
								<i class="fa fa-volume-up" aria-hidden="true"></i> <b>Prompt</b>
							</button>
							<button id="writeTxtBtn" class="btn btn-sm btn-primary-o btn-style" onclick="javascript:lobbyView_writeTxt();">
								<i class="fa fa-file-text" aria-hidden="true"></i> <b>Write</b>
							</button>
						</div>
					</div>
					<div align="right" class="col-md-6">
						<button id="lookForSuggestionBtn" class="btn btn-sm btn-warning btn-style" onclick="javascript:lobbyView_lookSuggestion();">
							<i class="fa fa-search" aria-hidden="true"></i> <b>Look for Suggestion</b>
						</button>
					</div>
				</div><!--/.row -->
			</div><!--/.container-fluid -->
		</div><!--/.list-group-item -->
	</div><!--/.list-group -->
	<!-- -->
		
	<div id="suggestionPlatform" class="hide-block">
		<div>
			<hr class="paraheading-border-up"/>
			<h4 class="paraheading">Suggestions</h4>
			<hr class="paraheading-border-bottom"/>
		</div>
		<div id="displayAnswer"></div>
	</div>
				
  </div><!--/.col-md-6 -->
  <div class="col-md-6">
	<!-- -->
	<div>
		
	</div>
			  
	<div>
		<hr class="paraheading-border-up mtop0p"/>
		<h4 class="paraheading">Produce
		<button id="" class="pull-right btn btn-success-o btn-style" style="font-size: 10px;margin-top: -1.6px;">
			<i class="fa fa-user-plus" aria-hidden="true"></i> <b>Invite People</b>
		</button>
		</h4>
		<hr class="paraheading-border-bottom"/>
	</div>
			  
	<div align="right">
		
	</div>

	<div class="list-group">
		<div class="list-group-item mtop15p chat-div scroll">
			 <div align="center" class="font-grey fs-10p">Your Message to the Users are published here</div>
			 <div id="promptWriteChat" class="mtop15p"></div>
		</div><!--/.list-group-item -->
	</div><!--/.list-group -->

  </div><!--/.col-md-6 -->
  
 </div><!--/.row -->
</div><!--/.container-fluid -->
	 
	 