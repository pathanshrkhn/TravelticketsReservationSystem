<?php
///


$conn = mysql_connect();
 


if(! $conn ) {
die('Could not connect: ' . mysql_error());
}



$sql = 'CREATE Database test_db';
$retval = mysql_query( $sql, $conn );


if(! $retval ) {


}
else
{




mysql_select_db('test_db');





//pune
$query_file = 'booking/pune.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}






//mumbai
$query_file = 'booking/mumbai.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}





//latur
$query_file = 'booking/latur.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//latur
//insert
$query_file = 'booking/sql_queryl1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}





//latur
//insert2
$query_file = 'booking/sql_queryl2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}





//pune
//insert
$query_file = 'booking/sql_queryp1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//pune
//insert
$query_file = 'booking/sql_queryp2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//mumbai
//insert
$query_file = 'booking/sql_querym1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//mumbai
//insert
$query_file = 'booking/sql_querym2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//city Table

$query_file = 'booking/city.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//insert into city
$sql="insert into city values('Latur')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//insert into city 
$sql="insert into city values('Pune')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}



///insert

$sql="insert into city values('Mumbai')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//login 

$sql="create table admin(password varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




//insert
$sql="insert into admin values('sher')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}



//ticet no
$sql="create table ticketno(tno varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}




$sql="create table feedback(email varchar(30),name varchar(30),msg varchar(1000),date varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}








mysql_close($conn);
}



///

$con = mysql_connect();
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
  {
  echo "";
  }

//Select database
mysql_select_db("test_db", $con);

?>
