<?php

namespace UserBundle\Entity;

/**
 * Droit
 */
class Droit
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $droit;

    /**
     * @var int
     */
    private $idUser;

    /**
     * @var string
     */
    private $type_droit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set droit
     *
     * @param string $droit
     *
     * @return Droit
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return string
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Droit
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
    /**
     * Get type_droit
     * @return string
     */
    public function getType_droit(){
        return $this->type_droit;
    }
    /**
     * Set type_droit
     */
    public function setType_droit($type_droit){
        $this->type_droit = $type_droit;
    }
}

