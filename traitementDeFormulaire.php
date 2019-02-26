    <?php
        $aDeviner = 150;
        $title = 'formulaire';
        $nav = 'formulaire';
        
        $aDeviner = 150;
        $erreur = null;
        $success = null;
        $value = null;
        if(isset($_GET['chiffre'])){
            if($_GET['chiffre'] > $aDeviner){
                $erreur = "Votre chiffre est trop grand";
            }
            elseif($_GET['chiffre'] < $aDeviner){
                $erreur = "Votre chiffre est trop petit";
            }
            else{
                $success = "Bravo ! Vous avez deviné le chiffre ";
            }
            $value = (int)$_GET['chiffre'];
        }


        require 'header.php';
    ?>
    

        
    <?php if($erreur): ?>
        <div class="alert alert-danger">
            <?php echo $erreur ?>
        </div>
    <?php elseif($success): ?>
        <div class="alert alert-success">
            <?php $success ?>
        </div>
    <?php endif ?>
   

    <form action="traitementDeFormulaire.php" method = "GET">
        <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value ="<?php echo $value ;?>">
        <button type="submit">Deviner</button>

    </form>