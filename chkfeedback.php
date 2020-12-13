<?php
include("mysql.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>feedback</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/rbox.css">
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
.style6 {color: #000000; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; font-size: 16px; font-style: italic; }
.style13 {
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
				 <span class="style13"><a href="route.php" class="btn">&nbsp;&nbsp;&nbsp;Route </a>
				                          <a href="cstatus.php" class="btn">Travel Status </a>
				                          <a href="bookingHis.php" class="btn">Booking History</a>
				  
				                                          <a href="search.php" class="btn">Search</a>
				  	                             
                                                          <a href="chpass.php" class="btn">Change Password</a> 
			                                              <a href="index.php" class="btn">Logout</a>			</span>
				 <h3>Check FeedBack</h3>
					<div class="rcorners4 ">
					<table width="959" height="97" border="0" cellpadding="2" cellspacing="2">
                      <tr>
                        <td width="132" height="29"><div align="center" class="style6">Date</div></td>
                        <td width="127"><div align="center" class="style6">Sender</div></td>
                        <td width="138"><div align="center" class="style6">Email Address </div></td>
                        <td width="536"><div align="center" class="style6">FeedBack</div></td>
                      </tr>
                     

					   <tr>
	              
				
						  <?
						  
					//var arr	  
					$name=array();	 
					
					$email=array();	
					$msg=array();	
					$date=array();				
					
					 
						  $sql = "SELECT * FROM feedback";

$retval = mysql_query( $sql, $con );

$i=1;
if(! $retval ) {
die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {



$name[$i]=$row['name'];
$email[$i]=$row['email'];
$msg[$i]=$row['msg'];
$date[$i]=$row['date'];

$i++;
}
						  
for($i=sizeof($name);$i>0;$i--)
{						  
	echo"
	   
	 <td height='24'> 		
						  <hr color='#FFFFFF'> <div align='center' class='style8 style10'>{$date[$i]}  </div> </td>
                        <td>	<hr color='#FFFFFF'> <div align='center' class='style9'>{$name[$i]}</div></td>
                        <td> 	<hr color='#FFFFFF'><div align='center' class='style11'>{$email[$i]}</div></td>
                        <td>	<hr color='#FFFFFF' width='92%'><div align='center' class='style12'>{$msg[$i]}</div></td>
						
                   </tr>
							
       
				             
	
	";				  
		
							
}							
							?>
					
					  </table>
					
			</div>
							
							
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
		
	</body>
</html>