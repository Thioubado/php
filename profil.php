<?php
$nom = null;
if(!empty($_GET['action']) && $_GET['action'] === "deconnecter"){
    unset($_COOKIE['utilisateur']);
    setcookie('utilisateur', '', time() -10);
}
if(!empty($_COOKIE['utilisateur'])){
    $nom = $_COOKIE['utilisateur'];
}

if(!empty($_POST['nom'])){
    setcookie('usilisateur', $_POST['nom']);
    $nom = $_POST['nom'];
}

require "header.php";

?>
    <?php if($nom): ?>
        <h1>Bonjour <?php echo htmlentities($nom) ;?></h1>
        <a href="profil.php?action=deconnecter">Se déconnecter</a>
<?php else: ?>
    <form action="profil.php" method="POST" class="form-inline">
        <div class="form-group">
            <label>Votre nom :  
                <input type="text" name="nom" placeholder="Entrer votre nom" class="form-control">
            </label>
        </div>
        <button class="btn-primary">S'inscrire</button>
    </form>
<?php endif ?>