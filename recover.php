<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Recover password</title>
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
		<link rel="stylesheet" href="css/boxc.css">
		<link rel="stylesheet" href="css/bbb.css">
		<link rel="stylesheet" href="css/rbox1.css">
			<link rel="stylesheet" href="css/form1.css">
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style4 {
	color: #FF4F4F;
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
						<a href="index.html">						</a>					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			
			<div class="container_12">
			<center>
				  
				 
    <div align="center">
       <!-- Login Box -->
                          
                
				
	<h4>	<font size="+6" color="#494949" style="azimuth:center"><b>Recover Password</b></font></h4>
				 <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
					
						
						  <div class="rcorners1">
						  <br>
							
							<div class="form">
						&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">&nbsp;New Password&nbsp;&nbsp;:&nbsp;</span>	
						<input name="npass1" size="25"  type="password" data-constraints="@NotEmpty @Required" placeholder="Password" required><br><br>	
                        <span class="style1">Conform Password&nbsp;&nbsp;:</span>&nbsp;&nbsp;	<input name="npass2" size="25"  type="password" data-constraints="@NotEmpty @Required " placeholder="Conform Password" required><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
						<br>
					<br> 	<font color='#000000'> 
				
					<hr>

                    <strong>Question:</strong> </font><span class="style4">What is your favourite city?</span><font color='#000000'><br>

                    <br>
                    <strong>Answer&nbsp;</strong>&nbsp;
                    <input type='text' name='q' placeholder="Answer" required>
                    <br>

                    <br>
</div>	                </font>
						<input type="submit" value="Ok" class="b">
			</form>
			
			</div>
					
					</b>
						
			
	
		<?
		
		
		$s=$_POST['q'];
		$pp=$_POST['npass1'];

		$ppp=$_POST['npass2'];
		
		if($ppp!=null)
		{
		if($pp==$ppp){
					
		$sql ="SELECT * FROM admin";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());
}


while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

		$pass=$row['password'];
					
	}	
		
		
		
		
		$sql = "insert into  admin values('{$ppp}')";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());

}


//security qution
$file = fopen("question.txt", "w" );

fwrite($file,$s);
fclose( $file );
echo"<br><font color='#002F00'>Password Changed Successfully</font>";





	
		
		
		
		
		}
		else
		{
		
		echo"<br><font color='red' ><b>New Password not match </b><br>Try agian</font>";
		
		}
		}
		?>
		
					
		
				
			  </div>
				</div>

      <br>
							      
      
    </div>
							    </div>
							             </div>
							             </center>
							             </div>
                                  <!--==============================footer=================================--> 
    </div>
							  <footer>
			<div class="container_12">
				<div class="grid_12">
					
					</div>
					<div class="copy">
						<div align="right">ETIHAD Travels by Sher
					    </div>
					</div>
				</div>
			</div>
	</footer>
		                      <div align="right">
		                        <script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		                      </script>
                              </div>
	</body>
</html>