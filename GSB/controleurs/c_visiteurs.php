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
		$nomSecteur=$_POST['nomSecteur'];
		$pdo->setVisiteur ($nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$nomSecteur);
		}
	}

	case 'DelVisiteur':{
		if(!empty($_GET)){
			$id = $_GET['DelId'];
			$pdo->delVisiteur($id);
			//echo "<script>alert('$id')</script>";
		}
		break;
	}

	case 'updtVisiteur':{
		if(!empty($_GET)){
			$id = $_GET['UpdtId'];
			//echo "<script>alert('$id')</script>";
			$LeVisiteur = $pdo->getVisiteurWithId($id);
			//$var=$LeVisiteur['Contact'];
			//echo "<script>alert('$var')</script>";
		}
		break;
	}	

}
$lesVisiteurs= $pdo->getVisiteur();
$lesSecteurs= $pdo->getSecteur();

include("vues/v_visiteurs.php");

?>