#!/usr/bin/perl
#Author : SkyKOG/Nikhil
#Thanx : Sidharth

print "Content-type:text/html\n\n";
use CGI;
use DBI;

$cgi = new CGI;

$name = $cgi->param("name");
$age = $cgi->param("age");

$con = DBI->connect("DBI:mysql:web","root","skykog");

$prep = $con->prepare("insert into age_info values('$name','$age');");
$prep->execute();

$res=$con->prepare("select * from age_info");
$res->execute();

print "<html><body>";
print "<center>The Contents are as follows : <br><br><table border=1>";
print "<tr><td>Name</td><td>Age</td></tr>";
while(@a=$res->fetchrow_array())
{
        print "<tr><td>$a[0]</td><td>$a[1]</td></tr>";
}
print "</table></center></body></html>";

