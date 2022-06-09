<style>
body { font-size:12px; }
.navbar-page-header { background-color:#fff; }
.navbar-nav>li>a , .navbar-nav>li>a:focus{ background-color:#fff;color:#000;font-size:12px; }
.navbar-nav>li>a:hover {  background-color:#fff;color:#777; }
.navbar-nav>li.active>a,.navbar-nav>li.active>a:hover, .navbar-nav>li.active>a:focus { color:#000;border-bottom:3px solid #000; }
</style>
<script type="text/javascript">
function sel_header_mainMenu(sel_menuId){
 var menus = ["locumme_header_home","locumme_header_pricing","locumme_header_contact","locumme_header_auth"];
 for(var index=0;index<menus.length;index++){
   if(menus[index]===sel_menuId){ $('#'+menus[index]).addClass('active'); } 
   else { $('#'+menus[index]).removeClass('active'); }
 }
}
</script>
<nav class="navbar navbar-page-header">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand a-custom">
		<span class=" font-blue logoName">locum Me</span>
	  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li id="locumme_header_home"><a href="<?php echo $PROJECT_URL; ?>"><b>Home</b></a></li>
        <li id="locumme_header_pricing" ><a href="#"><b>Pricing</b></a></li>
        <li id="locumme_header_contact" ><a href="#"><b>Contact us</b></a></li>
		<li id="locumme_header_auth" ><a href="<?php echo $PROJECT_URL; ?>user/login"><span class="glyphicon glyphicon-user"></span> <b>Login / Register</b></a></li>
		<li>
		  <a href="#">
		    <button class="btn btn-danger btn-sm" style="margin-top:-5px;font-texgyreadventor;letter-spacing:1px;"><b>Train yourself for Free</b></button>
		  </a>
		</li>
      </ul>
    </div>
  </div>
</nav>