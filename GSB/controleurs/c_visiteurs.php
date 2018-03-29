<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];

switch($action){
	/*case 'AFFICHEVisiteurs':{
		$lesVisiteurs = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/





 	case 'NewVisiteur':{
	if(!empty($_POST)){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$cp=$_POST['cp'];
		$ville=$_POST['ville'];
		$dateEmbauche=$_POST['dateEmbauche'];
		$idSecteur=$_POST['idSecteur'];
		setVisiteur ($nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$idSecteur);
		}
	}
}



$lesVisiteurs= $pdo->getVisiteur();
$lesVisites= $pdo->getVisite();
include("vues/v_visiteurs.php");
?>