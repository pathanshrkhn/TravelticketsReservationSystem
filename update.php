<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>update</title>
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
	<link rel="stylesheet" href="css/bbb.css">
		<link rel="stylesheet" href="css/box.css">
			<link rel="stylesheet" href="css/t.css">
			<link rel="stylesheet" href="css/form1.css">
			<link rel="stylesheet" href="css/rbox1.css">
		
	    <style type="text/css">
	    .style4 {font-family: "Times New Roman", Times, serif}
.style6 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
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
				
				 
				  <form id="" action="<? echo $_SERVER['PHP_SELF']; ?> " method="post">
					
				
							
							  <?php
							ob_start();
							echo "				  <h3>	Choose Route Update</h3>
";
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
						 <button class='button' style='vertical-align:middle' type='submit'><span>GO</span></button></a>
							 
						";
							$from=$_POST['from'];
						 $to=$_POST['to'];
							
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
							$from=$_POST['from'];
						 $to=$_POST['to'];
if($rent!=null)
	{
	
	echo"
	<h5>&nbsp;</h5>	
	<div class='rcorners6'>
	 <table width='872' height='140' border='2' bordercolor='#333333' bgcolor='#CCCCCC' align='center'>
      <tr>
        <th width='130'  scope=col'><div align='center'><span class='style6'><font color='#000000'> From</span></div></th>
        <th width='132' scope='col'><div align='center'><span class='style6'><font color='#000000'> To</span></div></th>
        <th width='178' scope='col'><div align='center'><span class='style6'><font color='#000000'> Distance</span></div></th>
        <th width='181' scope='col'><div align='right' class='style4'><font color='#000000'> 
            <div align='center'>Rent per seat </div>
        </div></th>
        <th width='215' scope='col'><div align='center'><span class='style6'><font color='#000000'> Bus No </span></div></th>
      </tr>
      <tr>
	 
        <td height='94'><div align='center' >{$from}</div></td>
        <td><div align='center' class='style4'>{$to}</div></td>
		
		
		
		
        <td><div align='center' class='style4'><input name='d' type='text' value='{$dist}' ></div></td>
        <td><div align='center' class='style4'><input name='r' type='text' value='{$rent}' ></div></td>
        <td><div align='center' class='style4'><input name='b' type='text' value='{$bus}' ></div></td>
      </tr>
     </table>
		
	</div>
	
 
	       
<input type='submit' value='Update' name='u' class='s1' ></table>";
}

					
else
{
	
					
echo"<br><font color='red' ><b>Choose the correct route </b><br>This route not exists </font>";
		
}
		
							
		}
							
			
						
			}
			$d=$_POST['d'];
				$r=$_POST['r'];
					$b=$_POST['b'];
			
			$f=$GLOBALS['from']	;
						 $t=$GLOBALS['to'];
					
										if(isset($_POST['u']))
							
							{
							ob_end_clean();
						
									
		
							$sql = "update {$f} set distance='{$d}' , rent='{$r}' , bus='{$b}' where name='{$t}'";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
else
{

echo" <h3>	Updated Successfuly</h3>";

}
	
	
	}			
			
						mysql_close($con);	


							?>
    
   
   
   
   
	</form>							
							   
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