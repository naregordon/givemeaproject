<?php

if(isset($_POST['inscriptionPp'])) {
	require("apps/pp-inscription.php");
}
if(isset($_POST['inscriptionDev'])) {
	require("apps/dev-inscription.php");
}

require("views/home.phtml");