<?php

require 'header.php';
$annees           = (int) date('Y');
$annees_selection = empty($_GET['annee']) ? null : (int) $_GET['annee'];
$mois_selection   = empty($_GET['mois']) ? null : (int) $_GET['mois'];

echo '<hr>
<h1>
</h1>Salut Momo: Ecris ICI qd tu es là ! :-)<br>
- ok
- regarde, g mis le cs-fixer... Va au début de la ligne 33 et fais 4 fois tabulation et on attend, tu va voir.... Tu as vu, le VSC a re-ranger bien l\'alignement des variables
- oui j\'ai vu
- Autre chose: Regarde je fais plein d\'espace et on attends 2-3 secondes...
Pareil ! Le script a tout re ranger bien :-) !
- oui c\'est cs-fixer !
-ce truc est puissant c\'est une affaire de fou
- Oui, bon regardons tes variables (juste toi, faut faire F5 qd tu veux voir sur la fenetre ngrok)....
- Ok mais une petite question comment tu as fait pour trouver cs-fixer? 
- Lors d\'un tuto, g vu un mec l\'utiliser... Ensuite: Github cs-fixer dans google
- Ok je vois
- Bien, donc, observons les vaiables...:!d'
</h1>
<hr>';

var_dump($annees_selection, $mois_selection); // Cette ligne noous montre ce qu'elles contiennent
// on voit que la permière est à null et la seconde contient 3
// Donc, null rend false la condition dans tous les k avec un &&
// S'il fait super bon && Quoi qu'il arrive, je n'irai pas à la place
//  Alors, je vais à la plage
// Bin le gars, il ira pas se baigner !!! Jamais
// Là, c pareil
// Pour que cette condition soit vrai il faut que les 2 parties retournent vrai (ou quelque chose)
// Donc, faut surveiller $annees_selection, elle est à NULL et ne devrait certainement pas y être, en tous k, pas tout le temps...
// C'est bon, je te laisse 'creuser' :) ?
// D'aacord je comprends mieux 
// Parfait, alors, je te laisse creuser la question pour que ça marche comme tu veux, moi, je push ce fichier tel qu'il est là, et juste un dble-clic dans GK te le donne instantannément dans ton VSC...

if ($annees_selection && $mois_selection) {
    echo '<h1>Cette condition semble être jamais vraie</h1>';
    $total = nombre_vue_mois($annees_selection, $mois_selection);
} else {
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
    '12' => 'Décembre',
];
function nombre_vue_mois(int $annees, int $mois)
{
    $mois    = str_pad($mois, 2, '0');
    $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'cli'.DIRECTORY_SEPARATOR.'compteur-'.$annees.'-'.$mois;
    var_dump($fichier);
    exit();
}
?>

<div class="row">

    <div class="col-md-4">
        <ul class="list-group">
                <?php for ($i = 0; $i < 5; ++$i) {
    ?>
                    <a class="list-group-item <?php echo $annees - $i === $annees_selection ? 'active' : ''; ?>" href="dashboard.php?annee=<?php echo $annees - $i; ?>">
                        <?php echo $annees - $i; ?>
                    </a>
                    <?php if ($annees - $i === $annees_selection) {
        ?>
                        <div class="list-group">
                            <?php foreach ($mois as $numero => $nom) {
            ?>
                                <a class="list-group-item" href="dashboard.php?annee=<?php $annees_selection; ?>&mois=<?php echo $numero; ?> " >
                                    <?php echo $nom; ?>
                                </a>
                                
                            <?php
        } ?>
                        </div>
                    <?php
    } ?>
                <?php
} ?>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <strong><?php echo $total; ?></strong><br> visite<?php if ($total > 1) {
        ?>s au total <?php
    } ?>
            </div>
        </div>
    </div>
</div>