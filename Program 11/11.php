<!-- Author : SkyKOG -->

<?php
$expiry = 24*60*60+time();

setcookie("visited",date("G:i:s a - m/d/y"),"$expiry");

if (isset($_COOKIE["visited"])){
	$value=$_COOKIE["visited"]; 
	print "Last Visited on: $value"; 
}
else{
	print "Cookie Not Found !!! ... pls set ...";
}
?>
