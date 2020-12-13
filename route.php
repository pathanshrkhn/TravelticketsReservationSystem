<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>route</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
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
		<script src="js/jquery.mobile.customized.min.js"></script>
		<script src="booking/js/booking.js"></script>
        <link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/box2.css">
		<link rel="stylesheet" href="css/rbox1.css">
				<link rel="stylesheet" href="css/bbb.css">
				<link rel="stylesheet" href="css/form1.css">
		<link rel="stylesheet" href="css/boxm.css">
		<script>
	
			
			
$(document).ready(function() {
/* This would select all the divisions */
$("#s1,#s2,#s3,#s4").css("background-color", "white");
});
		</script>
	    <style type="text/css">
<!--
.style11 {
	color: #333333;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style15 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
.style17 {color: #000000; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; }
.style18 {
	color: #770000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style19 {
	color: #006400;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style20 {
	color: #002141;
	font-family: FontAwesome;
}
.style21 {
	color: #000000;
	font-style: italic;
	font-family: "Courier New", Courier, monospace;
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
							
				  
				                          <span class="style15"><strong><a href="cstatus.php" class="btn">Travel Status </a>
				                          <a href="bookingHis.php" class="btn">Booking History</a>
				  
				                           <a href="search.php" class="btn">Search</a>
  	                                      <a href="chkfeedback.php" class="btn">Check FeedBack</a>  
                                          <a href="chpass.php" class="btn">Change Password</a> 
                                          <a href="index.php" class="btn">Logout</a></strong></span> 
						
		<h3>Route  List<br>
		</h3>
	      <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
		 <div class='rcorners5'>   	
	  
	    <table width="759" height="85" border="0" cellpadding="2" cellspacing="2">
        <tr>  
            <th width="173" height="43" scope="col" ><span class="style17">From</span> </th>
            <th width="152" scope="col"><span class="style17">To</span></th>
            <th width="150" scope="col"><span class="style11">Distance</span></th>
            <th width="258" scope="col"><span class="style17">Rent per seat</span></th> 
          </tr>
   



		<?     
		
		//checking password of admin 
		$u=$_POST['username'];
$p=$_POST['password'];
		
		
		
		               
      $name= array();


	$sql = "SELECT * FROM city";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('city: ' . mysql_error());
}


while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {


$i=0;

$name[$i]=$row['name'];


 $sq = "SELECT * FROM {$name[$i]}";

$retva = mysql_query( $sq, $con );


if(! $retva ) {


}

else
{
while($row = mysql_fetch_array($retva, MYSQL_ASSOC)) {

$to=$row['name'];
$dist=$row['distance'];
$rent=$row['rent'];
$bus = $row['bus'];
 
//tr
 echo "
  <tr>
          <td height='36'><div align='center' class='style7 style18' id='s1'  >{$name[$i]}</div></td>
            <td><div align='center' class='style3 style19' id='s2'>{$to}</div></td>
            <td><div align='center' class='style4 style20' id='s3'>{$dist}</div></td>
            <td><div align='center' class='style5 style21' id='s4'>{$rent}</div></td>
			  </tr>
";
//

}//

}



$i++;
}


?>
 </table>
<hr color="#FFFFFF">
	    <A href="delete.php"  > 
	<input name="ad" type="button" class="s" value="Delete" >
</A>

<A href="update.php"><input name="ad" type="button" class="s" value="Update">
</A>

<input name="ad" type="submit" class="s" value="Add">
</div>
<br>
<br>


<?



//add 
if(isset($_POST['ad']))
{
echo "
<div class='form'>
<input name='from' placeHolder='From:' type='text' required>

<input name='to' placeHolder='To:' type='text' required>
<input name='dist' placeHolder='Distance:' type='text' required>
<input name='rent' placeHolder='Rent:' type='text' required><br>
<input name='bus' placeHolder='Bus No:' type='text' required>

</div>
<input name='adds'  type='submit' value='Submit' class='bb' >
";


}

//close add



//adding the cities
//add button
if(isset($_POST['adds']))
{


$from=$_POST['from'];
$to=$_POST['to'];
$dist=$_POST['dist'];
$rent=$_POST['rent'];

$bus=$_POST['bus'];
//cheking

if($from==$to)
{
	echo"<br><font color='red' ><b>Source and Distination are same</b><br>Please enter the different Source and Distination City </font>";
}
else
{
	
	
	
	
	
//from table inserted if not created
$s="insert into city values('{$from}')";
$rs = mysql_query( $s, $con );


$retval = mysql_query( $rs, $con );//



//end from

//To

$sql="select * from {$to}";

$retval = mysql_query( $sql, $con );

if(! $retval ) {
// creating table if not created

$sq="create table {$from}(name varchar(20) Primary key,
distance varchar(20),
rent varchar(20),
bus varchar(20)


 )";
 $retva = mysql_query( $sq, $con );

$s="insert into city values('{$to}')";
$rs = mysql_query( $s, $con );




 
 }
//end




// inserting

$sql="insert into {$from} values('{$to}','{$dist}','{$rent}','{$bus}')";

$retval = mysql_query( $sql, $con );

if(! $retval ) {
// creating table if not created

$sq="create table {$from}(name varchar(20) Primary key,
distance varchar(20),
rent varchar(20),
bus varchar(20)


 )";
$retva = mysql_query( $sq, $con );

if(! $retva ) {
echo"<font color='red'>Route already exists</font>";
}

else
{
	
	
//inserting if table created
$s="insert into {$from} values('{$to}','{$dist}','{$rent}','{$bus}')";
$rs = mysql_query( $s, $con );


if(! $retva ) {
die('Could not create table: ' . mysql_error());
}

$s="insert into city values('{$from}')";
$rs = mysql_query( $s, $con );


if(! $retva ) {
die('Could not create table: ' . mysql_error());
}



$s=$sql="insert into city values('{$to}')";
$rs = mysql_query( $s, $con );
if(! $retva ) {
die('Could not create table: ' . mysql_error());
}

}

}

///close

}


//close

}//close add






?>
</form>
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