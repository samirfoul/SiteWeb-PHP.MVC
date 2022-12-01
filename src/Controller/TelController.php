<?php

use App\Autoload;
use App\Model\TelCrud;
use App\Model\UserCrud;


$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Autoload.php';

Autoload::register();


verif_role ('admin');
if ($_GET['param']){
        $param = $_GET['param'];
}
$telCrud = new TelCrud();
switch($param){

    case 'liste_tel';
    $tels = $telCrud->findAll();
        include_once ROOT . 'views/tel/telIndex.php';

        break; 
    case 'ajouter_tel';
    $tels = $telCrud->findAll();
        include_once ROOT . 'views/tel/telIndex.php';

        break; 
}