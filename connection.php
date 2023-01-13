<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_datab";
// connect to the database
// check connection
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}


