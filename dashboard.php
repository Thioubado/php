<?php
require 'header.php';
$annee = (int)date('Y');
$annee_selection = empty($_GET['annee']) ? $annee : (int)$_GET['annee'];
$mois_selection = empty($_GET['mois']) ? date('m') : $_GET['mois'];

if($annee_selection && $mois_selection){
    $total = nombre_vue_mois($annee_selection, $mois_selection);
}
else{
    $total = nombre_vue();
}

$mois = [
    '01' => 'Janvier',
    '02' => 'Février',
    '03' => 'Mars',
    '04' => 'Avril',
    '05' => 'Mai',
    '06' => 'Juin',
    '07' => 'Juillet',
    '08' => 'Août',
    '09' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre'
];


function nombre_vue_mois(int $annee, int $mois): int {
    $mois = str_pad($mois, 2, '0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'cli'.DIRECTORY_SEPARATOR.'compteur-'.$annee.'-'.$mois .'_' . '*';
    $fichiers = glob($fichier);
    $total = 0;/*nombre_vue();* si je remplace le 0 par nombre_vue_mois ça m'affiche le nombre total de vue;*/
    foreach($fichiers as $fichier){
        $total += (int) file_get_contents($fichier);
    }
    
    return $total;
}

?>


<div class="row">
    <div class="col-md-4">
        <div class="listgroup">
            <?php for($i=0; $i<5; $i++): ?>
            <a class="list-group-item <?php echo $annee - $i === $annee_selection ? 'active' : ''; ?> " href="dashboard.php?annee=<?php echo $annee - $i ;?>"><?php echo $annee -$i ?></a>
            <?php if ($annee - $i === $annee_selection): ?>
                <div class="list-group">
                    <?php foreach ($mois as $numero => $nom): ?>
                        <a href="dashboard.php?annee=<?php echo $annee_selection ?>&mois=<?php echo $numero ?>" class="list-group-item <?php echo $numero === $mois_selection ? 'active' : '' ?>"><?php echo $nom ?></a>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card_body">
            <strong style="font-size: 3em"><?php echo $total; ?></strong><br>visite<?= $total > 1 ? 's' : ''?> 
    </div>
</div>
    </div>
</div>