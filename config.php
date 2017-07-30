<?php
  session_start(); // initialize the session.
 
  $dbhost = "localhost"; // this will ususally be 'localhost', but can sometimes differ
  $dbname = "database"; // the name of the database
  $dbuser = "username"; // the username that you created
  $dbpass = "password"; // the password that you created
 
  mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
  mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>
