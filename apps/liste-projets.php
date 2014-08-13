<?php
$res = mysqli_query($db, "SELECT * FROM project ORDER BY id DESC");
$listeProjets = mysqli_fetch_assoc($db, $res);


require('views/liste-projets.phtml')
?>