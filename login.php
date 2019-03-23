<?php
$erreur = null;
if(!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])){
    if($_POST['pseudo'] === 'John' && $_POST['motdepasse'] === 'Doe'){
        //on connecte l'utilisateur
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /php/dashboard.php');
    }
    else{
        $erreur = 'Identifiants incorrects';
    }
}

require 'auth.php';
require 'header.php';
?>
<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?php echo $erreur; ?>
    </div>

<?php endif ?>

<form action="" method="POST">
    <div class="form-group">
        <input class="form-control" type="text" name="pseudo" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="motdepasse" placeholder="Votre mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>