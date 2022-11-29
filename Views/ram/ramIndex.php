<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';


include_once ROOT . 'views/include/header.php';
include_once ROOT . 'views/include/navbar.php';

?>

<!-- code HTML -->
<h1> je suis dans la list_user</h1>
<div class="container">
    <h3>Liste user</h3>
    <a class="btn btn-primary" href="<?= URL ?>src/Controller/RamController.php?param=ajouter_user">Ajouter ram</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">img</th>
      <th scope="col">description</th>
      <th scope="col">suprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($rams as $ram) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $ram->name ?></td>
      <td><?= $ram->img ?></td>
      <td><?= $ram->description ?></td>
      <td ><a href="<?= URL ?>src/Controller/RamController.php?param=delete_ram&id=<? $ram->id ?>" class="btn btn-danger">suprimer</a></td>

    </tr>
    <?php endforeach ?>    
  </tbody>
</table>


</div>

<!-- fin code HTML -->
<?php
    include_once ROOT . 'views/include/footer.php';
?>