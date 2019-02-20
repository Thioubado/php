<html>
<h1>Exemple 1 : </h1>
<?php
    $fp = fopen("data.txt", "r");
    $fdonnees = fgets($fp, 255);
    fclose($fp);
    //var_dump($fdonnees);


    echo "Le fichier data.txt contient : ".$fdonnees;
?>
<h1>Exemple 2 : </h1>
<?php
    //ouverture du fichier en lecture/écriture
    $fp = fopen("compteur.txt", "r+");
    //Récupération du nombre dans le fichier
    $nbvisites = fgets($fp, 11);
    //on incrémente le de visites(+1)
    $nbvisites++;
    //on se place en début de fichier
    fseek($fp, 0);
    //On écrit dans le fichier le nouveau nb
    fputs($fp, $nbvisites);
    fclose($fp);
    print("$nbvisites visiteurs");

?>
</html>