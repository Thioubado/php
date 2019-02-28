<?php
$error = null;
$success = null;
$email = null;
if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $file = __DIR__ .DIRECTORY_SEPARATOR . 'emails'.DIRECTORY_SEPARATOR . date('y-m-d');
        file_put_contents($file, $email.PHP_EOL, FILE_APPEND);
        $success = "Votre email est buien valide";
    }
    else{
        $error = "Email invalide";
    }
}




require 'header.php';

?>
<h1>S'insdcrire à la newsletter</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum saepe blanditiis dolores, perspiciatis explicabo debitis sit, inventore veritatis, fugiat mollitia vitae. Aliquid aut suscipit placeat ex porro nemo at explicabo?</p>

<?php if($error): ?>
    <div class="alert alert-danger">
        <?php echo $error; ?>
    </div>
<?php endif ?>

<?php if($success): ?>
    <div class="alert alert-success">
        <?php echo $success; ?>
    </div>
<?php endif ?>

<form action="newsletters.php" method="POST" class="form-inline">

    <div class="form-group">
        <input type="email" name="email" placeholder="Entrer votre email" class="form-control" value="<?php echo htmlentities($email) ;?>">
    </div>
    <button type="submit" class="btn btn-primary"
    >S'inscrire</button>

</form>