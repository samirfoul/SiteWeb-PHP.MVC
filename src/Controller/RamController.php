<?php

use App\Autoload;
use App\Model\RamCrud;


$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Autoload.php';

Autoload::register();

if ($_GET['param']){
        $param = $_GET['param'];
}

$ramCrud = new RamCrud();

switch($param){

    case 'liste_user';
    $rams = $ramCrud->finAll();
        include_once ROOT . 'views/ram/ramIndex.php';

        break; 


    case 'ajouter_user';
    if($_POST){
        $ramCrud->addUser($_POST);
        header("location: RamController.php?param=liste_user");
    }
    include_once ROOT . 'views/ram/ajouterRam.php';
        break;


        case 'delete_ram' :
            $id = $_GET['id'];
            $ramCrud->delete($id);
            header("location: RamController.php?param=liste_user");
            break;
}