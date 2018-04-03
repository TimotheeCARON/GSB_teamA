<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

switch($action){
	/*case 'AFFICHEMedicaments':{
		$lesMedicaments = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/
	case 'NewPraticiens':{
		if(!empty($_POST)){
			$Contact = $_POST['Contact'];
			$Telephone = $_POST['Telephone'];
			$RaisonSociale = $_POST['RaisonSociale'];
			$Adresse =$_POST['Adresse'];
			$CoeffNot = $_POST['CoeffNot'];
			$CoeffConf = $_POST['CoeffConf'];
			$Specialite = $_POST['Specialite'];
			$pdo->setPraticiens($Contact,$Telephone,$RaisonSociale,$Adresse,$CoeffNot,$CoeffConf,$Specialite);
			echo "<script>alert('$Specialite')</script>"; 

		}
		break;
	}

	case 'DelPraticiens':{
		if(!empty($_GET)){
			$Code = $_GET['Code'];
			$pdo->DelPraticiens($Code);
			echo "<script>alert('$Code')</script>";
		}
		break;
	}
	
}

$lesSpecialites = $pdo->getSpecialite();
$lesPraticiens = $pdo->getPraticiens();

include("vues/v_praticiens.php");
?>