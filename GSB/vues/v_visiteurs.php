<div id="contenu">
    <h2>Enregistrer un nouveau visiteur médical</h2>
    <form method="POST" action="index.php?uc=visiteurs&action=NewVisiteur">
        <input type="text" name="nom" />Nom du médicament<br />
        <input type="text" name="prenom" />Effet thérapeutique<br />
        <input type="text" name="adresse" />Contre indication<br />
        <input type="text" name="cp" />Presentation<br />
        <input type="text" name="ville" />Dosage<br />
        <input type="text" name="dateEmbauche" />pxHT<br />
        <input type="text" name="idSecteur" />pxEchantillon<br />

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
                
             </tr>
              <?php      
          foreach ( $lesVisiteurs as $unVisiteur ) 
		  {
			
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
                </tr>
                 <?php
			}
		?>
    </table>
</div>