<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Form</title>

<!--STYLESHEETS-->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="JS/jquery.min.js"></script>
<!--Slider-in icons-->
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});

	$(".repassword").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".repassword").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>

</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->


<form name="login-form" class="login-form" action="regcheck.php" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Regiter Form</h1><!--END TITLE-->
    <span>Register in this website to join us!</span>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<input name="username" type="text" class="input username" placeholder="Username" onfocus="this.value=''" />
    <input name="password" type="password" class="input password" placeholder="Password" onfocus="this.value=''" />
    <input name="repassword" type="password" class="input password" placeholder="Confirm your password" onfocus="this.value=''" />
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <a href="index.html"><img src="images/back.jpg" height="50" width="50"></a>
	<input type="submit" name="submit" value="Register" class="register" />
	<!--<a href="index.html"><input type="submit" value="Back to Login" class="register"/></a>-->
    </div>
    <!--END FOOTER-->
	</form>



</div>


<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->

</body>
</html>
