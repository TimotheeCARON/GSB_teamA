    <!-- Division pour le sommaire -->
    <div id="menuGauche">

        <ul id="menuList">
			<li >
				  Visiteur :<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
           <!--<li class="smenu">
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=modifierforfait&action=modifierforfait" title="Modifier forfait">Modifier forfait</a>
           </li>-->
 	         
           <li class="smenu">
              <a href="index.php?uc=medicaments&action=Medicaments" title="medicaments">Medicaments</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=praticiens&action=Praticiens" title="Praticiens ">Praticiens</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=visiteurs&action=Visiteurs" title="Visiteurs ">Visiteurs</a>
           </li>
          
           <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>

<div class="container">
	<div class="row" style="padding-top:50px">
		
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">

            <div class="list-group list-group-horizontal">
                <a href="#" class="list-group-item">Accueil</a>
                <a href="#" class="list-group-item">Medicaments</a>
                <a href="#" class="list-group-item">Praticiens</a>
                <a href="#" class="list-group-item">Visiteur Médicaux</a>
                <a href="#" class="list-group-item active" id="cc">Déconnexion</a>
            </div>

        </div>
  
	</div>
</div>