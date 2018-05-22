<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];

$action = $_REQUEST['action'];

switch($action){
	/*case 'AFFICHEMedicaments':{
		$lesMedicaments = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/
	case 'AddPraticiens':{
		if(!empty($_POST))
		{

			$Contact = $_POST['Contact'];
			$Telephone = $_POST['Telephone'];
			$RaisonSociale = $_POST['RaisonSociale'];
			$Adresse =$_POST['Adresse'];
			$CoeffNot = $_POST['CoeffNot'];
			$CoeffConf = $_POST['CoeffConf'];
			$Specialite = $_POST['Specialite'];
		
			if(!empty($_GET['UpdtCode']))
			{
				$Code = $_GET['UpdtCode'];	
				$pdo->UpdtPraticiens($Code,$Contact,$Telephone,$RaisonSociale,$Adresse,$CoeffNot,$CoeffConf,$Specialite);
			}
			else
			{
				$pdo->setPraticiens($Contact,$Telephone,$RaisonSociale,$Adresse,$CoeffNot,$CoeffConf,$Specialite);
			}
			
		}
		break;
	}

	case 'DelPraticiens':{
		if(!empty($_GET)){
			$Code = $_GET['DelCode'];
			$pdo->DelPraticiens($Code);
			//echo "<script>alert('$Code')</script>";
		}
		break;
	}

	case 'UpdtPraticiens':{
		if(!empty($_GET)){
			$Code = $_GET['UpdtCode'];
			//echo "<script>alert('$Code')</script>";
			$LePraticien = $pdo->getPraticiensWithCode($Code);
			//$var=$LePraticien['Contact'];
			//echo "<script>alert('$var')</script>";
		}
		break;
	}
	
	
}

$lesSpecialites = $pdo->getSpecialite();
$lesPraticiens = $pdo->getPraticiens();

include("vues/v_praticiens.php");
?>