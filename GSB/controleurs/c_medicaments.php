<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur']; 

$action = $_REQUEST['action'];
switch($action){
	/*case 'AFFICHEMedicaments':{
		$lesMedicaments = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/
	case 'SupprMedoc':{
		if (!empty($_GET)){
			$id=$_GET['id'];
			//echo "<script>alert(\"l'idée est : $id\")</script>";
			$pdo->supprMedicament($id);
			
		}
		 break;
		//mysql_query("DELETE from membres WHERE membres_id='$id'");
	}

	case 'SupprInteraction':{
		if (!empty($_GET)){
			$id1=$_GET['id1'];
			$id2=$_GET['id2'];
			$pdo->SupprInteraction($id1,$id2);
		}
		break;
	}

	case 'NewMedoc':{
		if(!empty($_POST)){
			$nomMedoc=$_POST['nomMedoc'];
			$Effet_therapeutique=$_POST['Effet_therapeutique'];
			$Contre_indication=$_POST['Contre_indication'];
			$Presentation=$_POST['Presentation'];
			$Dosage=$_POST['Dosage'];
			$pxHT=$_POST['pxHT'];
			$pxEchantillon=$_POST['pxEchantillon'];
			$famille=$_POST['famille'];
			$pdo->setMedicament ($nomMedoc,$Effet_therapeutique,$Contre_indication,$Presentation,$Dosage,$pxHT,$pxEchantillon,$famille);
			//echo "<script>alert(\"ca passe\")</script>"; 
		}
		break;
	}

	case 'NewInterac':{
		if(!empty($_POST)){
			$idMedoc1=$_POST['interaction1'];
			$idMedoc2=$_POST['interaction2'];
			$pdo->setInteraction($idMedoc1,$idMedoc2);
		}
		break;
	}

	case 'UpdtMedoc':{
		if(!empty($_GET)){
			$Id = $_GET['UpdtId'];
			//echo "<script>alert('$id')</script>";
			$LeMedicament = $pdo->getLeMedicament($Id);
			
		}
		break;
	}

	case 'ModifMedoc':{
		if(!empty($_POST)){
			$id=$_POST['id'];
			$nomMedoc=$_POST['nomMedoc'];
			$Effet_therapeutique=$_POST['Effet_therapeutique'];
			$Contre_indication=$_POST['Contre_indication'];
			$Presentation=$_POST['Presentation'];
			$Dosage=$_POST['Dosage'];
			$pxHT=$_POST['pxHT'];
			$pxEchantillon=$_POST['pxEchantillon'];
			$famille=$_POST['famille'];
			$pdo->updateMedicament ($id,$nomMedoc,$Effet_therapeutique,$Contre_indication,$Presentation,$Dosage,$pxHT,$pxEchantillon,$famille);
		}
		break;
	}
	
}

$lesMedicaments= $pdo->getMedicaments();
$lesFamillesMedicaments = $pdo->getFamillesMedicaments();
$lesInteractions = $pdo->getInteractions();

include("vues/v_medicaments.php");
?>