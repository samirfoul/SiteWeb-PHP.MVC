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

<div class="container">
    <form action="<?= URL ?>src/Controller/AuthController.php?param=login" method="post"  class="form-control"> 
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control">
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control">
        <br><br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

<?php
    include_once ROOT . 'views/include/footer.php';
?>