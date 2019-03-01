<?php
$age = null;

//-Persister la date de naissance dans un cookie 
if(!empty($_POST['birthday'])){

    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}


if(!empty($_COOKIE['birthday'])){
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}


require 'header.php';
?>


<?php if($age && $age >=18): ?>
    <h1>Du contenu réservé aux adultes</h1>

<?php elseif($age !== null) : ?>
    <div class="alert alert-danger">Vous n'avez pas l'âge requis pour accéder à ce contenu</div>

<?php else : ?>





<!-- -Demander à l'utilisateur sa date de naissance(select 2010-1919)-->
<form action="" method="POST">
    <div class="form-group">
        <label for="birthday">Section réservée pour les adultes, entrer votre année de naissance : </label>
        <select name="birthday" class="form-control" id="birthday">
            <?php for($i = 2010; $i > 1919; $i--) :?>
                <option value="<?php echo $i ;?>"><?php echo $i ; ?></option>
            <?php endfor ; ?>
        </select>
    </div>
    <button type="submit" class="form-control
    ">Envoyer</button>
</form>

<?php endif ?>

-Si l'utilisateur est assez âgé, lui montrer le contenu 
- sinon afficher un message d'erreur