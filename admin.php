<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<link rel="stylesheet" href="css/button1.css">
		<link rel="stylesheet" href="css/box2.css">
		<link rel="stylesheet" href="css/boxm.css">
		<script>
		
		function Redirect() {
window.location="admin.php";
}
		
		
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style13 {
	color: #804000;
	font-weight: bold;
	font-size: 36px;
	font-style: italic;
	font-family: FontAwesome;
}
.style18 {font-size: 36px}
.style20 {
	color: #000000;
	font-weight: bold;
	font-size: 16;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
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
				<div class="grid_12">
					<h1>
						<a href="index.html">						</a>					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			
			
		  <div class="container_12">
		  <br>
				  <?
				  //
				  $sql ="SELECT * FROM admin";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());
}


while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

		$pas=$row['password'];
					
	}	
	
	if($pas==$_POST['pass'])
	{
		
				  
				  
				  
				  ?>
				 
				  <p>                  
				  <?
					echo " <span class='style20'>  <br>
					<b>			 
				 Date:-				  " . date("D-M-Y")."";
						
						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Time:-				  " . date("h:i:sa") ." </b></p></span>";
				
			
				  ?>
				
				  <center>				  
				  <br>
				  <br>
				
				  <br>
		    </p>
				<p><span class="style13"> <marquee behavior="alternate" align="bottom">Welcome To ETIHAD</span>	<span class="style13"> Travels		</span></marquee><span class="style18"><br>
		        <br>
				</span><br><br>
		
	
				  <a href="route.php" class="btn">&nbsp;&nbsp;&nbsp;Route </a>
				                          <a href="cstatus.php" class="btn">Travel Status </a>
				                          <a href="bookingHis.php" class="btn">Booking History</a>
				  
				                                          <a href="search.php" class="btn">Search</a>
				  	  <a href="chkfeedback.php" class="btn">Check FeedBack</a>  
            <a href="chpass.php" class="btn">Change Password</a> 
			            <a href="index.php" class="btn">Logout</a> 
            </p>
			
			<?
			}
			else
		{
		
		echo"<br><br><br><br><font color='red' ><b><center>Password not match </b><br>Try agian</font>";
		
		}
		
			
			
			
			
			?>
		  </div>	
		</div>	
		<!--==============================footer=================================-->
		
		<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					
					<div class="copy">
						ETIHAD Travels by Sher
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
                    
		
	</body>
</html>