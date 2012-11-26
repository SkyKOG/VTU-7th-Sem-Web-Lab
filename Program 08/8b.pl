#!/usr/bin/perl
#Author : SkyKOG

print "Content-type:text/html\n\n";

open(IN,'<visitor.txt');
$cnt = <IN>;
close(IN);
$cnt++;
open(OUT,'>visitor.txt');
print OUT $cnt;
close(OUT);
print "You are visitor number : $cnt";