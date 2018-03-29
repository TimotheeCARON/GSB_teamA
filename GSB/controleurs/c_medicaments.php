<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur']; 

$action = $_REQUEST['action'];
switch($action){
	/*case 'AFFICHEMedicaments':{
		$lesMedicaments = $_REQUEST['AfficherlesMedocs'];
		
	  	 	$pdo->AfficherMedocs($Numero,$Nom,$Famille,$Effet,$Presentation,$Dosage,$ContreIndication,$PrixHT,$PrixEchantillon);
	}*/
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
			setMedicament ($nomMedoc,$Effet_thérapeutique,$Contre_indication,$Presentation,$Dosage,$pxHT,$pxEchantillon,$famille);
		}
	}
}

$lesMedicaments= $pdo->getMedicaments();
$lesFamillesMedicaments = $pdo->getFamillesMedicaments();
include("vues/v_medicaments.php");
?>