#!/usr/bin/perl
#Author : SkyKOG

print "Content-type:text/html\n\n";
print "<html><body><table border='1'><tr><td>Variable</td><td>Value</td></tr>";
foreach $env (sort keys %ENV)
{
	print "<tr><td>";
	print $env;
	print "</td>";
	print "<td>";
	print $ENV{$env};
	print "</td></tr>";
}
print "</table></body></html>";
