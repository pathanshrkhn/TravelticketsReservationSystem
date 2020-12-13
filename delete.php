<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cstatus</title>
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
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
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
				 				  
				  <h4>Choose Route for Deletion</h4>
				 <br>
				  <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">

    <div align="center">
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

					echo"	<br><b>From:&nbsp;&nbsp;&nbsp;&nbsp;<select name='from'  class='tmSelect auto' data-class='tmSelect tmSelect2' data-constraints=''>"	;	
				for($i=0; $i<=$j;$i++){	echo"	
								<option>{$s[$i]}</option>
								
							
							";
							}
						echo "
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 To:&nbsp;&nbsp;&nbsp;&nbsp;
							<select name='to' class='tmSelect auto' data-class='tmSelect tmSelect2' data-constraints=''>
								
								";
								for($i=0; $i<=$j;$i++){	echo"	
								<option>{$s[$i]}</option>
								
							
							";
							}
								
						echo"	</select> 
						 <button class='button' style='vertical-align:middle' type='submit'><span>GO</span></button></a>
						 	  </form>
						";
						$from=$_POST['from'];
						 $to=$_POST['to']; 	
						if($to!=null)
						{		
				 $from=$_POST['from'];
						 $to=$_POST['to'];
						 
									
				 if($from == $to)
	{
	echo"<br><font color='red' ><b>Source and Distination are same</b><br>Please choose the Source and Distination City </font>";
	
	}
	else
	{				
					
	//delete
				$tt="select bus from {$from} where name='{$to}'";
				$re = mysql_query( $tt, $con );
				
				if(! $re ) {

				echo "<br><font color='red' ><b>Choose the correct route</b><br>This route not exists </font>";

						  
		

}

else
{



							$sql = "delete from {$from} where name='{$to}'";
							

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('Could not get data: ' . mysql_error());

}
else
{

echo"<h3>Route Deleted Successfuly</h3>";

}
}
	    }         
		}
				 ?>
							      
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
		                   
		                 
                              </div>
	</body>
</html>