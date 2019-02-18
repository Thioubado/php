<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les structures de controle</title>
</head>
<body>
    <h1>Les structures de controle </h1>
    <?php
        $toto = 512;

        //on enchaine les controles ci-dessous

        if($toto > 0 && $toto <500){
            echo $toto. ' est compris entre 0 et 499';
        }
        elseif($toto >= 500 && $toto < 1000){
            echo $toto.' est compris entre 500 et 999';
        }
        else{
            echo $toto. ' est plus grand que 999';
        }

    
    ?>

    <h1>exemple 2</h1>

    <?php

        $medor = 'chien';

        if($medor == 'girafe'){
            echo 'Medor est un girafe';
        }
        elseif($medor == 'elephant'){
            echo 'Medor est un éléphant';
        }
        elseif($medor == 'souris'){
            echo 'Medor est une souris';
        }
        elseif($medor == 'chien'){
            echo 'Medor est un chien';
        }
        elseif($medor == 'chat'){
            echo 'Medor est un chat';
        }
        else{
            echo 'Peut être un hippopotame ? Qui sait ...';
        }

    ?>
    <h1>exemple 3</h1>
        <?php

        $nom = 'Momo';

        switch($nom){
            case 'Abou':
                echo 'Abou est un sociologue';
                break;
            case 'Aziz':
                echo 'Aziz est un grand informaticien';
                break;
            case 'Adou':
                echo 'Adou est mon père';
                break;
            case 'Yaye':
                echo 'Yaye est ma maman';
                break;
            case 'Banelle':
                echo 'Banelle est ma soeur';
                break;
            case 'Demba Coumbadio':
                echo 'Demba Coumbadio étudie à l\'université de St louis ';
                break;
            case 'Lio' :
                echo 'Lio m\'apprend la programmation';
                break;
            case 'Baby Yaye':
                echo 'Baby Yaye étudie à AFII';
                break;
            case 'Momo':
                echo 'Momo c\'est moi :)';
                break;
            default:
                echo 'Peut être un membre de ma famille? Qui sait';
        }


        ?>
        <h1>Les boucles </h1>
       <!-- <?php/*
            $chiffre = null;
            
            while($chiffre !== 12){
                $chiffre = (int)readline('Entrez une heure : ');
            }*/
        ?>-->

        <?php

            for($i = 0; $i < 10; $i++){
                echo "- $i <br>";
            }

            $notes = [10, 15, 20];
            for($i=0; $i<3; $i++){
                echo $notes[$i]."<br>";
            }

            $montants = [10000, 15000, 20000];
            foreach($montants as $montant){
                echo $montant.'<br>';
            }

            $eleves =[
                'CM2' => ['Momo', 'Demba Coumabadio', 'Abou', 'aziz'],
                'CM1' => ['Adou', 'Yaye', 'Malick', 'Ameth'],
                'CE2' => ['Thila', 'Papa', 'Moussa']
            ];

            foreach($eleves as $classe => $listEleves){
                echo "La classe $classe : <br>";
                foreach($listEleves as $eleve){
                    echo "- ".$eleve. '<br>';
                }
            }
            
           
            

        ?>

             <?php
           $chiffre = null;

           while($chiffre !== 12){
               $chiffre = (int)readline('Entrez une heure : ');
           }
           readline_add_history
       ?>

</body>
</html>