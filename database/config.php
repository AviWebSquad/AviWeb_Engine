<?php
//local and remote server connection
if($_SERVER['REMOTE_ADDR'] == '' || $_SERVER['REMOTE_ADDR'] == '')
{	
	@define("hostname","");
	@define("username","");
	@define("password","");
	@define("database","");
}
else
{
	@define("hostname","");
	@define("username","");
	@define("password","");
	@define("database","");
}
// Create connection
$con = new mysqli(hostname,username,password,database);
$db = mysqli_select_db($con,database);
// Check connection
if ($con->connect_error) 
{
	die("Connection failed: " . $con->connect_error);
}

?>