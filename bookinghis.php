<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>booking History</title>
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
		<link rel="stylesheet" href="css/rrbox.css">
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style9 {color: #000000; font-weight: bold; }
.style13 {
	font-size: 18px;
	color: #009900;
	font-weight: bold;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style38 {color: #000000; font-weight: bold; font-size: 16px; }
.style39 {font-size: 14px}
.style40 {
	font-size: 9px;
	color: #000000;
	font-style: italic;
}
.style41 {
	color: #000000;
	font-size: 9px;
}
.style45 {color: #000000}
.style46 {color: #FFFFFF}
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
				
				           
				            <center>
							
														<a href="route.php" class="btn">&nbsp;&nbsp;&nbsp;Route </a>
								<a href="cstatus.php" class="btn">&nbsp;&nbsp;&nbsp;	Travel Status </a>
	            				<a href="bookingHis.php" class="btn">&nbsp;&nbsp;&nbsp;Booking History</a>
	
				<a href="search.php" class="btn">&nbsp;&nbsp;&nbsp;Search</a>
			
				<a href="chpass.php" class="btn">&nbsp;&nbsp;&nbsp;Change Password</a>	
	
	        <h3>Booking History<br>
			    </h3>
		
	    <div align="center">
	      <?
		ob_start();
		?>
	  
		 	<div class="rcorners6"> <span class="style13">Today	   
	      </span>
		  <br><br>
	     <table width='927' height='88' border='0' cellpadding='2' cellspacing='2'>
            <tr>
              <td width='70' height='40'><div align='center'><span class='style38 style39'>Ticket No </span></div></td>
              <td width='71'><div align='center'><span class='style38 style39'>From</span></div></td>
              <td width='94'><div align='center'><span class='style38 style39'>To</span></div></td>
              <td width='51'><div align='center'><span class='style38 style39'>Seat No </span></div></td>
              <td width='137'><div align='center'><span class='style38 style39'>Mobile No </span></div></td>
              <td width='87'><div align='center'><span class='style38 style39'>Travel Time</span></div></td>
              <td width='129'><p align='center'><span class='style38 style39'>Travel Date</span> <span class='style40'>(mm/dd/yy)</span></p></td>
              <td width='238'><p align='center' class='style39'><span class='style9'>Booking Date </span><span class='style41'>(mm/dd/yy)</span></p>
              </td>
            </tr>
  
  
  
  <?     
		
		
		
		
	
  $name= array();		               


	$sql = "SELECT * FROM ticketno";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());
}

 $name= array();		               

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

	               

$i=0;
    

$name[$i]=$row['tno'];


 $sq = "SELECT * FROM {$name[$i]}";

$retva = mysql_query( $sq, $con );

if(! $retva ) {


}

else
{
while($row = mysql_fetch_array($retva, MYSQL_ASSOC)) {

$ticketno=$row['ticketno'];
$to=$row['t_o'];
$from=$row['frm'];
$date = $row['date'];
 $time = $row['time'];
 $phoneno = $row['phoneno'];
 $seats = $row['seats'];
  $bdate = $row['bdate'];
 

  if($bdate==date("m/d/y"))
  {
//tr
 echo "
   	 <td><div align='center'><em><span class='style16 style45'>{$ticketno}</span></em></div></td>
      <td><div align='center'><span class='style16 style45' >{$from}</span></div></td>
    <td><div align='center'><span class='style18 style45'>{$to}</span></div></td>
    <td><div align='center'><span class='style28 style45'>{$seats}</span></div></td>
    <td><div align='center'><span class='style45 style21'><em>{$phoneno}</em></span></div></td>
    <td><div align='center'><span class='style29'><span class='style22 style45'>{$time}</span></span></div></td>
    <td><div align='center'><span class='style23 style45'>{$date}</span></div></td>
    <td><div align='center'><span class='style28 style45'>{$bdate}</span></div></td>
  </tr>
";
//
}

}//

}




$i++;
}



?>

          </table>
	    </div>
	    <br><br>
<div class="rcorners6">	 
<?
$date = isset($_GET['date']) ? $_GET['date'] : date('m/d/y');
$prev_date = date('m/d/y', strtotime($date .' -1 day'));

$next_date = date('m/d/Y', strtotime($date .' +1 day'));
//
echo"<span class='style13'>Date:-	   
	      {$prev_date}		</span>";		  
echo"
<br><br>
<table width='927' height='88' border='0' cellpadding='2' cellspacing='2'>
            <tr>
              <td width='70' height='40'><div align='center'><span class='style38 style39'>Ticket No </span></div></td>
              <td width='71'><div align='center'><span class='style38 style39'>From</span></div></td>
              <td width='94'><div align='center'><span class='style38 style39'>To</span></div></td>
              <td width='51'><div align='center'><span class='style38 style39'>Seat No </span></div></td>
              <td width='137'><div align='center'><span class='style38 style39'>Mobile No </span></div></td>
              <td width='87'><div align='center'><span class='style38 style39'>Travel Time</span></div></td>
              <td width='129'><p align='center'><span class='style38 style39'>Travel Date</span> <span class='style40'>(mm/dd/yy)</span></p></td>
              <td width='238'><p align='center' class='style39'><span class='style9'>Booking Date </span><span class='style41'>(mm/dd/yy)</span></p>
              </td>
            </tr>

";		  
$sql = "SELECT * FROM ticketno";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());
}

 $name= array();		               

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

	               

$i=0;
    

$name[$i]=$row['tno'];


 $sq = "SELECT * FROM {$name[$i]}";

$retva = mysql_query( $sq, $con );

if(! $retva ) {


}

else
{
while($row = mysql_fetch_array($retva, MYSQL_ASSOC)) {

$ticketno=$row['ticketno'];
$to=$row['t_o'];
$from=$row['frm'];
$date = $row['date'];
 $time = $row['time'];
 $phoneno = $row['phoneno'];
 $seats = $row['seats'];
  $bdate = $row['bdate'];


  if($bdate==$prev_date)
  {
 
//tr
 echo "
      
	   <td><div align='center'><em><span class='style16 style45'>{$ticketno}</span></em></div></td>
      <td><div align='center'><span class='style17 style46'>{$from}</span></div></td>
    <td><div align='center'><span class='style18 style45'>{$to}</span></div></td>
    <td><div align='center'><span class='style28 style45'>{$seats}</span></div></td>
    <td><div align='center'><span class='style45 style21'><em>{$phoneno}</em></span></div></td>
    <td><div align='center'><span class='style29'><span class='style22 style45'>{$time}</span></span></div></td>
    <td><div align='center'><span class='style23 style45'>{$date}</span></div></td>
    <td><div align='center'><span class='style28 style45'>{$bdate}</span></div></td>
  </tr>
";
//
}

}//

}





}


?>
 </table>

<div align="center"> <a href="?date=<?=$next_date;?>" class="btn"> << Next Day </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="?date=<?=$prev_date;?>" class="btn">Previous Day >></a></div>
 
  </div>
  <?




?>	
  
  
</div>
    </div>
<br>
<br>


<?









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