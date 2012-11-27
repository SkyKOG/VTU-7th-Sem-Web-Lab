<!-- Author : SkyKOG -->

<html>
<body>
	<center>
		<b>Database Contents Are Shown Below</b><br><br>
		<?php
			$nam=$_GET["nam"];
			$add1=$_GET["add1"];
			$add2=$_GET["add2"];
			$email=$_GET["email"];
			
			$con=mysql_connect("localhost","dbusr","dbpwd");
			mysql_select_db("web");
			
			$res=mysql_query("insert into name_info values('$nam','$add1','$add2','$email')");
		?>
		<table border=1>
			<tr><td>Name</td><td>Address 1</td><td>Address 2</td><td>E-mail</td></tr>
			<?php
				$res1=mysql_query("select * from name_info");

				while($a=mysql_fetch_row($res1))
				{
				    print"<tr><td>$a[0]</td>";
				    print"<td>$a[1]</td>";
					print "<td>$a[2]</td>";
					print "<td>$a[3]</td></tr>";
				}
			?>
		</table>
			<a href="Lab13.html">Click Here To Go Home</a>
		</center>
	</body>
</html>
