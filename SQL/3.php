<?php

session_start();
if (isset($_SESSION['name'])==false) {
	# code...
	header('Location: 1.php');
}
echo $_SESSION['name'];
echo $_SESSION['phone'];







?>