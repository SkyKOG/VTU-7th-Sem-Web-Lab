<!-- Author : SkyKOG -->

<html>
<body>
	<center>
		<b>Database Contents Are Shown Below</b><br><br>
		<?php
			$acc=$_GET["nam"];
			$title=$_GET["title"];
			$author=$_GET["author"];
			$ed=$_GET["edition"];
			$pub=$_GET["pub"];
			
			$con=mysql_connect("localhost","dbusr","dbpwd");
			mysql_select_db("web");
			
			$res=mysql_query("insert into book_info values('$acc','$title','$author','$ed','$pub')");
		?>
		<table border=1>
			<tr><td>Acc No</td><td>Title</td> <td>Author</td><td>Edition</td><td>Publication</td></tr>
			<?php
				$res1=mysql_query("select * from book_info");
				
				while($a=mysql_fetch_row($res1))
				{
			        print"<tr><td>$a[0]</td>";
			        print"<td>$a[1]</td>";
			        print "<td>$a[2]</td>";
			        print "<td>$a[3]</td>";
					print "<td>$a[4]</td></tr>";
				}
			?>
		</table>
			<a href="Lab14.html">Click Here To Go Home</a>
		</center>
	</body>
</html>

