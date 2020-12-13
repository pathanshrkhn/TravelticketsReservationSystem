<?php
///



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
