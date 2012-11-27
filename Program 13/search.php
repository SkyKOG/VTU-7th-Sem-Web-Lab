<!-- Author : SkyKOG -->

<b>Databases Contents Shown Below</b><br><br>
<?php
	$nam=$_GET["nam"];
	
	mysql_connect("localhost","dbusr","dbpwd");
	mysql_select_db("web");
	
	$res=mysql_query("select * from name_info where name='$nam'");
	
	if(mysql_num_rows($res) >0)
	{
		print "<table border=1>";
		print "<tr><td>Name</td><td>Address 1</td><td>Address 2</td><td>E-mail</td></tr>";

		while($a=mysql_fetch_row($res))
		{
			print "<tr><td>$a[0]</td>";
			print "<td>$a[1]</td>";
			print "<td>$a[2]</td>";
			print "<td>$a[3]</td></tr>";
		}
	}
	else
	{
		print "no rows found";
	}
?>
