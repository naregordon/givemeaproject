<?php

session_start();

$db = mysqli_connect("localhost","root","","givemeaproject");

if(isset($_POST['disconnect'])) {
	$_SESSION = array();
	session_destroy();
}

if (isset($_GET['page']))
{
	$page = $_GET['page'];
}
else
	$page="home";

require("apps/skel.php");
?>