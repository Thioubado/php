<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LE formulaire en PhP</title>
</head>
<body>
    <h1>Le formulaire en PhP</h1>

     <!--<form method="POST" action="">
        Nom:<input type="text" name="nom" size="12"><br>
        Prenom:<input type="text" name="prenom" size="12"><br>
        <input type="submit" value="ok">
    </form>
  <?php 
        /*$prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        print("<center>Bonjour $prenom $nom<center>");*/
    ?>-->

    <br>
    <form method="POST" action="">
        Titre:<input type="text" name="titre" size="12"><br>
        URL:<input type="text" name="url" size="12" value="http://">
        <input type="submit" value="ok">

    </form>
    <?php
        $titre = $_POST['titre'];
        $url = $_POST['url'];

        if(empty($titre)){
            print("<center>Le '<b>titre</b>' est vide</center>");
            exit();
        }

        //Vérification pour voir si l'url est écrit en minuscule
        $verif_url = strtolower($url);
        $verif_url = substr("$verif_url", 0, 7);
        //vérif des 7 premiers caractères
        if($verif_url != "http://"){
            print("<center>L'URL doit commencer par <b>http://</b></center>");
            exit();
        }
        else{
            print("$titre : 
            <a href =\"$url\">$url</a>");
        }
    ?>
</body>
</html>