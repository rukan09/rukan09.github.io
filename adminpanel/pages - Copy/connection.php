<?php
$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "lict_us_42";

$con = mysqli_connect($host, $db_user, $db_pass, $db_name);
//$con = new Mysqli($host, $db_user, $db_pass, $db_name);

if(!$con)
{
	//echo "Connection Failed. ". mysqli_error($con); 
}
else{
	//echo "connected";
}

?>