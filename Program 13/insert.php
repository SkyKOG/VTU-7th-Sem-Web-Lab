<!-- Author : SkyKOG -->

<?php
    $nam=$_GET["nam"];
    $add1=$_GET["add1"];
    $add2=$_GET["add2"];
    $email=$_GET["email"];
    
    $con=mysql_connect("localhost","dumb","dumber");
    mysql_select_db("hehe");
    
    $res=mysql_query("insert into name_info values('$nam','$add1','$add2','$email')");

    print "<table border=1>";
    print "<tr><td>Name</td><td>Address1</td><td>Address 2</td><td>Email</td></tr>";
    
    $res1=mysql_query("select * from name_info");
    while($a=mysql_fetch_row($res1))
    {
        print"<tr><td>$a[0]</td>";
        print"<td>$a[1]</td>";
    	print "<td>$a[2]</td>";
	    print "<td>$a[3]</td></tr>";
    }
    print "</table>";
?>