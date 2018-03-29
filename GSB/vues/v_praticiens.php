<div id="contenu">
    <h2>Praticiens</h2>
    <form method="POST" action="index.php?uc=praticiens&action=NewPraticiens">
        <input type="text" name="Code" />Code du praticiens<br />
        <input type="text" name="Contact" />Contact<br />
        <input type="text" name="Telephone" />Telephone<br />
        <input type="text" name="RaisonSocial" />RaisonSocial<br />
        <input type="text" name="Adresse" />Adresse<br />
        <input type="text" name="CoeffNot" />Coefficient de notoriété<br />
        <input type="text" name="CoeffConf" />Coefficient de confiance<br />
        <select>
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
      <h2>Gérer les médicaments</h2>
         
      
  	<table>
  	   <caption>Descriptif des éléments hors forfait -
           </caption>
             <tr>
                <th class="id">Numero</th>
                <th class="nom">Nom</th>
                <th class='famille'>Famille</th>  
                <th class='effet'>Effet</th>
                <th class='dosage'>Dosage</th>
                <th class='presentation'>Présentation</th>
                <th class='contre_indication'>Contre indiction</th>
                <th class='prix_HT'>Prix HT</th>
                <th class='prix_echantillon'>Prix échantillon</th>
                
             </tr>
              <?php      
          foreach ( $lesMedicaments as $unMedicament ) 
		  {
			$id = $unMedicament['id_produit'];
			$nom = $unMedicament['Nom_commercial'];
			$famille = $unMedicament['nomFamille'];
            $effet = $unMedicament['Effet_therapeutique'];
            $contre_indication = $unMedicament['Contre_indication'];
            $presentation = $unMedicament['Presentation'];
            $dosage = $unMedicament['Dosage'];
            $prix_HT = $unMedicament['pxHT'];
            $prix_echantillon = $unMedicament['pxEchantillon'];
		?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $nom ?></td>
                    <td><?php echo $famille ?></td>
                    <td><?php echo $effet ?></td>
                    <td><?php echo $dosage ?></td>
                    <td><?php echo $presentation ?></td>
                    <td><?php echo $contre_indication ?></td>
                    <td><?php echo $prix_HT ?></td>
                    <td><?php echo $prix_echantillon ?></td>
                 </tr>
                 <?php
			}
		?>
    </table>
</div>
