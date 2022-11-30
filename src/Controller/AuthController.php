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
$errors = [];


switch ($param){
    
    case 'register';
    if($_POST){
        extract($_POST);
        if(!$nom){
            $errors [] = 'Etrez un nom valide';
        }
        if(!$prenom){
            $errors [] = 'Etrez un prenom valide';
        }
        if($email){
            $result = $userCrud->findByEmail($email);
            if($result){
                $errors [] ='email non valide';
            }
        }else{
            $errors [] ='entrez email';

        }
        if(!$email){
            $errors [] = 'Etrez un email valide';
        }
        if($password){
            $mdp_hash = password_hash($password, PASSWORD_DEFAULT);
            $_POST['password']=$mdp_hash;
        }else{
            $errors [] = 'password no valide';
        }
        if(empty($errors)){
            $userCrud->addUser($_POST);
            $path = URL . 'index.php';
            header("location: $path");  
        }
        
    }

    include_once ROOT . 'views/auth/register.php';

    break;


        case 'login':
            if($_POST){
                extract($_POST);

                if($password){
                    // $mdp_hash = password_hash($password , PASSWORD_DEFAULT);
                }else{
                    $errors [] ='email ou password non valide';
                }
                $user = $userCrud->findByEmail($email);

                if($user){

                    $mdp_user = $user->password ;

                    if(password_verify($password , $mdp_user)){

                        $_SESSION['user']=$user;
                        $url = URL . 'index.php';
                         header("location: $url");  

                    }else{
                        $errors [] ='email ou password non valide';
                    }

                }else{

                    $errors [] ='email ou password non valide';
                    
                }
            }
            include_once ROOT . 'views/auth/login.php';
            break;
            
            case 'logout';
            unset($_SESSION['user']);
            $url = URL. 'index.php';
            header("location: $url");
            break;
}