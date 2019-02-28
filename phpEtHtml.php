<?php
$nav = 'index';
?>
<!--<pre>
<?php //print_r($_SERVER);?>
</pre>-->
<?php
$title = 'Page d\'accueil';
require 'header.php';
?>
    <div class="starter-template">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>
  <form action="newsletters.php" method="POST" class="form-inline">

    <div class="form-group">
        <input type="email" name="email" placeholder="Entrer votre email" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary"
    >S'inscrire</button>

</form>

<?php require 'footer.php';?>