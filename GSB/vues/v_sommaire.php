<h2 class="text-center" id="MsgBienvenue">Bienvenue sur l'outil de gestion GSB : <strong> <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?> </strong></h2>       
		
        
<div class="list-group list-group-horizontal">
    <a href="index.php?uc=accueil&action=accueil" class="list-group-item">Accueil</a>
    <a href="index.php?uc=medicaments&action=Medicaments" title="medicaments" class="list-group-item">Medicaments</a>
    <a href="index.php?uc=praticiens&action=Praticiens" title="Praticiens "class="list-group-item">Praticiens</a>
    <a href="index.php?uc=visiteurs&action=Visiteurs" title="Visiteurs" class="list-group-item">Visiteur Médicaux</a>
    <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter" class="list-group-item active">Déconnexion</a>
</div>
