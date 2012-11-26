#!/usr/bin/perl

print "Content-type:text/html\n\n";
use CGI;
$a = new CGI;
$name = $a->param("name");
$num=4;
$rand_num=rand($num);
@greet=('hello','hi','Salut','Bonjeur');
print "$greet[$rand_num]";
print " $name";
