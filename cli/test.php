<?php 
/*$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'text.odt';
//file_put_contents($fichier, ' Marc comment ça va ?', FILE_APPEND);
echo $ressource = fopen($fichier, 'r+');*/

$date = new DateTime();
$date -> modify('+1 month');
echo $date -> format('d-m-Y');
//var_dump($date);

$date1 = '2019-01-01';
$date2 = '2019-04-01';

$d = new DateTime($date1);
$d2 = new DateTime($date2);
$diff = $d->diff($d2, true);
echo "il y a {$diff -> days} jours de différence";