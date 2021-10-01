<?php
	
	session_start();
	$x=$_POST['name'];
	$y=$_POST['phone'];
	$_SESSION['name']=$x;
	$_SESSION['phone']=$y;

  ?>