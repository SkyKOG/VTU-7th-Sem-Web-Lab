<!-- Author : SkyKOG -->

<?php
	$acc=$_GET["nam"];
	$title=$_GET["title"];
	$author=$_GET["author"];
	$ed=$_GET["edition"];
	$pub=$_GET["pub"];
	
	$con=mysql_connect("localhost","dbusr","dbpwd");
	mysql_select_db("web");
	
	$res=mysql_query("insert into book_info values('$acc','$title','$author','$ed','$pub')");

    print "<table border=1>";
    print "<tr><td>Acc No</td><td>Title</td><td>Author</td><td>Edition</td><td>Publication</td></tr>";
    
    $res1=mysql_query("select * from name_info");
    while($a=mysql_fetch_row($res1))
    {
        print"<tr><td>$a[0]</td>";
        print"<td>$a[1]</td>";
        print "<td>$a[2]</td>";
        print "<td>$a[3]</td>";
		print "<td>$a[4]</td></tr>";
    }
    print "</table>";
?>