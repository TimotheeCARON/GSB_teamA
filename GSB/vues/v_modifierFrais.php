<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<div id="contenu">
      <h2>Modifier les tarif des forfaits</h2>
         
      <form method="POST"  action="index.php?uc=modifierforfait&action=MAJmodifierforfait">
        <div class="corpsForm">

                <fieldset>
                  <legend>NOTRE PROJET
                  </legend>
                    <?php
                      foreach ($lesMontantFrais as $unFrais)
                      {

                    ?>
                    <p>
                        <label><?php echo $unFrais['libelle'] ?></label>
                        <input type="text" id="idFrais" name="MAJlesFrais[<?php echo $unFrais['id']?>]" size="10" maxlength="5" value="<?php echo $unFrais['montant']?>" >
                    </p>

            





                </fieldset>
        </div>
        <div class="piedForm">
        <p>
          <input id="ok" type="submit" value="Valider" size="20" />
          <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 
        </div>
        
      </form>