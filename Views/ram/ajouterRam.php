<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';
include_once ROOT . 'views/include/navbar.php';

?>

<div class="container">
    <form action="<?= URL ?>src/Controller/RamController.php?param=ajouter_user" method="post"  class="form-control">
        <label for="name">id</label>
        <input type="text" name="name" id="name" class="form-control">
        <br>
        <label for="img">img</label>
        <input type="text" name="img" id="img" class="form-control">
        <br>
        <label for="description">description</label>
        <input type="text" name="description" id="description" class="form-control">
        <br>
    
        <br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
</div>
<?php
    include_once ROOT . 'views/include/footer.php';
?>