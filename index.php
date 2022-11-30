<?php

include_once 'init.php';
include_once 'views/include/header.php';
include_once 'views/include/navbar.php';



?>
<div class="container">
    <h1 class="text-center">Home , casse toi d'ici : <?php
    
    
    if(isset($_SESSION['user']->nom)){
        echo $_SESSION['user']->nom;
    }

    
    
    
    ?></h1>
    

</div>
<?php
    include_once 'views/include/footer.php';
?>