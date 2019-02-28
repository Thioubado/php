<?php 
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'text.odt';
//file_put_contents($fichier, ' Marc comment ça va ?', FILE_APPEND);
echo $ressource = fopen($fichier, 'r+');
