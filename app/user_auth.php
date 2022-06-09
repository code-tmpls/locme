<?php 
include_once 'templates/basic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Locum Me : AI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/simple-sidebar.css">
  <script src="<?php echo $PROJECT_URL; ?>js/api/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/annyang.min.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/common.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/ui.js"></script>
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/project.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/bootstrap-advanced.css">
<style>
body { background-color:#673ab7; }
.authForm { background-color:#fff;margin:10px;border-radius:10px;padding-left:25px;padding-right:25px;padding-top:5px; }
.authFormHeader { border-bottom:1px solid #ccc; }
.authFormElem { margin-top:20px;margin-left:5px;margin-right:5px; }
.btn-purple-o,.btn-purple-o:hover,.btn-purple-o:focus,.btn-purple-o:active { background-color:#fff;color:#673ab7;border:1px solid #673ab7; }
.txtDec-underline { text-decoration:underline; }
.mbot25p { margin-bottom:25px; }
.hide-block { display:none; }
</style>
<script type="text/javascript">
function validateEmail(email){  
 var status = true;
 var atposition=email.indexOf("@");  
 var dotposition=email.lastIndexOf(".");  
 if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){ status = false; }  
 return status;
}
// Login/ForgotPassword Form
function displayFormContainer(formId){
  if(formId==='login'){ 
		if($('#displayLoginForm').hasClass('hide-block')){ $('#displayLoginForm').removeClass('hide-block'); } 
		if(!$('#displayForgotPasswordForm').hasClass('hide-block')){ $('#displayForgotPasswordForm').addClass('hide-block'); } 
		accountLoginFormReset();
  } else if(formId==='forgotPassword') {
		if(!$('#displayLoginForm').hasClass('hide-block')){ $('#displayLoginForm').addClass('hide-block'); } 
		if($('#displayForgotPasswordForm').hasClass('hide-block')){ $('#displayForgotPasswordForm').removeClass('hide-block'); }  
  }
}
function accountLoginFormReset(){
  document.getElementById('userLogin_alert').innerHTML='';
  bootstrap_formField_trigger('remove',['userLogin_emailAddress','userLogin_password']);
}
function accountLoginForm(){
  var emailAddress = $('#userLogin_emailAddress').val();
  var accPwd = $('#userLogin_password').val();
  accountLoginFormReset();
  if(emailAddress.length===0 && accPwd.length === 0){
	bootstrap_message_error('userLogin_alert','Missing Email Address and Account Password.');
	bootstrap_formField_trigger('error',['userLogin_emailAddress','userLogin_password']);
  } else {
	 if(emailAddress.length===0){
		bootstrap_message_error('userLogin_alert','Missing Email Address.');
		bootstrap_formField_trigger('error',['userLogin_emailAddress']);
	 } else if(accPwd.length===0){
		bootstrap_message_error('userLogin_alert','Missing Account Password.');
		bootstrap_formField_trigger('error',['userLogin_password']);
	 } else {
		 if(validateEmail(emailAddress)){
			 // Validate Here
			 window.location.href=PROJECT_URL+'user/account';
		 } else {
			bootstrap_message_error('userLogin_alert','Email Address Format is Invalid');
			bootstrap_formField_trigger('error',['userLogin_emailAddress']); 
		 }
		
	 }
  }
}
function sendResetPwdLinkFormReset(){
	document.getElementById('userForgotPwd_alert').innerHTML='';
	bootstrap_formField_trigger('remove',['userForgotPwd_emailAddress']);
}
function sendResetPwdLinkForm(){
	var emailAddress = $('#userForgotPwd_emailAddress').val();
	sendResetPwdLinkFormReset();
	if(emailAddress.length===0){
		bootstrap_message_error('userForgotPwd_alert','Missing Email Address.');
		bootstrap_formField_trigger('error',['userForgotPwd_emailAddress']);
	} else {
		 // Validate Here
	}
}  
// Register Form
function accountRegisterForm(){
 var name = $('#userRegister_name').val();
 var emailAddress = $('#userRegister_emailAddress').val();
 var accPwd = $('#userRegister_accPwd').val();
 var confirmPwd = $('#userRegister_confirmPwd').val();
 accountRegisterFormReset();
 if(name.length>0 && emailAddress.length>0 && accPwd.length>0 && confirmPwd.length>0){
	if(validateEmail(emailAddress)){
		if(accPwd === confirmPwd){
			// Code it here
		} else {
			bootstrap_message_error('userRegister_alert','Password and Confirm Password doesn\'t not matched.');
			bootstrap_formField_trigger('error',['userRegister_accPwd','userRegister_confirmPwd']);
		}
	} else {
		bootstrap_message_error('userRegister_alert','Email Address Format is Invalid');
		bootstrap_formField_trigger('error',['userRegister_emailAddress']);
	}
 } else {
	var errorMessage = 'Missing';
	var errorFields = [];
	if(name.length===0){ errorMessage+= ' Name,';errorFields.push('userRegister_name'); }
	if(emailAddress.length===0){ errorMessage+= ' Email Address,';errorFields.push('userRegister_emailAddress'); }
	if(accPwd.length===0){ errorMessage+= ' Account Password,';errorFields.push('userRegister_accPwd'); }
	if(confirmPwd.length===0){ errorMessage+= ' Confirm Password,';errorFields.push('userRegister_confirmPwd'); }
	bootstrap_message_error('userRegister_alert',errorMessage.slice(0, -1)+'.');
	bootstrap_formField_trigger('error',errorFields); 
 }
}
function accountRegisterFormReset(){
 document.getElementById('userRegister_alert').innerHTML='';
 bootstrap_formField_trigger('remove',['userRegister_name','userRegister_emailAddress','userRegister_accPwd','userRegister_confirmPwd']);
}
$(document).ready(function(){
 sel_header_mainMenu("locumme_header_auth");
});
</script>
</head>
<body>

<?php include_once 'templates/header_default.php'; ?>

<div class="container-fluid">
 <div class="row" style="margin-top:60px;">
   <div class="col-md-2"></div>
   <div class="col-md-4">
		<?php include_once 'templates/user_login.php'; ?>
   </div>
   <div class="col-md-4">
		<?php include_once 'templates/user_register.php'; ?>
   </div>
   <div class="col-md-2"></div>
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>