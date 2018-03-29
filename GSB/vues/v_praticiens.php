<div id="contenu">
    <h2>Praticiens</h2>
    <form method="POST" action="index.php?uc=praticiens&action=NewPraticiens">
        <input type="text" name="Code" />Code du praticiens<br />
        <input type="text" name="Contact" />Contact<br />
        <input type="text" name="Telephone" />Telephone<br />
        <input type="text" name="RaisonSociale" />Raison Sociale<br />
        <input type="text" name="Adresse" />Adresse<br />
        <input type="text" name="CoeffNot" />Coefficient de notoriété<br />
        <input type="text" name="CoeffConf" />Coefficient de confiance<br />
        <select>
            <?php
                foreach ($lesSpecialites as $laSpecialite){
                    echo '<option value= '.$laSpecialite['idSpecialite'].' > '.$laSpecialite['nomSpecialite'].' </option>';
                }
            ?>
        </select> 

        <input type="submit" value="Envoyer" />
    
    </form>
</div>

<div id="contenu">
      <h2>Gérer les praticiens</h2>
         
      
  	<table>
  	   <caption>Praticiens
           </caption>
             <tr>
                <th class="Code">Code du praticiens</th>
                <th class="Contact">Contact</th>
                <th class='Telephone'>Telephone</th>  
                <th class='RaisonSociale'>Raison Sociale</th>
                <th class='Adresse'>Adresse</th>
                <th class='CoeffNot'>Coefficient de notoriété</th>
                <th class='CoeffConf'>Coefficient de confiance</th>
                <th class='Specialite'>Specialite</th>
                
             </tr>
              <?php      
          foreach ( $lesPraticiens as $unPraticien ) 
		  {
			$Code = $unPraticien['Code'];
			$Contact = $unPraticien['Contact'];
			$Telephone = $unPraticien['Telephone'];
            $RaisonSociale = $unPraticien['Raison_sociale'];
            $Adresse = $unPraticien['Adresse'];
            $CoeffNot = $unPraticien['Coef_notoriete'];
            $CoeffConf = $unPraticien['coef_confiance'];
            $Specialite = $unPraticien['nomSpecialite'];
        
                ?>
                <tr>
                    <td><?php echo $Code ?></td>
                    <td><?php echo $Contact ?></td>
                    <td><?php echo $Telephone ?></td>
                    <td><?php echo $RaisonSociale ?></td>
                    <td><?php echo $Adresse ?></td>
                    <td><?php echo $CoeffNot ?></td>
                    <td><?php echo $CoeffConf ?></td>
                    <td><?php echo $Specialite ?></td>
                 </tr>
                 <?php
			}
		?>
    </table>
</div>
