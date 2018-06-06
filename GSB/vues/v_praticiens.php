<!--  -->
<div class="text-center">
    <div id="contenu">
        <h2>Praticiens</h2>
    <?php
    // Récupère l'action du bouton update (bleu), si modifier le praticiens recupérer le praticiens avec le Code en paramètre
    // sinon initialise les variables du praticiens à vide en vue d'un nouvel ajout.
        if ($_GET['action']=="GetLePraticien")
            {
                //$vars=$_GET['action'];
                //echo "<script>alert('$vars')</script>";
                $Contact=$LePraticien['Contact'];
                $Telephone=$LePraticien['Telephone'];
                $RaisonSociale=$LePraticien['Raison_sociale'];
                $Adresse=$LePraticien['Adresse'];
                $CoeffNot=$LePraticien['Coef_notoriete'];
                $CoeffConf=$LePraticien['coef_confiance'];
                $Specialite=$LePraticien['nomSpecialite'];
                $IdSpecialite=$LePraticien['idSpecialite'];
            }
            else {
                $Contact= "";
                $Telephone="";
                $RaisonSociale="";
                $Adresse="";
                $CoeffNot="";
                $CoeffConf="";
                $Specialite="";
                $IdSpecialite="";
            }
        
            

           // Formulaire du praticiens vide pour un nouveau ou remplie avec les donné du praticiens à modifier.
            
            echo'<div class="container">
            <div class="row centered-form">
           
                <div class="panel panel-default">
                    <div class="panel-heading">';
                            
                            
                             if (isset($_GET['UpdtCode'])){
                                $code=$_GET['UpdtCode'];
                                echo'<h3 class="panel-title">Modification du praticien <strong>'.$Contact.'</strong></h3>
                                </div>
                                <div class="panel-body">';
                                
                                echo'<form method="POST" action="index.php?uc=praticiens&action=UpdtPraticiens&UpdtCode='.$code.'">';
                            }
                            else{
                                echo'<h3 class="panel-title">Enregistrer un praticien</h3>
                                </div>
                                <div class="panel-body">';
                                echo'<form method="POST" action="index.php?uc=praticiens&action=AddPraticiens">';
                            } 
                                echo'<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="Contact" id="Contact" class="form-control input-sm" placeholder="Contact" value="'.$Contact.'" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Telephone" id="Telephone" class="form-control input-sm" placeholder="Telephone" value="'.$Telephone.'" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="RaisonSociale" id="RaisonSociale" class="form-control input-sm" placeholder="Raison Sociale" value="'.$RaisonSociale.'" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Adresse" id="Adresse" class="form-control input-sm" placeholder="Adresse" value="'.$Adresse.'" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <input type="text" name="CoeffNot" id="CoeffNot" class="form-control input-sm" placeholder="Coefficient de notoriété" value="'.$CoeffNot.'" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="CoeffConf" id="CoeffConf" class="form-control input-sm" placeholder="Coefficient de confiance" value="'.$CoeffConf.'" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                <select class="form-control" name="Specialite">';
                                
                                    foreach ($lesSpecialites as $laSpecialite){
                                        echo '<option value= '.$laSpecialite['idSpecialite'].' > '.$laSpecialite['nomSpecialite'].' </option>';
                                    }
                                    if (isset($_GET['UpdtCode'])){
                                    echo'<option selected value="'.$IdSpecialite.'">'.$Specialite.'</option>';
                                    }
                                ?> 
                                
                            </select> 
                            
                            </div>
                        </div>
                                
                                <?php if (isset($_GET['UpdtCode']))
                                {
                                    echo'<input type="submit" value="Modifier" class="btn btn-info btn-block"/>';
                                }
                                else
                                {
                                    echo'<input type="submit" value="Ajouter" class="btn btn-info btn-block"/>';
                                }
                                ?>
                            </form>
                            
                        </div>
                    </div>
                </div>
        
            </div>

    <div id="contenu">
        <h2>Tableau des praticiens</h2>
            <!-- Tableau des praticiens -->
        
        <table class="table table-striped custab">
                <tr>
                    <th class='Code'>Code</th>
                    <th class='Contact'>Contact</th>
                    <th class='Telephone'>Telephone</th>  
                    <th class='RaisonSociale'>Raison Sociale</th>
                    <th class='Adresse'>Adresse</th>
                    <th class='CoeffNot'>Coefficient de notoriété</th>
                    <th class='CoeffConf'>Coefficient de confiance</th>
                    <th class='Specialite'>Specialite</th>
                    <th class='action'>Action</th>
                    
                </tr>
                <?php      
                // Parcourt des praticiens dans la base de données, pour chaques praticiens recupérer chaques éléments
            foreach ( $lesPraticiens as $unPraticien ) 
            {
                $LeCode = $unPraticien['Code'];
                $Contact = $unPraticien['Contact'];
                $Telephone = $unPraticien['Telephone'];
                $RaisonSociale = $unPraticien['Raison_sociale'];
                $Adresse = $unPraticien['Adresse'];
                $CoeffNot = $unPraticien['Coef_notoriete'];
                $CoeffConf = $unPraticien['coef_confiance'];
                $Specialite = $unPraticien['nomSpecialite'];
            
                    ?>
                    <tr>
                        <td><?php echo $LeCode ?></td>
                        <td><?php echo $Contact ?></td>
                        <td><?php echo $Telephone ?></td>
                        <td><?php echo $RaisonSociale ?></td>
                        <td><?php echo $Adresse ?></td>
                        <td><?php echo $CoeffNot ?></td>
                        <td><?php echo $CoeffConf ?></td>
                        <td><?php echo $Specialite ?></td>
                        <td>
                        <?php echo "<a href='index.php?uc=praticiens&action=DelPraticiens&DelCode=$LeCode' title='Delete'><img src='./images/Delete_icon.png' alt='Delete' /></a>
                        <a href='index.php?uc=praticiens&action=GetLePraticien&UpdtCode=$LeCode' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>"
                        ?>
                    </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</div>