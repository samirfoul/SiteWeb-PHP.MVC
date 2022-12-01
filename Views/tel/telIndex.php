<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';


include_once ROOT . 'views/include/header.php';
include_once ROOT . 'views/include/navbar.php';

$indice =1; 
?>
<!-- code HTML -->

<div class="container">
    <h3>Liste telephone</h3>
    <br>
    <!-- <a class="btn btn-primary" href="<?= URL ?>src/Controller/UserController.php?param=ajouter_user">Ajouter user</a> -->
    <br><br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">déscription</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tels as $tel) : ?>
    <tr>
      <th scope="row" ><?php echo $indice ; $indice++ ?></th>
      <td><?= $tel->name ?></td>
      <td><?= $tel->description ?></td>
      <td><?= $tel->image ?></td>
      <td>
        <!-- <a href="<?= URL ?>src/Controller/UserController.php?param=delete_user&id=<?= $user->id ?>" class="btn btn-danger"><i class="fa-solid fa-trash"> suprimer</i></a>
        <a href="<?= URL ?>src/Controller/UserController.php?param=detail_user&id=<?= $user->id ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"> editer</i></a>
        <a href="<?= URL ?>src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>" class="btn btn-dark"><i class="fa-solid fa-pen-to-square"></i> editer</a> -->
    
    </td>
    </tr>
    <?php endforeach ?>    
  </tbody>
</table>


</div>

<!-- fin code HTML -->
<?php
    include_once ROOT . 'views/include/footer.php';
?>