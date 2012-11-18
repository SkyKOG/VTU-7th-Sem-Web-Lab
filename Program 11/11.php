<!-- Author : SkyKOG -->

<?php

$expiry = 24*60*60+time();

if (isset($_COOKIE["visited"])){
	$value=$_COOKIE["visited"]; 
	print "Last Visited on: $value"; 
	setcookie("visited",date("G:i:s a - m/d/y"),"$expiry");
}

else{
	setcookie("visited",date("G:i:s a - m/d/y"),"$expiry");
	print "NEW COOKIE SET !";
}

?>
