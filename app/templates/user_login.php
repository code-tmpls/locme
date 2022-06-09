<!--/#loginForm ::: START -->
<div class="authForm">
		<!-- -->
  <div id="displayLoginForm">
  <!-- -->
	<div class="authFormHeader"><h3><b>Login</b></h3></div>
	<div class="authFormElem">
	<!-- -->
		<div id="userLogin_alert" class="form-group"></div>
		<div class="form-group">
			<label>Email Address</label>
			<input id="userLogin_emailAddress" type="text" class="form-control" placeholder="Enter your Email Address" />
		</div>
		<div class="form-group">
			<label>Password</label>
			<input id="userLogin_password" type="password" class="form-control" placeholder="Enter your Password" />
		</div>
		<div align="right" class="form-group">
			<label><a href="#" class="txtDec-underline" onclick="javascript:displayFormContainer('forgotPassword');">Forgot Password?</a></label>
		</div>
		<div align="right" class="form-group">
			<button class="btn btn-default btn-purple-o mbot25p" onclick="javascript:accountLoginForm();"><b>Login to Account</b></button>
		</div>
	<!-- -->
	</div><!--/.authFormElem -->
  <!-- -->
  </div><!--/#displayLoginForm -->
  <div id="displayForgotPasswordForm" class="hide-block">
  <!-- -->
	<div class="authFormHeader"><h3><b>Forgot Password</b></h3></div>
	<div class="authFormElem">
	<!-- -->
		<div align="right" class="form-group">
			<button class="btn btn-default btn-xs" style="padding:8px;color:#aaa;border-radius:8px;"
			onclick="javascript:displayFormContainer('login');"><i class="fa fa-arrow-left"></i>&nbsp; Back to Login</button>
		</div>
		<div id="userForgotPwd_alert" class="form-group"></div>
		<div class="form-group">
			<label>Email Address</label>
			<input id="userForgotPwd_emailAddress" type="text" class="form-control" placeholder="Enter your Email Address" />
		</div>
		<div align="right" class="form-group">
			<button class="btn btn-default btn-purple-o mbot25p" onclick="javascript:sendResetPwdLinkForm();"><b>Reset My Password</b></button>
		</div>
	<!-- -->
	</div><!--/.authFormElem -->
  <!-- -->
  </div><!--/#displayForgotPasswordForm -->
		
		
		<!-- -->
</div>
<!--/#loginForm ::: END -->