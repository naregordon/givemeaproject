<?php

require("models/projet.class.php");

$username=$_SESSION['username'];


function getProjets($db,$query)
{	
	$tab=array();
	$res = mysqli_query($db, $query);
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetEncours = getProjets($db,"SELECT * FROM project WHERE statut='en cours' AND selection='".$username."' ORDER BY projetdate DESC");

$listeProjetSelection = getProjets($db,"SELECT * FROM project LEFT JOIN candidats ON project.id = candidats.id_projet WHERE project.statut='selection' AND candidats.username_candidat='".$username."' ORDER BY projetdate DESC");

$listeProjetTermine = getProjets($db,"SELECT * FROM project WHERE statut='termine' AND selection='".$username."' ORDER BY projetdate DESC");


require("views/dev-profil.phtml");
?>