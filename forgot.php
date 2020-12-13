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
		<link rel="stylesheet" href="css/rbox1.css">
			<link rel="stylesheet" href="css/form1.css">
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style4 {
	color: #FF4F4F;
	font-style: italic;
}
.style5 {
	color: #008400;
	font-weight: bold;
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
                          
               <?
				ob_start();
				?> 
				
	<h4>	<font size="+6" color="#494949" style="azimuth:center"><b>Security Question</b></font></h4>
				 <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
					
						
								
						  <div class="rcorners1"   >
						  <br>
							
					
                    <strong>Question:</strong> </font><span class="style4">What is your favourite city?</span><font color='#000000'><br>

                    <br>
             <div class="form">       <strong>Answer&nbsp;</strong>&nbsp;
					
                    <input type='text' name='q' placeholder="Answer" required>
                    <br>
</div>
                    <br>
	                </font>
						<input type="submit" value="Ok" class="bb">
			</form>
			
			
					
					</b>
						
			
	
		<?
		
		
		$q=$_POST['q'];
	
//security qution
$file = fopen("question.txt", "r" );

$l=fread($file,60);
fclose( $file );
if($q!=null)
{
if($q==$l)
{
ob_end_clean();

echo"<br><br><br><br><br>
<span class='style5'>Right Answer Press Continue to Recover Password	  </span></div>

<A href='recover.php' class='btn'>
Continue>>>></a>
			

";
		}
		else
		{
		
		echo"<br><font color='red' ><b>Wrong answer</b><br>Try agian</font>";
		
		}
		}
		
		
		?>
		
		
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
					<div class="socials">
						
					</div>
					<div class="copy">
						<div align="right">ETIHAD Travels by Sher
					    </div>
					</div>
				</div>
			</div>
	</footer>
		                      <div align="right">
		                        
                              </div>
	</body>
</html>