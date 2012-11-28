#!/usr/bin/perl
#Author : SkyKOG

print "Content-type:text/html\n\n";
use CGI;

$a = new CGI;
$name = $a->param("name");
$rand_num=rand(4);
@greet=('hello','hi','Salut','Bonjeur');

print "$greet[$rand_num] $name";
