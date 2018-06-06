<div class="text-center">
    <div id="contenu">
        <h2>Visiteur médicaux</h2>
    <?php

        if ($_GET['action']=="updtVisiteur")
        {
            $nom=$LeVisiteur['nom'];
            $prenom=$LeVisiteur['prenom'];
            $adresse=$LeVisiteur['adresse'];
            $cp=$LeVisiteur['cp'];
            $ville=$LeVisiteur['ville'];
            $dateEmbauche=$LeVisiteur['dateEmbauche'];
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
            $idSecteur="";
        }
            echo'<div class="container">
                <div class="row centered-form">        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Enregistrer un visiteur médical</h3>
                        </div>
                            <div class="panel-body">';
                            
                             if (isset($_GET['UpdtId'])){
                                $id=$_GET['UpdtId'];
                                echo'<form method="POST" action="index.php?uc=visiteurs&action=NewVisiteur&UpdtId='.$id.'">';
                            }
                             else{
                                echo'<form method="POST" action="index.php?uc=visiteurs&action=NewVisiteur">';
                            } 
                                 echo'<div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Nom" id="nom" class="form-control input-sm" placeholder="Nom" value="'.$nom.'" required>
                                         </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Prenom" id="prenom" class="form-control input-sm" placeholder="Prenom" value="'.$prenom.'" required>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="Adresse" id="adresse" class="form-control input-sm" placeholder="Adresse" value="'.$adresse.'" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cp" id="cp" class="form-control input-sm" placeholder="Code Postal" value="'.$cp.'" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="ville" id="ville" class="form-control input-sm" placeholder="Ville" value="'.$ville.'" required>
                                         </div>
                                     </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="dateEmbauche" id="dateEmbauche" class="form-control input-sm" placeholder="Date d embauche" value="'.$dateEmbauche.'" required>
                                         </div>
                                     </div>
                               
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="idSecteur" id="idSecteur" class="form-control input-sm" placeholder="Numéro de secteur" value="'.$idSecteur.'" required>
                                         </div>'                            
                             ?>                           
                            </div>
                        </div>
                                
                                <?php if (isset($_GET['UpdtId']))
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
                <th class="idSecteur">Secteur HT</th>
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
                    <td><?php echo "<a href='index.php?uc=visiteurs&action=DelVisiteur&DelId=$LeId' title='Delete'><img src='./images/Delete_icon.png' alt='Delete' /></a>
                    <a href='index.php?uc=visiteurs&action=updtVisiteur&UpdtId=$LeId' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>"
                    ?></td>
                </tr>
                 <?php
			}
        ?>
    </table>
</div>
