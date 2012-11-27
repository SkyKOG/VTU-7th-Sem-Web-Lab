<!-- Author : SkyKOG -->

<b>DATABASE CONTENTS ARE SHOWN BELOW</b><br><br>
<?php
	$title=$_GET["nam"];
	
	mysql_connect("localhost","dbusr","dbpwd");
	mysql_select_db("web");
	
	$res=mysql_query("select * from book_info where title='$title'");

	if(mysql_num_rows($res)>0)
	{
		print "<table border=1>";
		print "<tr><td>ACCT NO</td><td>TITLE</td><td>AUTHOR</td><td>EDITION</td><td>PUB</td></tr>";
		
		while($a=mysql_fetch_row($res))
		{
			print "<tr><td>$a[0]</td><td>$a[1]</td><td>$a[2]</td><td>$a[3]</td><td>$a[4]</td></tr>";
		}
	}
	else
	{
		print "no rows found";
	}
?>

