<div class="text-center">
    <div id="contenu">
        <h2>Visiteur médicaux</h2>
    <?php

        if ($_GET['action']=="getUpdtVisiteur")
        {
            $nom=$LeVisiteur['nom'];
            $prenom=$LeVisiteur['prenom'];
            $adresse=$LeVisiteur['adresse'];
            $cp=$LeVisiteur['cp'];
            $ville=$LeVisiteur['ville'];
            $dateEmbauche=$LeVisiteur['dateEmbauche'];
            $nomSecteur=$LeVisiteur['nomSecteur'];
            $idSecteur=$LeVisiteur['idSecteur'];
        }
        else   
        {
            $nom="";
            $prenom="";
            $adresse="";
            $cp="";
            $ville="";
            $dateEmbauche="";
            $nomSecteur="";
            $idSecteur="";
        }
            echo'<div class="container">
                <div class="row centered-form">        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Enregistrer un visiteur médical</h3>
                        </div>
                            <div class="panel-body">';
                            
                             if (isset($_GET['updtId'])){
                                $id=$_GET['updtId'];
                                echo'<form method="POST" action="index.php?uc=visiteurs&action=updtVisiteur&updtId='.$id.'">';
                            }
                             else{
                                echo'<form method="POST" action="index.php?uc=visiteurs&action=NewVisiteur">';
                            } 
                                 echo'<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nom" id="nom" class="form-control"placeholder="Nom" value="'.$nom.'" required>
                                         </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prenom" value="'.$prenom.'" required>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse" value="'.$adresse.'" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cp" id="cp" class="form-control" placeholder="Code Postal" value="'.$cp.'" required>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville" value="'.$ville.'" required>
                                         </div>
                                     </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="dateEmbauche" id="dateEmbauche" class="form-control" input-sm" placeholder="Date d embauche" value="'.$dateEmbauche.'" required>
                                         </div>
                                     </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="Secteur">';
                                    
                                        foreach ($lesSecteurs as $leSecteur){
                                            echo '<option value='.$leSecteur['idSecteur'].' > '.$leSecteur['nomSecteur'].' </option>';
                                        }
                                        if (isset($_GET['updtId'])){
                                        echo'<option selected value="'.$idSecteur.'">'.$nomSecteur.'</option>';
                                        }
                                         ?>  
                                         </select>                         
                                        </div>
                                    </div>
                                 </div>
                                
                                <?php if (isset($_GET['updtId']))
                                {
                                    echo'<input type="submit" value="Modifier" class="btn btn-info"/>';
                                }
                                else
                                {
                                    echo'<input type="submit" value="Ajouter" class="btn btn-info"/>';
                                }
                                ?>
                    </form> 

                          </div>
                        </div>
                      </div>
                    
                  
                   
             
<div id="contenu">
    
      <h2>Gérer les visiteurs médicaux</h2>
      <table class="table table-striped custab">

  	   <tr>
                <th class="nom">Nom</th>
                <th class="prenom">Prénom</th>  
                <th class="adresse">Adresse</th>
                <th class="cp">Code Postal</th>
                <th class="ville">Ville</th>
                <th class="dateEmbauche">Date d embauche</th>
                <th class="nomSecteur">Secteur</th>
                <th class='action'>Action</th>
                
        </tr>
              <?php      
          foreach ( $lesVisiteurs as $unVisiteur ) 
		  {
			$LeId = $unVisiteur['id'];
			$nom = $unVisiteur['nom'];
			$prenom = $unVisiteur['prenom'];
            $adresse = $unVisiteur['adresse'];
            $cp = $unVisiteur['cp'];
            $ville = $unVisiteur['ville'];
            $date_embauche = $unVisiteur['dateEmbauche'];
            $nom_secteur = $unVisiteur['nomSecteur'];            
		?>
                <tr>
                    <td><?php echo $nom ?></td>
                    <td><?php echo $prenom ?></td>
                    <td><?php echo $adresse ?></td>
                    <td><?php echo $cp ?></td>
                    <td><?php echo $ville ?></td>
                    <td><?php echo $date_embauche ?></td>
                    <td><?php echo $nom_secteur ?></td>
                    <td><?php echo "<a href='index.php?uc=visiteurs&action=delVisiteur&delId=$LeId' title='Delete'><img src='./images/Delete_icon.png' alt='Delete' /></a>
                    <a href='index.php?uc=visiteurs&action=getUpdtVisiteur&updtId=$LeId' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>"
                    ?></td>
                </tr>
                 <?php
			}
        ?>
    </table>
</div>
</div>