<?php

use App\Autoload;
use App\Model\UserCrud;


$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Autoload.php';

Autoload::register();

if ($_GET['param']){
        $param = $_GET['param'];
}

$userCrud = new UserCrud();

switch($param){

    case 'liste_user';
    $users = $userCrud->finAll();
        include_once ROOT . 'views/user/userIndex.php';

        break; 

    case 'ajouter_user';
    if($_POST){
        $mdp_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['password']=$mdp_hash;
    
            
        
        $userCrud->addUser($_POST);
        header("location: UserController.php?param=liste_user");
        }
    include_once ROOT . 'views/user/ajouterUser.php';
        break;

    case 'delete_user' :
        $id = $_GET['id'];
        $userCrud->delete($id);
        header("location: UserController.php?param=liste_user");
        break;

        case 'detail_user':
            $id = $_GET['id'];
            $user= $userCrud->find($id);


            include_once ROOT . 'views/user/detailUser.php';
            break;

            case 'edit_user':
                $id = $_GET['id'];
                $user = $userCrud->find($id);
                if($_POST){
                    $userCrud->edit($id , $_POST);
                    header("location: UserController.php?param=liste_user");
                }
                include_once ROOT . 'views/user/editUser.php';
                break ;
}
