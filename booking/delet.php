<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = 'rootpassword';
$conn = mysql_connect();


if(! $conn ) {
die('Could not connect: ' . mysql_error());
}


$sql = 'DROP DATABASE test_db';
$retval = mysql_query( $sql, $conn );


if(! $retval ) {
die('Could not delete database db_test: ' . mysql_error());
}


echo "Database deleted successfully\n";
mysql_close($conn);
?>
