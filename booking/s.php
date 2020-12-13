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


echo "Database test_db created successfully\n";

mysql_select_db('test_db');




$query_file = 'userinfo.txt';


$fp = fopen($query_file, 'r');
$sql = fread($fp, filesize($query_file));
fclose($fp);

$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not create table: ' . mysql_error());
}


echo "Table userinfo created successfully\n";






mysql_close($conn);
?>
