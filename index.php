<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home </title>
		<meta charset="utf-8">
		
		
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
        <link rel="stylesheet" href="css/button.css">
		
            
			
			
<script >
// Form validation code will come here.
function validate()
{
if( document.myform.from.value ==document.myform.to.value)
{

alert( "Please Choose the Route of Travel!" );
document.myform.name.focus() ;
return false;
}


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
            
            

		</script>
		
	</head>
	<body class="page1" id="top">
<!--h-->
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
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<div data-src="images/slide.jpg">
					<div class="caption fadeIn">
						<h2>ETIHAD </h2>
						<div class="price">
							Travels
							
						</div>
						
					</div>
				</div>
				<div data-src="images/slide1.jpg">
					<div class="caption fadeIn">
						<div class="caption fadeIn">
						<h2>ETIHAD </h2>
						<div class="price">
							Travels
							
						</div>
					
					</div>
				</div>
				<div data-src="images/slide2.jpg">
					<div class="caption fadeIn">
						<h2>ETIHAD </h2>
						<div class="price">
							Travels
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
<!--===Content====-->
		<div class="content">
			<div class="container_12">
			
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
                    
                    
					<form id="bookingForm" name="myform" action="userinfo.php" method="post" onSubmit="return validate()">
						<div class="fl1">
							<div class="tmInput">
								<input name="name" type="text"   placeHolder="Name:"  Min="3" data-constraints='@NotEmpty @Required @AlphaSpecial' required>
							</div>
							<div class="tmInput">
								<input name="phoneno" min="10" placeHolder="Phone No:"   type="text" data-constraints="@NotEmpty @Required" max="10" min="10" required>

							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email" required>
							</div>
							
						</div>
						<div class="clear"></div>
						<strong>Journey Date</strong>
						<label class="tmDatepicker">
							<input type="datetime" name="date" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date" required>
						</label>
						<div class="clear"></div>
						
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort </p>
							<input name="comfort"  value="Sliper" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
							<span>Sliper</span>
							<input name="comfort" type="radio" value="standard" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])'/>
							<span>Standard</span>
							<input name="comfort" value="Luxry" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Luxry</span>
						</div>

						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>From</em>
							<?php
							
							$sql = "SELECT * FROM city";

$retval = mysql_query( $sql, $con );

$i=0;
if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
$s=array();

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {



$s[$i]=$row['name'];

$i++;
}
$j=sizeof($s);

					echo"	<select name='from' class='tmSelect auto' data-class='tmSelect tmSelect2' data-constraints=''>"	;	
				for($i=0; $i<=$j;$i++){	echo"	
								<option>{$s[$i]}</option>
								
							
							";
							}
						echo "
						</select><div class='clear'></div>
							 <em>To</em>
							<select name='to' class='tmSelect auto' data-class='tmSelect tmSelect2' data-constraints=''>
								
								";
								for($i=0; $i<=$j;$i++){	echo"	
								<option>{$s[$i]}</option>
								
							
							";
							}
								
						echo"	</select> ";
							
							
							?>
                            <div class="clear"></div>
                         
						<div class="fl1 fl2">
							
<em>Time</em>
                                                                
							<select name="time" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="" required>
								<option>8am</option>
								<option>12pm</option>
								<option>5pm</option>
								<option>9pm</option>
							</select>
                            
						</div>
						<div class="clear"></div>
						
                        
							<em>Total Seats</em>
							<select name="seats" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
                                <option>5</option>
							</select>
                            </div>
                        		<div class="clear"></div>
								<br>
                        	<br>
                        
                        <button class="button" style="vertical-align:middle" type="submit"><span> Go</span></button>

                        
                        
					</form>
				</div>
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					
<hr>
<div class="alright">
							
								<a href="feedback.php" class="btn">	&nbsp;&nbsp;&nbsp;&nbsp;FeedBack&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							</div>
						<div class="alright">
							
								<a href="enquiry.php" class="btn">	Enquiry About Travels</a>
							</div>
				
						<div class="alright">
							
								<a href="cancel.php" class="btn">	Cancellation Of The Ticket</a>
							</div>
							
						<div class="alright">
							
								<a href="cstatus.php" class="btn">	Travel Status (Seat Availability)</a>
							</div>
													
								
	
				</div>
	
				</div>
			</div>
		</div>
<!--===f=-->
		<footer>
			<div class="container_12">
				
					<div class="copy">
ETIHAD Travels by Sher
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
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

