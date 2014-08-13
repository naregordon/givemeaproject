<?php
require("models/projet.class.php");

if (isset($_POST['id'])){
	$id=$_POST['id'];
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE id='".$id."'");
	$data = mysqli_fetch_object($res, 'Projet');
}
require("views/pp-projets.phtml");