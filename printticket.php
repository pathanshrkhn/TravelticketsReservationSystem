<?php
include("mysql.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>print tickets</title>
	
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
		<link rel="stylesheet" href="css/boxp.css">
		<link rel="stylesheet" href="css/bbb.css">
			<link rel="stylesheet" href="css/t.css">
		<script>
					
		function printInfo(ele) {
    var openWindow = window.open("", "title", "attributes");
    openWindow.document.write(ele.previousSibling.innerHTML);
    openWindow.document.close();
    openWindow.focus();
    openWindow.print();
    openWindow.close();
}
		</script>
	    <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
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
						<a href="index.html">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			
			
					<div class="container_12">
					 <center><h3><font color="#f4511e">Print Ticket Now!</font></h3>



			 <br>
            
	
    <div >  
  <div id="....">
      <div class="floating-box"   style="" >
        <table width="503" height="118" >
          <tr>
            <td width="288" height="112"><p><img src="images/Untitled2.jpg" alt="ETIHAD Travels" width="283" height="71">
              
             
              <p></p></td>
            <td width="198"><table width="200"  align="left">
                <tr>
                  <th scope="col"><div align="left"><font color="#3300FF"> H.O :Allama Complex,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    Meer Nager,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                    Aurangabad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></th>
                </tr>
                <tr>
                  <th scope="col"> <div align="left"><font color="#3300FF"> Phone NO:2233111 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></th>
                </tr>
                <tr>
                  <td height="22"><div align="left"><font color="#3300FF">Email: sk@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
                </tr>
              </table>
            </tr>
        </table>
        <hr>
	      </td>
          </tr>
          </table>
		  
		  
		  
          <?                    
      
	  
	 $l=$_POST['ticketno'];
	  
 $name=$_POST['name'];
						 $email=$_POST['email'];
						
						 $time=$_POST['time'];
						 $date=$_POST['date'];
						 $phoneno=$_POST['phoneno'];
						 $totalseats=$_POST['seats'];
						 $comfort=$_POST['comfort'];
						 
			$ctn="sher" . $l;
						 
			//updating record			 
						 
						 
	$sql = "update {$ctn} set name='{$name}' , email='{$email}' , phoneno='{$phoneno}' where comfort='{$comfort}'";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('Could not get data: ' . mysql_error());
}					 
						 
						 
						 
						 

//concat


	$sql = "SELECT * FROM {$ctn}";

$retval = mysql_query( $sql, $con );


if(! $retval ) {
die('Could not get data: ' . mysql_error());
}


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

echo "
<table width='400' height='190'  >
          
           
              <tr>
                <td><span class='style1'>Ticket No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$tn}</td>
                <td><span class='style1'>Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$time} </td>
              </tr>
			  <tr>
                <td><span class='style1'>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$name}</td>
                <td><span class='style1'>Total Rent &nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$totalr}</td>
              </tr>
			  
			   <tr>
                <td><span class='style1'>Phone No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$phone}</td>
                <td><span class='style1'>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></td>
                <td>{$email} </td>
              </tr>
			  
			   <tr>
                <td><span class='style1'>Bus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$bus}</td>
                <td><span class='style1'>Comfort&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></td>
                <td>{$comfort} </td>
              </tr>
			     <tr>
                <td><span class='style1'>Seats No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</span></td>
                <td>{$seat}</td>
                <td><span class='style1'>Total Seats&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$totalseats} </td>
              </tr>
			               <span class='style1'>
		                   </tr>
 			               </span>
			     
			     <tr>
                <td><span class='style1'>Booking Date :</span></td>
                <td>".date("d/m/y")."</td>
                <td><span class='style1'>Journey Date:</span></td>
                <td>{$date} </td>
              </tr>
			  
			  
			              <span class='style1'>
		                  </tr>
			              </span>
			    
			     <tr>
                <td><span class='style1'>From &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$from}</td>
                <td><span class='style1'>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</span></td>
                <td>{$to} </td>
              </tr>
</table>
<br>";


mysql_close($con);
      
		
		
		
	?>
      </div>
  </div>
    </div><a href="messeg.html" onClick="printInfo(this)"> <button class="s2" style="vertical-align:middle" type="submit"><span> Print</span></button></a>
	
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