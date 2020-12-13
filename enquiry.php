<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Enguiry</title>
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
		<link rel="stylesheet" href="css/box.css">
			<link rel="stylesheet" href="css/rbox1.css">
			<link rel="stylesheet" href="css/t.css">
		
	    <style type="text/css">
	    .style4 {font-family: "Times New Roman", Times, serif}
.style9 {color: #000000}
.style12 {
	font-weight: bold;
	color: #000000;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 14px;
}
.style14 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-style: italic; color: #000000; font-size: 14px; }
.style16 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-style: italic; color: #000000; }
.style17 {font-weight: bold; color: #000000; font-family: Georgia, "Times New Roman", Times, serif; }
.style18 {font-family: Georgia, "Times New Roman", Times, serif; }
.style19 {font-family: "Times New Roman", Times, serif; color: #000000; }
.style20 {font-family: "Times New Roman", Times, serif; font-style: italic; }
.style21 {
	font-size: 10px;
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
		<div class="content">
			
			
				<div class="container_12">
				
				
			
			
				  
	
				      <center>            
				
				  <h3>	Choose Route For Enquiry</h3>
				 
				  <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
					
		
						
							
							  <?php
							
							 $from=$_POST['from'];
						 $to=$_POST['to'];
					
							
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
						 <button class='button' style='vertical-align:middle' type='submit'><span>Enquiry</span></button></a>
						 	  </form>
						";
							
							
							//
					if($to!=null)
							{		
							
							
		if($from == $to)
	{
	echo"<br><font color='red' ><b>Source and Distination are same</b><br>Please choose the Source and Distination City </font>";
	
	}
	else
	{					
							//retriving rent

$query_file = 'cityenq.txt';


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

$dist=$row['distance'];
$rent=$row['rent'];
$bus = $row['bus'];

}

?>
    <?	
	echo"<h5>Information </h5>	
		<div class='rcorners6'>
	<table width='600' height='140' border='2' bordercolor='#333333' bgcolor='#CCCCCC' align='center'>
      <tr>
        <th width='140'  scope=col'><span class='style14'><font color='#000000'></span><span class='style12'> From</span></th>
        <th width='112' scope='col'><span class='style16'><font color='#000000'></span><span class='style17'> To</span></th>
        <th width='80' scope='col'><span class='style17'>Distance</span></th>
        <th width='141' scope='col'><div align='right' class='style18'><font color='#000000'><span class='style9'> Rent per seat </span></div>
          <span class='style21'>(in RS)</span></th>
        <th width='200' scope='col'><span class='style16'><font color='#000000'> </span><span class='style17'>Time Of Travels </span></th>
      </tr>
      <tr>
        <td height='94'><div align='center' class='style9' >{$from}</div></td>
        <td><div align='center' class='style4'>{$to}</div></td>
        <td><div align='center' class='style19'>{$dist}</div></td>
        <td><div align='center' class='style20'>{$rent}</div></td>
        <td><div align='center' class='style19'>8am,
                                    12pm,
                                    5pm,
        9pm</div></td>
      </tr>
     </table>
	
	       

	
	";					
							
				}			
							
					}	
						mysql_close($con);	


							?>
    
   
							
							   
  </div>
</div>             
		  
			                  </div>
							  </div>
                    <!--==============================footer=================================-->
					              </div>
					            
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
		
	</body>
</html>