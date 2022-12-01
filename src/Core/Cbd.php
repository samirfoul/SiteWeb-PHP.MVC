<?php
namespace App\Core;

use PDO;

class Cbd 
{
    private $dsn = "mysql:host=localhost;dbname=wf3_commerce";
    private $userName = "root";
    private $password = "";

    public function getConnect()
    {
        $pdo = new PDO ($this->dsn, $this->userName, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        return $pdo; 
    }


    public function netoiFormulaire($string)
    {
        $string = trim($string);
        $string = stripslashes($string); 
        filter_var($string, FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    [
        'flags' => FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_STRIP_BACKTICK
    ]);
        return $string;
    }

    // function pour ajouter un enregistrement
    public function add(array $tab)
    {


        $champs = [];
        $valeurs = [];
        $valeurs_bind = [];

        // On boucle pour "éclater le tableau"
        foreach ($tab as $champ => $valeur) {
            $champs[] = "$champ";
            $valeurs[] = ' ? ';
            $valeurs_bind []= $this->netoiFormulaire($valeur) ;
        }
        $string_colonne = implode( ' , ' , $champs);
        $string_valeur =  implode( ' , ' , $valeurs);


        $sql = " INSERT INTO user ( " . $string_colonne  .  " ) VALUES (" . $string_valeur .")" ;



        return   $this->requette($sql , $valeurs_bind) ;

    }

    /**
     * Sélection de tous les enregistrements d'une table
     * @return array Tableau des enregistrements trouvés
     */
    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id = $id";
        $stmt = $this->getConnect()->query($sql);

        return $stmt;
    }
    // function pour update les modification
    public function edit(array $tab, int $id, $table)
    {
        $champs = [];
        $valeurs = [];
        $valeurs_bind = [];

        // On boucle pour "éclater le tableau"
        foreach ($tab as $champ => $valeur) {
            $champs[] = "$champ = ? ";

            $valeurs_bind []= $this->netoiFormulaire($valeur) ;
        }
        $stringSet = implode(',' , $champs);

        $sql = "UPDATE $table SET $stringSet WHERE id = $id";

        return   $this->requette($sql , $valeurs_bind) ;
    }



    public function requette(string $sql, array $attributs = null)
    {
        // On récupère l'instance de Db
        $pdo = $this->getConnect();

        // On vérifie si on a des attributs
        if ($attributs !== null) {
            // Requête préparée
            $query = $pdo->prepare($sql);
            $query->execute($attributs);
            return $query;
        } else {
            // Requête simple
            return $this->db->query($sql);
        }
    }


    /**
     * Sélection de tous les enregistrements d'une table
     * @return array Tableau des enregistrements trouvés
     */
    public function findAll($table)
    {
        $sql = "SELECT * FROM $table";
        $stmt = $this->getConnect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

}

