<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>login</title>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form1.css">
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
				<link rel="stylesheet" href="css/bbb1.css">
		<link rel="stylesheet" href="css/rbox.css">
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, //10 items above 1000px browser width
				itemsDesktop : [995,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 2], // betweem 900px and 601px
				itemsTablet: [700, 2], //2 items between 600 and 0
				itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
            
		
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style3 {
	font-size: 16;
	font-weight: bold;
	color: #000000;
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
		<div class="content">
			<div class="container_12">
			<center>
				  
				 
    <div align="center">
       <!-- Login Box -->
                          
                
				
	<h4>	<font size="+6" color="#494949" style="azimuth:center"><b>Enter The Pssword</b></font></h4>
				
					
					
						  <div class="rcorners1">
						 
		<form  action="admin.php" method="post">
							<center>
								<div class="form">
							<span class="style1"><span class="style3">Password&nbsp;&nbsp;:</span>&nbsp;&nbsp;
							
							
						
					
						
							<input name="pass"    type="password" data-constraints="@NotEmpty @Required" placeholder="Password" required><br>
</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
						<input type="submit" value="Ok" class="s1">
			
					</b>
						<br><br><br>
							
					<hr >
				<br>
					<em><font color="#808080">
	                <a href="forgot.php" >Forget Password ?</a> </em></div>
		  </div>

      <br>
							      
      	</form>
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
		            
                              </div>
	</body>
</html>