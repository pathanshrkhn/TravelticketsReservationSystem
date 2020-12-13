<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>search the ticket</title>
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
		<link rel="stylesheet" href="css/cbutton.css">
		<link rel="stylesheet" href="css/box.css">
			<link rel="stylesheet" href="css/t.css">
				<link rel="stylesheet" href="css/nbutton.css">
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
					 <center><h3><font color="#9F9F9F">Search The Ticket<br><br></font></h3>
					
					
						<form id="bookingForm" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
						
								<input  name="ticket" placeHolder="Ticket No:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>&nbsp;&nbsp;&nbsp;


 <button class="button" style="vertical-align:middle" type="submit"><span>Search</span></button></a>
</form>

<?
//concat



$l=$_POST['ticket'];

 $ctn="sher" . $l;


//
$query_file = 'file/cancellast.txt';


$fp = fopen($query_file, 'w');

fwrite($fp,$ctn);
fclose($fp);

//


///
if($l!=null){



	$sql = "SELECT * FROM {$ctn}";

$retval = mysql_query( $sql, $con );






if(! $retval ) {

echo"<br><br>$l<b>&nbsp;&nbsp;<font color='red'> is Invalid Ticket Number !!</b>
";
}
else
{

echo"<br><br><br><div class='floating-box'   >
        <table width='502' height='90' >
          <tr>
            <td width='288' height='90'><p><img src='images/Untitled2.jpg' alt='ETIHAD Travels' width='283' height='71'>
              
             
              <p></p></td>
            <td width='198'><table width='200'  align='left'>
                <tr>
                  <th scope='col'><div align='right'><font color='#3300FF'>&nbsp;&nbsp;&nbsp;&nbsp; H.O :Allama Complex,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    Meer Nager,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    Aurangabad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></th>
                </tr>
                <tr>
                  <th scope='col'> <div align='right'><font color='#3300FF'> Phone NO:2233111 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></th>
                </tr>
                <tr>
                  <td height='22'><div align='right'><font color='#3300FF'>Email: sk@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
                </tr>
              </table>
            </tr>
        </table>
        <hr>
	      </td>
          </tr>
          </table>";




while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
$tn=$row['ticketno'];

$name=$row['name'];
$email=$row['email'];
$phone=$row['phoneno'];

$comfort=$row['comfort'];

 $seat=$row['seats'];

 $totalseats=$row['totalseats'];
$totalr=$row['totalrent'];
$time=$row['time'];

$date= $row['date'];
$bus= $row['bus'];
$to=$row['t_o'];
 $from=$row['frm'];


}

 




echo "<table width='400' height='190'  >
          
           
              <tr>
                <td><b>Ticket No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$tn}</td>
                <td><b>Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$time} </td>
              </tr>
			  <tr>
                <td><b>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$name}</td>
                <td><b>Total Rent &nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$totalr}</td>
              </tr>
			  
			   <tr>
                <td><b>Phone No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$phone}</td>
                <td><b>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b></td>
                <td>{$email} </td>
              </tr>
			  
			   <tr>
                <td><b>Bus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$bus}</td>
                <td><b>Comfort&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b></td>
                <td>{$comfort} </td>
              </tr>
			     <tr>
                <td><b>Seats No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b></td>
                <td>{$seat}</td>
                <td><b>Total Seats&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$totalseats} </td>
              </tr>
			     </tr>
			     <tr>
                <td><b>Booking Date :</b></td>
                <td>".date("d/m/y")."</td>
                <td><b>Journey Date:</b></td>
                <td>{$date} </td>
              </tr>
			  
			  
			    </tr>
			     <tr>
                <td><b>From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$from}</td>
                <td><b>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></td>
                <td>{$to} </td>
              </tr>
</table>




";
//delet table





   


}

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