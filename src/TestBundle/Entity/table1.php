<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table1
 *
 * @ORM\Table(name="table1")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\table1Repository")
 */
class table1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2", type="string", length=255)
     */
    private $nom2;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return table1
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom2
     *
     * @param string $nom2
     *
     * @return table1
     */
    public function setNom2($nom2)
    {
        $this->nom2 = $nom2;

        return $this;
    }

    /**
     * Get nom2
     *
     * @return string
     */
    public function getNom2()
    {
        return $this->nom2;
    }
}

