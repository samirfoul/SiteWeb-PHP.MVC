<?php 
namespace App\Model;

class Tel
{
    // id`, `marque_id`, `ram_id`, `os_id`, `name`, `description`, `image`, `ref`, `prix_unit`, `quantit`, `tva_id`, `ecran
    private $id;
    private $marque_id;
    private $ram_id;
    private $os_id;
    private $name;
    private $description;
    private $image;
    private $ref;
    private $prix_unit;
    private $quantit;
    private $tva_id;
    private $ecran;



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of marque_id
     */ 
    public function getMarque_id()
    {
        return $this->marque_id;
    }

    /**
     * Set the value of marque_id
     *
     * @return  self
     */ 
    public function setMarque_id($marque_id)
    {
        $this->marque_id = $marque_id;

        return $this;
    }

    /**
     * Get the value of ram_id
     */ 
    public function getRam_id()
    {
        return $this->ram_id;
    }

    /**
     * Set the value of ram_id
     *
     * @return  self
     */ 
    public function setRam_id($ram_id)
    {
        $this->ram_id = $ram_id;

        return $this;
    }

    /**
     * Get the value of os_id
     */ 
    public function getOs_id()
    {
        return $this->os_id;
    }

    /**
     * Set the value of os_id
     *
     * @return  self
     */ 
    public function setOs_id($os_id)
    {
        $this->os_id = $os_id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of ref
     */ 
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set the value of ref
     *
     * @return  self
     */ 
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get the value of prix_unit
     */ 
    public function getPrix_unit()
    {
        return $this->prix_unit;
    }

    /**
     * Set the value of prix_unit
     *
     * @return  self
     */ 
    public function setPrix_unit($prix_unit)
    {
        $this->prix_unit = $prix_unit;

        return $this;
    }

    /**
     * Get the value of quantit
     */ 
    public function getQuantit()
    {
        return $this->quantit;
    }

    /**
     * Set the value of quantit
     *
     * @return  self
     */ 
    public function setQuantit($quantit)
    {
        $this->quantit = $quantit;

        return $this;
    }

    /**
     * Get the value of tva_id
     */ 
    public function getTva_id()
    {
        return $this->tva_id;
    }

    /**
     * Set the value of tva_id
     *
     * @return  self
     */ 
    public function setTva_id($tva_id)
    {
        $this->tva_id = $tva_id;

        return $this;
    }

    /**
     * Get the value of ecran
     */ 
    public function getEcran()
    {
        return $this->ecran;
    }

    /**
     * Set the value of ecran
     *
     * @return  self
     */ 
    public function setEcran($ecran)
    {
        $this->ecran = $ecran;

        return $this;
    }
}
