<?php


namespace App\Model;
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Core/Cbd.php';

use PDO;
use App\Core\Cbd;

class RamCrud
{
    private $cbd;

    public function __construct()
    {
        $this->cbd = new Cbd();
    }

    public function finAll()
    {
        $sql = "SELECT * FROM ram";
        $stmt = $this->cbd->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM ram WHERE id =$id";
        $stmt = $this->cbd->getConnect()->query($sql);
        
    }

    public function addUser($post){
        extract($post);
        $name = $this->cbd->netoiFormulaire($name);
        $img = $this->cbd->netoiFormulaire($img);
        $description = $this->cbd->netoiFormulaire($description);

        $sql= "INSERT INTO ram(name , img , description )
        VALUE (:name , :img , :description , )";



        $stmt = $this->cbd->getConnect()->prepare($sql);
        $stmt ->bindParam(':name' , $name);
        $stmt ->bindParam(':img' , $img);
        $stmt ->bindParam(':description' , $description);

        $stmt ->execute();
    }
}