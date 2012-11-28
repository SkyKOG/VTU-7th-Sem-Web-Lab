<!-- Author : SkyKOG -->

<?php
	session_start();

	if(isset($_SESSION["views"]))
		$val=$_SESSION["views"]=$_SESSION["views"]+1;
	else
		$val=$_SESSION["views"]=1;

	print "Views : $val";
	print "<br>reload this page to increment";

?>