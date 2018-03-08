<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];

switch($action){
	case 'MAJmodifierforfait':{
		$lesFrais = $_REQUEST['MAJlesFrais'];
		
	  	 	$pdo->updateFrais($Etape,$Kilmetre,$Nuit,$Resto);
	}
}

$lesMontantFrais= $pdo->getMontantFrais();
include("vues/v_modifierFrais.php");
?>