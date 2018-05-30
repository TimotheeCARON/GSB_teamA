﻿<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application GSB
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 
 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   
		/*private static $serveur='mysql:host=172.17.21.12/phpmyadmin';
      	private static $bdd='dbname=gsb_teamA';   		
      	private static $user='root' ;    		
      	private static $mdp='mdp' ;	
		private static $monPdo;
		private static $monPdoGsb=null;*/

      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=gsb_teama';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;	
	private static $monPdo;
	private static $monPdoGsb=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
 
 * @return l'unique objet de la classe PdoGsb
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
/**
 * Retourne les informations d'un visiteur
 
 * @param $login 
 * @param $mdp
 * @return l'id, le nom et le prénom sous la forme d'un tableau associatif 
*/
	/*public function getInfosVisiteur($login, $mdp){
		$req = "select visiteur.id as id, visiteur.nom as nom, visiteur.prenom as prenom from visiteur 
		where visiteur.login='$login' and visiteur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}*/
	public function getInfosUtilisateur($login, $mdp){
		$req = "select utilisateur.id as id, utilisateur.nom as nom, utilisateur.prenom as prenom from utilisateur 
		where utilisateur.login='$login' and utilisateur.mdp='$mdp'";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetch();
		return $ligne;
	}

/**
 * Retourne sous forme d'un tableau associatif toutes les lignes de frais hors forfait
 * concernées par les deux arguments
 
 * La boucle foreach ne peut être utilisée ici car on procède
 * à une modification de la structure itérée - transformation du champ date-
 
 * @param $idVisiteur 
 * @param $mois sous la forme aaaamm
 * @return tous les champs des lignes de frais hors forfait sous la forme d'un tableau associatif 
*/
	/*public function getLesFraisHorsForfait($idVisiteur,$mois){
	    $req = "select * from lignefraishorsforfait where lignefraishorsforfait.idvisiteur ='$idVisiteur' 
		and lignefraishorsforfait.mois = '$mois' ";	
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		$nbLignes = count($lesLignes);
		for ($i=0; $i<$nbLignes; $i++){
			$date = $lesLignes[$i]['date'];
			$lesLignes[$i]['date'] =  dateAnglaisVersFrancais($date);
		}
		return $lesLignes; 
	}*/
/**
 * Retourne le nombre de justificatif d'un visiteur pour un mois donné
 
 * @param $idVisiteur 
 * @param $mois sous la forme aaaamm
 * @return le nombre entier de justificatifs 
*/
	/*public function getNbjustificatifs($idVisiteur, $mois){
		$req = "select fichefrais.nbjustificatifs as nb from  fichefrais where fichefrais.idvisiteur ='$idVisiteur' and fichefrais.mois = '$mois'";
		$res = PdoGsb::$monPdo->query($req);
		$laLigne = $res->fetch();
		return $laLigne['nb'];
	}*/
