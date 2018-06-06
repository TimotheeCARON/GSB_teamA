<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;

session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'praticiens' :{
        include("controleurs/c_praticiens.php");break;
	}
	case 'visiteurs' :{
        include("controleurs/c_visiteurs.php");break;
    }
    case 'medicaments' :{
        include("controleurs/c_medicaments.php");break;
    }
    case 'accueil' :{
        include("vues/v_sommaire.php");
        include("vues/v_accueil.php");break;
    }
}
include("vues/v_pied.php") ;
?>

