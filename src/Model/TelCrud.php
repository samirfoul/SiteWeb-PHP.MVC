<?php 
namespace App\Model;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';

use PDO;
use App\Core\Cbd;


class TelCrud
{
    private $cbd;

    public function __construct()
    {
        $this->cbd = new Cbd();
    }
    
public function findAll(){

  return $this->cbd ->findAll('tel');
    
}


public function deleteTel($id){

    $this->cbd ->delete('tel', $id);
}



public function addTel($post){

    $this->cbd ->add($post);
}


public function editTel($post,$id){

    $this->cbd ->edit($post, $id, 'tel');
}
   
}