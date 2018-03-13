<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];

switch($action){
	/*case 'AFFICHEMedicaments':{
		$lesMedicaments = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/
	case 'valideConnexion':{

	}
}

$lesVisiteurs= $pdo->getVisiteur();
$lesFamillesMedicaments = $pdo->getVisite();
include("vues/v_visiteurs.php");
?>