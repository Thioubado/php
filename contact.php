<?php 
$nav = 'contact';
$title = 'Nous contacter';
require_once 'config.php';
//$creneaux = creneaux_html(CRENEAUX);
date_default_timezone_set('Europe/Paris');
//Récupérer l'heure d'aujoiurd'hui
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N')- 1);
//Récupérer les créneaux d'aujourd'hui
$creneaux = CRENEAUX[$jour];
//Récupérer l'état d'ouverture du magasin
//var_dump($heure);
//var_dump($creneaux);
//var_dump(date('e'));
//exit();
$ouvert = in_creneaux($heure, $creneaux);

require 'header.php';

function creneaux_html (array $creneaux){
    if(empty($creneaux)){
        return 'Fermé';
    }
    $phrases = [];
    foreach($creneaux as $creneau){
        $phrases[] = " De <strong>{$creneau[0]}h</strong> à <strong>{$creneau[1]}h</strong>";
        
    }

    return 'Ouvert '.implode(' et ', $phrases);
}

function select(string $name, $value, array $options){
    $html_options = [];
    foreach($options as $k => $option){
        $attributes = $k == $value ? 'selected' : '';
        $html_options[] = "<option value= '$k' $attributes>$option</option>";
    }
return "<select class='form-control' name='$name'>" . implode($html_options)."</select>";
}

function in_creneaux(int $heure, array $creneaux): bool{
    foreach($creneaux as $creneau){
        $debut = $creneau[0];
        $fin = $creneau[1];
        if($heure >= $debut && $heure >=$fin){
            return true;
        }
    }
    return false;
}



?>

<div class="row">
    <div class="col-md-8">
        <h1>Nous contacter</h1>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nulla unde eos non laboriosam voluptatem impedit iusto quaerat quod facere architecto, placeat voluptate voluptatibus debitis eum voluptatum ea maxime doloribus?</p>
    </div>
    <div class="col-md-4">
        <h2>Horaires d'ouverture</h2>
        <?php if($ouvert): ?>
        <div class="alert alert-success">
            Le magasin sera ouvert
        </div>
        <?php else: ?>
        <div class="alert alert-danger">
            Le magasin est fermé
        </div>
        <?php endif ?>


        <div class="form-control">
            <?php echo select('jour', $jour, JOURS) ?> 
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name ="heure" value = <?php echo $heure; ?>>
        </div>
        <button class="btn btn-primary" type="submit">Voir si le magasin est ouvert</button>

        
            <!--<?php echo date('N'); ?> -->
            <ul>
                <?php foreach(JOURS as $k => $jour): ?>
                    <li <?php if($k +1 === (int)date('N')): ?> style="color:green" <?php endif ?>> 
                        <strong><?php echo $jour ?></strong>:
                        <?php echo creneaux_html(CRENEAUX[$k]); ?>
                        
                    </li>
                <?php endforeach ?>
            </ul>
    </div>
</div>




<?php require 'footer.php';?>