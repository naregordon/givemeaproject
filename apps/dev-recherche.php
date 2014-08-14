<?php

require("models/projet.class.php");

function getProjetsSelection($db)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut = 'selection' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

function getProjetSearch($db)
{
	$tabSearch=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut = 'selection' AND projetnom LIKE '%".$_POST['search']."%' ORDER BY projetdate DESC");
    while ($data = mysqli_fetch_object($res,"Projet")) 
        $tabSearch[] = $data;
    return $tabSearch;
}

if(isset($_POST['search']) && isset($_POST['searchBtn'])) {    
	$listeProjetSelection=getProjetSearch($db);
}
else {
	$listeProjetSelection=getProjetsSelection($db);
}

require("views/dev-recherche.phtml");
?>