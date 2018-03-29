<div id="contenu">
    <h2>Enregistrer un nouveau médicament</h2>
    <form method="POST" action="index.php?uc=medicaments&action=NewMedoc">
        <input type="text" name="nom" />Nom du médicament<br />
        <input type="text" name="prenom" />Effet thérapeutique<br />
        <input type="text" name="adresse" />Contre indication<br />
        <input type="text" name="" />Presentation<br />
        <input type="text" name="Dosage" />Dosage<br />
        <input type="text" name="pxHT" />pxHT<br />
        <input type="text" name="pxEchantillon" />pxEchantillon<br />
        <?php
            
        
            foreach ($lesFamillesMedicaments as $uneFamille){
                echo '<option value= '.$uneFamille['idFamille'].' > '.$uneFamille['nomFamille'].' </option>';
            }
            ?>
            
        </select> 

        <input type="submit" value="Envoyer" />
    
    </form>
</div>

<div id="contenu">
      <h2>Gérer les visiteurs médicaux</h2>
         
      
  	<table>
  	   <caption>Descriptif des éléments hors forfait -
           </caption>
             <tr>
                <th class="id">Numero</th>
                <th class="nom">Nom</th>
                <th class="famille">Prénom</th>  
                <th class="effet">Adresse</th>
                <th class="dosage">Code Postal</th>
                <th class="presentation">Présentation</th>
                <th class="contre_indication">Contre indiction</th>
                <th class="prix_HT">Prix HT</th>
                <th class="prix_echantillon">Prix échantillon</th>
                
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
            $id_secteur = $unvisiteur['idSecteur'];            
		?>
                <tr>
                    <td><?php echo $id ?></td>
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