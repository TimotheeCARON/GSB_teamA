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
<div class="text-center">
    <div id="contenu">
        <div id="contenu" class="container">
            <h2> Medicaments </h2>
            <div class="row centered-form">
                
                <div class="panel panel-default">
                    
                <?php 
                if ($_GET['action']=="UpdtMedoc"){
                    echo '<div class="panel-heading">
                            <h3 class="panel-title">Modifier le médicament <strong>'.$nom.'</strong></h3>
                        </div>';
                    echo'<form method="POST" action="index.php?uc=medicaments&action=ModifMedoc">';
                }
                else{
                    echo '<div class="panel-heading">
                            <h3 class="panel-title">Enregistrer un nouveau médicament</h3>
                        </div>
                    <form method="POST" action="index.php?uc=medicaments&action=NewMedoc">';
                }
                echo '  <div class="panel-body">
                            <input type="hidden" name="id" id="id" value="'.$id.'"> 
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="nomMedoc" id="nomMedoc" value="'.$nom.'" placeholder="Nom du médicament">
                                    </div> 
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="Effet_therapeutique" id="Effet_therapeutique" value="'.$effet.'" placeholder="Effet thérapeutique">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="Contre_indication" id="Contre_indication" value="'.$contre_indication.'" placeholder="Contre indication">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="Presentation" id="Presentation" value="'.$presentation.'" placeholder="Presentation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="Dosage" id="Dosage" value="'.$dosage.'" placeholder="Dosage">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="pxHT" id="pxHT" value="'.$prix_HT.'" placeholder="pxHT">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control name="pxEchantillon" id="pxEchantillon" value="'.$prix_echantillon.'" placeholder="pxEchantillon">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <select class="form-control" name="famille">
                        </div>';
                                
                        ?>
                        <?php
                            foreach ($lesFamillesMedicaments as $uneFamille){
                                echo '<option value= '.$uneFamille['idFamille'].' > '.$uneFamille['nomFamille'].' </option>';
                            }
                        ?>
                                    </select> 
                                </div>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['UpdtId'])){
                            echo '<input type="submit" value="Modifier" class="btn btn-info btn-block"/>';
                        }
                        else{
                            echo '<input type="submit" value="Envoyer" class="btn btn-info btn-block"/>';
                        }
                        ?>
                    </form>
                
                </div>
            </div>




            <div id="contenu">   
                <h2>Gérer les médicaments</h2>
                
                <table class="table table-striped custab">
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
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="interaction1">
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
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="interaction2">
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
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Envoyer" class="btn btn-info btn-block" /> 
                    
                </form>
            </div>


            <div id="contenu">
                <h2>Supprimer une interaction entre médicaments</h2>

                <table class="table table-striped custab">
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
        </div>
    </div>
</div>
