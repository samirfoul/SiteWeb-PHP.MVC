<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';
include_once ROOT .  'views/include/navbar.php';

?>
<div class="container">
    <form action="<?= URL ?>src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>" method="post"  class="form-control">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $user->nom ?>">
        <br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="<?= $user->prenom ?>">
        <br>
        <label for="adresse">adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control" value="<?= $user->adresse ?>">
        <br>
        <label for="ville">ville</label>
        <input type="text" name="ville" id="ville" class="form-control" value="<?= $user->ville ?>">
        <br>
        <label for="cp">cp</label>
        <input type="text" name="cp" id="cp" class="form-control" value="<?= $user->cp ?>">
        <br>
        <label for="mail">mail</label>
        <input type="text" name="email" id="email" class="form-control" value="<?= $user->email ?>">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control" value="<?= $user->password ?>">
        <br>
        <label for="role">role</label>
        <input type="text" name="role" id="role" class="form-control" value="<?= $user->role ?>">
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
</div>
<?php
    include_once ROOT . 'views/include/footer.php';
?>