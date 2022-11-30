<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';
include_once ROOT .  'views/include/navbar.php';

?>
<div class="container">
    <div>
        <?php
        foreach($errors as $message) :?>
        <div class="alert alert-danger" style="text-align:center;" role="alert">
            <?= $message?>
        </div>

            <?php endforeach ?>
    </div>
    <form action="<?= URL ?>src/Controller/AuthController.php?param=register" method="post"  class="form-control">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
        <br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
        <br>
        <label for="adresse">adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control">
        <br>
        <label for="ville">ville</label>
        <input type="text" name="ville" id="ville" class="form-control">
        <br>
        <label for="cp">cp</label>
        <input type="text" name="cp" id="cp" class="form-control" >
        <br>
        <label for="mail">mail</label>
        <input type="text" name="email" id="email" class="form-control" >
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control">
        <br>
        <label for="role">role</label>
        <input type="text" name="role" id="role" class="form-control" >
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
</div>
<?php
    include_once ROOT . 'views/include/footer.php';
?>