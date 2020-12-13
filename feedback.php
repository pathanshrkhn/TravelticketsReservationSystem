<?php
include("mysql.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form1.css">
		<link rel="stylesheet" href="css/style.css">
				<link rel="stylesheet" href="css/bbb.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		
		function validate()
{

var emailID = document.myform.email.value;
atpos = emailID.indexOf("@");
dotpos = emailID.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 ))
{
alert("Please enter correct email ID")
document.myform.email.focus() ;
return false;
}


	return( true );
}	
		
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	    <style type="text/css">
<!--
.style1 {
	color: #008000;
	font-weight: bold;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
}
-->
        </style>
</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.php">HOME</a></li>
								<li><a href="enquiry.php">ENQUIRY</a></li>
							
							
								<li><a href="feedback.php">FeedBack</a></li>
							<li><a href="login.php">ADMIN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
		  <div class="container_12">
				
				<center>
					<h3>FeedBack</h3>
			<?
			ob_start();
			?>
					<form  name="myform" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post"  onSubmit="return validate()">
						
								<div class="form">
							<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" name="name" required>
						</div>
						<div class="form">
							<input type="text" placeholder="Email:" data-constraints="@Required @Email"  name="email" required>
					  </div><div class="form">
							<input type="text" placeholder="Subject" data-constraints="@Required @JustLetters" name="subject" required>
							
								</div><div class="form">
							<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)' name="msg" required></textarea>
						
						</div>
							<br>	<br>	<br>	<br>
							
								<button type="reset" class="s1" name="clear" >Clear</button>
 									<button type="submit" class="s1" name="submit" >Submit</button>
				
			</form>
							
						  <?
							 $name=$_POST['name'];
						 $email=$_POST['email'];
						 $sub=$_POST['subject'];
						 $msg=$_POST['msg'];
							if(isset($_POST['submit']))
							{
								ob_end_clean();
								$d=date("D-M-Y");
$sql="insert into feedback values('{$email}','{$name}','{$msg}','{$d}')";

$retval = mysql_query( $sql, $con);

if(! $retval ) {
die('Somthing Went Wrong ' . mysql_error());
}
else
{

echo "  <span class='style1'><br>Feedback Send Successfuly </span>";
}							
							
							
							
							}
							
							?>
							
							
				         </div>
								</div>		</div>
					
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				
					
					<div class="copy">
						By Sher
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>