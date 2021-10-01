<?php


$connect = mysql_connect("localhost","root","");
if ($connect==false) {
	# code...
	die("error");
}

$r=mysql_select_db("fashiononline");
if ($r==false) {
	# code...
	die("error");
}
?>