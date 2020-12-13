<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Info</title>
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
			<link rel="stylesheet" href="css/rbox.css">
		<script>
		
	function validate()
{

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
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	    <style type="text/css">
<!--
.style3 {color: #000000; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; }
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
			

					 <center> <h3><font color="#f4511e">Book Ticket Now!</font></h3>
                      <h3><font ><b>Customer Information</b></font></h3>
                     
                      <p>&nbsp;</p>
					  <form action="printticket.php" name="myform" method="post" onSubmit="return validate()">
					  
					   
					  
					 
					   
                      <?php
                         //ticket gen
						 
						 	 $file = fopen("count.txt", "r" );




$filetext = fread( $file, 20 );
$t=$filetext;
fclose( $file );
$file = fopen("count.txt", "w" );

$t=$t+1;
fwrite($file,$t);
fclose( $file );

///
   $ct=$t;
   
                     
					 ///accessing
					   
                         
                         $name=$_POST['name'];
						 $email=$_POST['email'];
						 $from=$_POST['from'];
						 $to=$_POST['to'];
						 $time=$_POST['time'];
						 $date=$_POST['date'];
						 $phoneno=$_POST['phoneno'];
						 $totalseats=$_POST['seats'];
						 $comfort=$_POST['comfort'];
                         echo"<br></center><center>";
						 
					echo"
			<div class='rcorners2'>
                 <table width='635' height='208' border='0' cellpadding='2' cellspacing='2'>
                        <tr>
                          <td width='111'><span class='style3'>Ticket No &nbsp;&nbsp:</span></td>
                          <td width='181'><input name='ticketno' type='text' value='{$t}' readonly='true'></td>
                          <td width='133'><span class='style3'>Date &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp:</span></td>
                          <td width='184'><input name='date' type='text' value='{$date}' readonly='true'></td>
                        </tr>
                        <tr>
                          <td><span class='style3'>Name&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp:</span></td>
                          <td><input name='name' type='text' value='{$name}' required></td>
                          <td><span class='style3'>Comfort&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp:</span></td>
                          <td><input name='comfort' type='text' value='{$comfort}' readonly='true'></td>
                        </tr>
                        <tr>
                          <td><span class='style3'>Email&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp:</span></td>
                          <td><input name='email' type='text' value='{$email}' required></td>
                          <td><span class='style3'>Total Seats&nbsp;&nbsp : </span></td>
                          <td><input name='totalseats2' type='text' value='{$totalseats}' readonly='true'></td>
                        </tr>
                        <tr>
                          <td><span class='style3'>Phone No&nbsp;&nbsp :</span></td>
                          <td><input name='phoneno' type='text' value='{$phoneno}' required></td>
                          <td><span class='style3'>Ren Per Seat: </span></td>
                         
						  
					
                        ";
						
					
						 //seat no
					
					      echo "" ; 
						  
						
						  
						  
						  
//seatsno file name


//	
				  
//seats no gernerator						  
for($i=1;$i<=$totalseats;$i++)
{
//
if((file_exists("seats/{$from}/{$to}/{$time}/counts.txt"))!=1)
{
if((is_dir("seats/{$from}"))!=1)
{
mkdir("seats/{$from}");
}

if((is_dir("seats/{$from}/{$to}"))!=1)
{
mkdir("seats/{$from}/{$to}");
}

if((is_dir("seats/{$from}/{$to}/{$time}"))!=1)
{
mkdir("seats/{$from}/{$to}/{$time}");
}


$file = fopen("seats/{$from}/{$to}/{$time}/counts.txt", "w" );
fwrite($file,"0");
fclose($file);
}
					  
$file = fopen("seats/{$from}/{$to}/{$time}/counts.txt", "r" );
$l=fread($file,10);
$t= $l;
fclose($file);

$file = fopen("seats/{$from}/{$to}/{$time}/counts.txt", "w" );

if($t==45)
{
$t=0;
}



$t=$t+1;
$sav="S". $t .",";

                      
fwrite($file,$t);
fclose( $file );



} 
/////
echo "<br>";


						 
//retriving rent

$query_file = 'city.txt';


$fp = fopen($query_file, 'r');
$l = fread($fp, filesize($query_file));
fclose($fp);


$st=str_replace("z",$from,$l);

$sp=str_replace("x",$to,$st);


$sql=$sp;
$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

$rr=$row['rent'];
$bus = $row['bus'];

$r=$row['rent']*$totalseats;
}


                          echo "  
						  <td><input name='rentperseat' type='text' value='{$rr}' readonly='true'></td>
                        </tr>
                        <tr>
                          <td><span class='style3'>Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp :</span></td>
                          <td><input name='time' type='text' value='{$time}' readonly='true'></td>
                          <td><span class='style3'>Seat No&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;: </span></td>
                         
						    <td><input name='seats' type='text' value='{$sav}' readonly='true'></td>
                        </tr>
                        <tr>
                          <td><span class='style3'>Total Rent : </span></td>
                          <td><input name='totalseats' type='text' value='{$r}' readonly='true'></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
    </table>
			</div>
						";
//////
echo"</pre>" ;


//creat customer T
$query_file = 'custome.txt';


$fp = fopen($query_file, 'r');
$l = fread($fp, filesize($query_file));

fclose($fp);
$ticket= $ct;
$ctn="sher" . $ct;
//inserting into ticket no
$sql="insert into ticketno values('{$ctn}')";

$retval = mysql_query( $sql, $con);


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}








//

$st=str_replace("z",$ctn,$l);


$sql=$st;
$retval = mysql_query( $sql, $con );

if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


///


//last ticket save
$query_file = 'lastticket.txt';


$fp = fopen($query_file, 'w');
fwrite($fp,$ct);


fclose($fp);

//



//reading seatnames file





//insert into custoumer


$bdate=date("m/d/y");

$s="insert into {$ctn} values('{$ticket}','{$name}','{$email}','{$phoneno}','{$comfort}','{$sav}','{$totalseats}','{$r}','{$time}','{$date}','{$bus}','{$from}','{$to}','{$bdate}')";


$retval = mysql_query( $s, $con );


if(! $retval ) {
die('Could not customer table: ' . mysql_error());
}



mysql_close($con);


		 
						 
                         ?>
                    
					
			
					  <button class="button" style="vertical-align:middle" type="submit" ><span> Submit</span></button>
                     
				</form>
					 </center>
						                       
                        
                        </div></div>
                        
                        
                        </center>
					
                    
                    
                    
                    
		
	
			
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
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>