/**
 * Retourne sous forme d'un tableau associatif toutes les lignes de frais au forfait
 * concernées par les deux arguments
 
 * @param $idVisiteur 
 * @param $mois sous la forme aaaamm
 * @return l'id, le libelle et la quantité sous la forme d'un tableau associatif 
*/
	/*public function getLesFraisForfait($idVisiteur, $mois){
		$req = "select fraisforfait.id as idfrais, fraisforfait.libelle as libelle, 
		lignefraisforfait.quantite as quantite from lignefraisforfait inner join fraisforfait 
		on fraisforfait.id = lignefraisforfait.idfraisforfait
		where lignefraisforfait.idvisiteur ='$idVisiteur' and lignefraisforfait.mois='$mois' 
		order by lignefraisforfait.idfraisforfait";	
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}*/
/**
 * Retourne tous les id de la table FraisForfait
 
 * @return un tableau associatif 
*/
	/*public function getLesIdFrais(){
		$req = "select fraisforfait.id as idfrais from fraisforfait order by fraisforfait.id";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getMontantFrais(){
		$req = "select libelle,montant,id from fraisforfait";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function updateFrais($MAJlesFrais){
		$lesCles = array_keys($MAJlesFrais);
		foreach($lesCles as $unIdFrais){
		$req = "update fraisforfait set montant = '$montant' where id = '$id;";
		PdoGsb::$monPdo->exec($req);
		echo $req;
		}
	}*/

	//Medicaments
		public function getMedicaments (){
		$req = "select M.id_produit,M.Nom_commercial,M.Effet_therapeutique,M.Contre_indication,M.Presentation,M.Dosage,M.pxHT,M.pxEchantillon,F.nomFamille FROM Medicament AS M INNER JOIN famille AS F on M.idFamille=F.idFamille order by M.id_produit;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
		public function getFamillesMedicaments(){
		$req = "select * FROM famille;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
		public function setMedicament ($nom_commercial,$effet_therapeutique,$contre_indication,$presentation,$dosage,$pxHT,$pxEchantillon,$famille){
		$req = "INSERT INTO medicament (nom_commercial,Effet_therapeutique,Contre_indication,Presentation,Dosage,pxHT,pxEchantillon,idFamille) 
		VALUES ('$nom_commercial','$effet_therapeutique','$contre_indication','$presentation','$dosage',$pxHT,$pxEchantillon,$famille)";
		//echo "<script>alert(\"$req\")</script>"; 
		$res = PdoGsb::$monPdo->query($req);
	}

		public function supprMedicament($id){
		$req = "DELETE from interragir WHERE Id_produit='$id' OR Id_produit_Medicament='$id'";
		$res = PdoGsb::$monPdo->query($req);
		$req = "DELETE from medicament WHERE Id_produit='$id'";
		$res = PdoGsb::$monPdo->query($req);
	}
		public function setInteraction($idMedoc1,$idMedoc2){
		$req = "INSERT INTO interragir (Id_produit,Id_produit_Medicament)
		VALUES ('$idMedoc1','$idMedoc2')";
		$res = PdoGsb::$monPdo->query($req);
	}

	//Visiteurs
		
		public function getVisiteur (){
		$req = "select id, nom, prenom, adresse, cp, ville, dateEmbauche, idSecteur from visiteur_medical;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
		}

		public function getVisite(){
		$req = "select V.id, V.nom, V.prenom, V.adresse, V.cp, V.ville,V.dateEmbauche, Vi.date_visite FROM Visiteur_medical AS V INNER JOIN visiter AS Vi on V.id=Vi.id ;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
		}

		public function setVisiteur ($nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$id_secteur){
			$req = "INSERT INTO visiteur_medical (nom,prenom,adresse,cp,ville,dateEmbauche,idSecteur) 
			VALUES ('$nom','$prenom','$adresse','$cp','$ville','$dateEmbauche',$id_secteur)";
			$res = PdoGsb::$monPdo->query($req);
		}
		
		public function delVisiteur ($id){
			$req = "DELETE FROM visiteur_medical WHERE id = $id";
			$res = PdoGsb::$monPdo->query($req);
		}

		public function getVisiteurWithId ($id){
			$req = "select * FROM visiteur_medical WHERE id= $id;";
			$res = PdoGsb::$monPdo->query($req);
			$lesLignes = $res->fetch();
			return $lesLignes;
			}

		public function updtVisiteur($id,$nom,$prenom,$adresse,$cp,$ville,$dateEmbauche,$id_secteur){
			$req = "UPDATE praticien SET nom = '$nom', prenom = '$prenom', adresse = '$adresse', cp = '$cp', ville = $dateEmbauche, idSecteur= '$id_secteur' WHERE id = $id ;";
			$res = PdoGsb::$monPdo->query($req);
		}

	//Praticiens
		public function getPraticiens (){
		$req = "select P.Code, P.Raison_sociale, P.Adresse, P.Telephone, P.Contact, P.Coef_notoriete, P.coef_confiance, S.nomSpecialite FROM Praticien AS P INNER JOIN Specialite AS S on S.idSpecialite=P.idSpecialite;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
		}
		public function getSpecialite(){
		$req = "select * FROM specialite;";
		$res = PdoGsb::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
		}								
		public function setPraticiens ($Contact,$Telephone,$RaisonSociale,$Adresse,$CoeffNot,$CoeffConf,$Specialite){
		$req = "INSERT INTO praticien (Contact, Telephone, Raison_sociale, Adresse, Coef_notoriete, coef_confiance, idSpecialite) 
		VALUES ('$Contact','$Telephone','$RaisonSociale','$Adresse',$CoeffNot,$CoeffConf,$Specialite)";
		$res = PdoGsb::$monPdo->query($req);
		}
		public function delPraticiens ($Code){
			$req = "DELETE FROM praticien WHERE Code = $Code";
			$res = PdoGsb::$monPdo->query($req);
		}


		public function getPraticiensWithCode ($Code){
			$req = "select P.Code, P.Raison_sociale, P.Adresse, P.Telephone, P.Contact, P.Coef_notoriete, P.coef_confiance, S.nomSpecialite, S.idSpecialite FROM Praticien AS P INNER JOIN Specialite AS S on S.idSpecialite=P.idSpecialite WHERE P.Code = $Code;";
			$res = PdoGsb::$monPdo->query($req);
			$lesLignes = $res->fetch();
			return $lesLignes;
			}
		public function updtPraticiens($Code,$Contact,$Telephone,$RaisonSociale,$Adresse,$CoeffNot,$CoeffConf,$Specialite){
			$req = "UPDATE praticien SET Raison_sociale = '$RaisonSociale', Adresse = '$Adresse', Telephone = '$Telephone', Contact = '$Contact', Coef_notoriete = $CoeffNot, Coef_confiance = $CoeffConf, idSpecialite = $Specialite WHERE Code = $Code ;";
			$res = PdoGsb::$monPdo->query($req);
		}

}
?>