<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

switch($action){

 	case 'NewVisiteur':{
		if(!empty($_POST))
		{
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$adresse=$_POST['adresse'];
			$cp=$_POST['cp'];
			$ville=$_POST['ville'];
			$dateEmbauche=$_POST['dateEmbauche'];
			$idSecteur=$_POST['idSecteur'];
			$pdo->setVisiteur ($nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$idSecteur);
		}
	break;
	}

	case 'delVisiteur':{
		if(!empty($_GET)){
			$id = $_GET['delId'];
			$pdo->delVisiteur($id);
			//echo "<script>alert('$id')</script>";
		}
		break;
	}

	case 'updtVisiteur':{
		if(!empty($_GET)){
			$id = $_GET['updtId'];
			//echo "<script>alert('$id')</script>";
			$LeVisiteur = $pdo->getVisiteurWithId($id);
			//$var=$LeVisiteur['Contact'];
			//echo "<script>alert('$var')</script>";
		}
		break;
	}	

}
$lesVisiteurs= $pdo->getVisiteur();
$lesVisites= $pdo->getVisite();
$lesSecteurs= $pdo->getSecteur();

include("vues/v_visiteurs.php");

?>