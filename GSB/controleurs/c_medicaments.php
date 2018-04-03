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
			echo "<script>alert(\"l'idée est : $id\")</script>";
			$pdo->supprMedicament($id);
			
		}
		 break;
		//mysql_query("DELETE from membres WHERE membres_id='$id'");
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
			echo "<script>alert(\"ca passe\")</script>"; 
		}
		break;
	}
	
}

$lesMedicaments= $pdo->getMedicaments();
$lesFamillesMedicaments = $pdo->getFamillesMedicaments();
include("vues/v_medicaments.php");
?>