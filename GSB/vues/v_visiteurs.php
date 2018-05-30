<div id="contenu">
    <h2>Enregistrer un nouveau visiteur médical</h2>
    <form method="POST" action="index.php?uc=visiteurs&action=NewVisiteur">
        <input type="text" name="nom" />Nom<br />
        <input type="text" name="prenom" />Prenom<br />
        <input type="text" name="adresse" />Adresse<br />
        <input type="text" name="cp" />Code Postal<br />
        <input type="text" name="ville" />Ville<br />
        <input type="text" name="dateEmbauche" />Date d'embauche<br />
        <input type="text" name="idSecteur" />Secteur<br />

        <input type="submit" value="Envoyer" />
    
    </form>

</div>

<div id="contenu">
      <h2>Gérer les visiteurs médicaux</h2>
         
      
  	<table>
  	   <caption>Récapitulatif des visiteurs
           </caption>
             <tr>
                
                <th class="nom">Nom</th>
                <th class="prenom">Prénom</th>  
                <th class="adresse">Adresse</th>
                <th class="cp">Code Postal</th>
                <th class="ville">Ville</th>
                <th class="dateEmbauche">Date d'embauche</th>
                <th class="idSecteur">Secteur HT</th>
                <th class='action'>Action</th>
                
             </tr>
              <?php      
          foreach ( $lesVisiteurs as $unVisiteur ) 
		  {
			$id = $unVisiteur['id'];
			$nom = $unVisiteur['nom'];
			$prenom = $unVisiteur['prenom'];
            $adresse = $unVisiteur['adresse'];
            $cp = $unVisiteur['cp'];
            $ville = $unVisiteur['ville'];
            $date_embauche = $unVisiteur['dateEmbauche'];
            $id_secteur = $unVisiteur['idSecteur'];            
		?>
                <tr>
                    
                    <td><?php echo $nom ?></td>
                    <td><?php echo $prenom ?></td>
                    <td><?php echo $adresse ?></td>
                    <td><?php echo $cp ?></td>
                    <td><?php echo $ville ?></td>
                    <td><?php echo $date_embauche ?></td>
                    <td><?php echo $id_secteur ?></td>
                    <td><?php echo "<a href='index.php?uc=visiteurs&action=DelVisiteur&DelId=$id' title='Delete'><img src='./images/Delete_icon.png' alt='Delete' /></a>
                    <a href='index.php?uc=visiteurs&action=UpdtVisiteur&UpdtId=' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>"
                    ?></td>
                </tr>
                 <?php
			}
		?>
    </table>
</div>