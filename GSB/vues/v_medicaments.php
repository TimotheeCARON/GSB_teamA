<?php 
if ($_GET['action']=="UpdtMedoc"){
    $id = $LeMedicament['id_produit'];
    $nom = $LeMedicament['Nom_commercial'];
    $famille = $LeMedicament['nomFamille'];
    $effet = $LeMedicament['Effet_therapeutique'];
    $contre_indication = $LeMedicament['Contre_indication'];
    $presentation = $LeMedicament['Presentation'];
    $dosage = $LeMedicament['Dosage'];
    $prix_HT = $LeMedicament['pxHT'];
    $prix_echantillon = $LeMedicament['pxEchantillon'];
}
else{
    $id = "";
    $nom = "";
    $famille = "";
    $effet = "";
    $contre_indication = "";
    $presentation = "";
    $dosage = "";
    $prix_HT = "";
    $prix_echantillon = "";
}
?>

<div id="contenu">
<?php 
if ($_GET['action']=="UpdtMedoc"){
    echo '<h2>Modifier un médicament</h2>
    <form method="POST" action="index.php?uc=medicaments&action=ModifMedoc">';
}
else{
    echo '<h2>Enregistrer un nouveau médicament</h2>
    <form method="POST" action="index.php?uc=medicaments&action=NewMedoc">';
}
echo '  <input type="hidden" name="id" id="id" value="'.$id.'">
        <input type="text" name="nomMedoc" id="nomMedoc" value="'.$nom.'">Nom du médicament<br />
        <input type="text" name="Effet_therapeutique" id="Effet_therapeutique" value="'.$effet.'">Effet thérapeutique<br />
        <input type="text" name="Contre_indication" id="Contre_indication" value="'.$contre_indication.'">Contre indication<br />
        <input type="text" name="Presentation" id="Presentation" value="'.$presentation.'">Presentation<br />
        <input type="text" name="Dosage" id="Dosage" value="'.$dosage.'">Dosage<br />
        <input type="text" name="pxHT" id="pxHT" value="'.$prix_HT.'">pxHT<br />
        <input type="text" name="pxEchantillon" id="pxEchantillon" value="'.$prix_echantillon.'">pxEchantillon<br />
        <select name="famille">';
?>
            <?php
                foreach ($lesFamillesMedicaments as $uneFamille){
                    echo '<option value= '.$uneFamille['idFamille'].' > '.$uneFamille['nomFamille'].' </option>';
                }
            ?>
            
        </select> 
        <?php
        if (isset($_GET['UpdtId'])){
            echo '<input type="submit" value="Modifier" />';
        }
        else{
            echo '<input type="submit" value="Envoyer" />';
        }
        ?>
    </form>
</div>



<div id="contenu">
      <h2>Gérer les médicaments</h2>
         
      
  	<table>
  	   <caption>Descriptif des médicaments -
           </caption>
             <tr>
                <th class="id">Numero</th>
                <th class="nom">Nom</th>
                <th class='famille'>Famille</th>  
                <th class='effet'>Effet</th>
                <th class='dosage'>Dosage</th>
                <th class='presentation'>Présentation</th>
                <th class='contre_indication'>Contre indication</th>
                <th class='prix_HT'>Prix HT</th>
                <th class='prix_echantillon'>Prix échantillon</th>
                <th class='supprimer'>Supprimer</th>
                
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
                    <td><?php echo "<a href='index.php?uc=medicaments&action=SupprMedoc&id=$id' title='Supprimer'><img src='./images/Delete_icon.png' alt='Supprimer' /></a>
                    <a href='index.php?uc=medicaments&action=UpdtMedoc&UpdtId=$id' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>";
                    ?>
                    </td>
                 </tr>
                 
                 <?php
			}
		?>
    </table>
</div>

<div id="contenu">
    <h2>Créer une interaction entre médicaments</h2>
    <form method="POST" action="index.php?uc=medicaments&action=NewInterac">
        <select name="interaction1">
        <?php
        foreach ( $lesMedicaments as $unMedicament ) 
            {
                $id = $unMedicament['id_produit'];
                $nom = $unMedicament['Nom_commercial'];
        ?>
                
                <?php
                    echo '<option value= '.$unMedicament['id_produit'].' > '.$unMedicament['Nom_commercial'].' </option>';
                
            }
        ?>
        </select> 
        <select name="interaction2">
        <?php
        foreach ( $lesMedicaments as $unMedicament ) 
            {
                $id = $unMedicament['id_produit'];
                $nom = $unMedicament['Nom_commercial'];
        ?>
                
                <?php
                    echo '<option value= '.$unMedicament['id_produit'].' > '.$unMedicament['Nom_commercial'].' </option>';
                
            }
        ?>
        </select>
        <input type="submit" value="Envoyer" /> 
    </form>
</div>


<!-- A FAIRE SAC A VIANDE ! -->
<div id="contenu">
    <h2>Supprimer une interaction entre médicaments</h2>

    <table>
             <tr>
                <th class="idInterac1">Le médicament   </th>
                <th class="idInterac2">Intéragie avec</th>
                
             </tr>
              <?php      
          foreach ($lesInteractions as $uneInteraction ) 
		  {
			$id1 = $uneInteraction['id_produit'];
			$id2 = $uneInteraction['id_produit_Medicament'];
			
		?>
                <tr>
                    <td><?php echo $id1 ?></td>
                    <td><?php echo $id2 ?></td>                   
                    <td><?php echo "<a href='index.php?uc=medicaments&action=SupprInteraction&id1=$id1&id2=$id2' title='Supprimer'><img src='./images/Delete_icon.png' alt='Supprimer' /></a>"
                    ?>
                    </td>
                 </tr>
                 
                 <?php
			}
		?>
    </table>
</div>

