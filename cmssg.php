<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Message</title>
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
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/box.css">
			<link rel="stylesheet" href="css/t.css">
		<script>
		fuction s(){
		alert("<?php echo"llllll"; ?>");
		}
		</script>
	    <style type="text/css">

.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
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
								<li ><a href="index.php">HOME</a></li>
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
						<a href="index.html">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			
			
				<div class="container_12">
				
				
				
				<?
						
$query_file = 'file/cancellast.txt';


$fp = fopen($query_file, 'r');

$l=fread($fp,60);

fclose($fp);


	$sql = " drop table {$l}";

$retval = mysql_query( $sql, $con );


if(! $retval ) {

echo"<center><b><h3>Error-<br><br> Please Try Again</b></h3> ";
}	else			
  {
  echo"<b><center><h3> Ticket Cancel Successfully";
  } 
   
   
   mysql_close($con);
   
   
   
	?>
					
					
					
						
	
      </div>
 


	
	
		</div>

	
		</div>
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