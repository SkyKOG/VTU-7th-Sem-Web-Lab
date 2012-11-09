#!/usr/bin/perl

print "Content-type:text/html\n\n";
($s,$m,$h) = localtime(time);
print "<META HTTP-EQUIV=refresh content=0 ";
print "URL=http://localhost/cgi-bin/9.pl>";

print "<center>Current time is:<br /> $h:$m:$s </center>";
