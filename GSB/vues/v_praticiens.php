<div id="contenu">
    <h2>Praticiens</h2>
   <?php
    if (isset($_GET['UpdtCode'])) 
        {
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
       
        if (isset($_GET['UpdtCode'])){
            $code=$_GET['UpdtCode'];
            echo'<form method="POST" action="index.php?uc=praticiens&action=AddPraticiens&UpdtCode='.$code.'">';
        }
        else{
            echo'<form method="POST" action="index.php?uc=praticiens&action=AddPraticiens">';
        }
    
    echo'<input type="text" name="Contact" placeholder="Contact" value="'.$Contact.'" required></input>
    <input type="text" name="Telephone" placeholder="Telephone"  value="'.$Telephone.'" required></input>
    <input type="text" name="RaisonSociale" placeholder="Raison Sociale" value="'.$RaisonSociale.'" required></input>
    <input type="text" name="Adresse" placeholder="Adresse" value="'.$Adresse.'" required></input>
    <input type="text" name="CoeffNot" placeholder="Coefficient de notoriété" value="'.$CoeffNot.'" required></input>
    <input type="text" name="CoeffConf" placeholder="Coefficient de confiance" value="'.$CoeffConf.'" required></input>
        <select name="Specialite">'
             ?><?php
                foreach ($lesSpecialites as $laSpecialite){
                    if (isset($_GET['UpdtCode'])){
                        echo '<option value= '.$laSpecialite['idSpecialite'].' selected > '.$laSpecialite['nomSpecialite'].' </option>';
                    }
                    else{
                        echo '<option value= '.$laSpecialite['idSpecialite'].' > '.$laSpecialite['nomSpecialite'].' </option>';
                    }
                    
                }
                if (isset($_GET['UpdtCode'])){
                echo'<option selected value="'.$IdSpecialite.'">'.$Specialite.'</option>';
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
          foreach ( $lesPraticiens as $unPraticien ) 
		  {
			$DgvCode = $unPraticien['Code'];
			$DgvContact = $unPraticien['Contact'];
			$DgvTelephone = $unPraticien['Telephone'];
            $DgvRaisonSociale = $unPraticien['Raison_sociale'];
            $DgvAdresse = $unPraticien['Adresse'];
            $DgvCoeffNot = $unPraticien['Coef_notoriete'];
            $DgvCoeffConf = $unPraticien['coef_confiance'];
            $DgvSpecialite = $unPraticien['nomSpecialite'];
        
                ?>
                <tr>
                    <td><?php echo $DgvCode ?></td>
                    <td><?php echo $DgvContact ?></td>
                    <td><?php echo $DgvTelephone ?></td>
                    <td><?php echo $DgvRaisonSociale ?></td>
                    <td><?php echo $DgvAdresse ?></td>
                    <td><?php echo $DgvCoeffNot ?></td>
                    <td><?php echo $DgvCoeffConf ?></td>
                    <td><?php echo $DgvSpecialite ?></td>
                    <td>
                    <?php echo "<a href='index.php?uc=praticiens&action=DelPraticiens&DelCode=$DgvCode' title='Delete'><img src='./images/Delete_icon.png' alt='Delete' /></a>
                    <a href='index.php?uc=praticiens&action=UpdtPraticiens&UpdtCode=$DgvCode' title='Update'><img src='./images/Update_icon.png' alt='Update' /></a>"
                    ?>
                   </td>
                 </tr>
                 <?php
			}
		?>
    </table>
</div>
