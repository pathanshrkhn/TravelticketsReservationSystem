<?php

$conn = mysql_connect();
 


if(! $conn ) {
die('Could not connect: ' . mysql_error());
}


echo 'Connected successfully';





$sql = 'CREATE Database test_db';
$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create database: ' . mysql_error());
}


echo "\nDatabase test_db created successfully\n";


mysql_select_db('test_db');




$query_file = 'userinfo.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nTable userinfo created successfully\n";


//
//pune
$query_file = 'pune.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nTable pune created successfully\n";



//mumbai
$query_file = 'mumbai.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nTable mumbai created successfully\n";


//latur
$query_file = 'latur.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nTable latur created successfully\n";


//latur
//insert
$query_file = 'sql_queryl1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset latur created successfully\n";


//latur
//insert2
$query_file = 'sql_queryl2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset latur created successfully\n";


//pune
//insert
$query_file = 'sql_queryp1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset pune created successfully\n";


//pune
//insert
$query_file = 'sql_queryp2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset pune created successfully\n";


//mumbai
//insert
$query_file = 'sql_querym1.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset mumbai created successfully\n";

//mumbai
//insert
$query_file = 'sql_querym2.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset mumbai created successfully\n";

//city Table

$query_file = 'city.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nTable city created successfully\n";

//insert into city
$sql="insert into city values('Latur')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset mumbai created successfully\n";

//insert into city 
$sql="insert into city values('Pune')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset mumbai created successfully\n";
///insert

$sql="insert into city values('Mumbai')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\ninset mumbai created successfully\n";

//login 

$sql="create table admin(password varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nadmin table created ";

//insert
$sql="insert into admin values('sher')";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nadmin inserted ";

//ticet no
$sql="create table ticketno(tno varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nticketno table created ";

$sql="create table feedback(email varchar(30),name varchar(30),msg varchar(1000),date varchar(30))";

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "\nfeedback table created ";





mysql_close($conn);
?>
