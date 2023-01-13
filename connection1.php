<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "meals";
// connect to the different database
// check connection for a meals database (currenlty not in use)
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}