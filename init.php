<?php
const ROOT = __DIR__ . '/';


const URL = 'http://localhost:3003/';


session_start();

function verif_role($role){



   if(isset($_SESSION['user'])){
        if($_SESSION['user']->role !== $role){
            header("location:http://localhost:3003/" );
        }
        
    }else{
       header("location:http://localhost:3003/");
   }
};