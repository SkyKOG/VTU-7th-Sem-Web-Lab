<!-- Author : SkyKOG -->

<?php
session_start();

if(isset($_SESSION['views']))
	$_SESSION['views']=$_SESSION['views']+1;
else
	$_SESSION['views']=1;

echo "views=".$_SESSION['views'];
echo "		<br/>";
echo "reload this page to increment";

?>
