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
			<link rel="stylesheet" href="css/rbox1.css">
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
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
		<div class="content"><div class="ic"></div>
			
			<div class="container_12">
			<center>
				  <h3>	Check Status NOW! </h3>
				  <br><br>
				  
				  <h6>Choose Route</h6>
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
						 <button class='button' style='vertical-align:middle' type='submit'><span>Check</span></button></a>
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
					
						  
				  
//seats no gernerator function
function st($a)
{

							 $from=$_POST['from'];
						 $to=$_POST['to'];
						  
if((file_exists("seats/{$from}/{$to}/{$a}/counts.txt"))!=1)
{
if((is_dir("seats/{$from}"))!=1)
{
mkdir("seats/{$from}");
}

if((is_dir("seats/{$from}/{$to}"))!=1)
{
mkdir("seats/{$from}/{$to}");
}

if((is_dir("seats/{$from}/{$to}/{$a}"))!=1)
{
mkdir("seats/{$from}/{$to}/{$a}");
}


$file = fopen("seats/{$from}/{$to}/{$a}/counts.txt", "w" );
fwrite($file,"0");
fclose($file);
}
					  
$file = fopen("seats/{$from}/{$to}/{$a}/counts.txt", "r" );
$l=fread($file,10);

fclose($file);

$c=45 - $l;        
  return($c);
                        
    }   
	
	//end fuction
	
	
	
	
	
	
	
	$f1=st('8am');
	$bk1=45-$f1;
	
		$f2=st('12pm');
	$bk2=45-$f2;
		$f3=st('5pm');
$bk3=45-$f3;
			$f4=st('9pm');
		
$bk4=45-$f4;
	
	//Table
	echo"<font color='#000000'>   
<br><br>
	<br>
	
				 <div class='rcorners6'><b>  	
			  <span class='style1'> Travels Time                  </span>
			
			  <table width='667' height='130'  cellpadding='4' border='3' cellspacing='2'>
							        
			         <tr>
			           <td width='131' height='26'><div align='center'></div></td>
                       <td width='115'><div align='center'>8am</div></td>
                       <td width='125'><div align='center'>12pm</div></td>
                       <td width='127'><div align='center'>5pm</div></td>
                       <td width='121'><div align='center'>9pm</div></td>
                     </tr>
			         <tr>
			           <td><div align='center'><strong>Availabe Seats: </strong></div></td>
                       <td><div align='center'><font color='#00BB00'>{$f1}</div></td>
                       <td><div align='center'><font color='#00BB00'>{$f2}</div></td>
                       <td><div align='center'><font color='#00BB00'>{$f3}</div></td>
                       <td><div align='center'><font color='#00BB00'>{$f4}</div></td>
                     </tr>
			         <tr>
			           <td><div align='center'><strong>Book Seats&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </strong></div></td>
                       <td><div align='center'><font color='#D20000'>{$bk1}</div></td>
                       <td><div align='center'><font color='#D20000'>{$bk2}</div></td>
                       <td><div align='center'><font color='#D20000'>{$bk3}</div></td>
                       <td><div align='center'><font color='#D20000'>{$bk4}</div></td>
                     </tr>
							        </table>				    
							  
																   ";
																   
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
		                      <div align="right">
		                    
                              </div>
	</body>
</html>