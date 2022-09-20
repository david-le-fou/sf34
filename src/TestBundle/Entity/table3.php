<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table3
 *
 * @ORM\Table(name="table3")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\table3Repository")
 */
class table3
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
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\table1")
     */
    private $id_t1;


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
     * @return table3
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
     * Set idT1
     *
     * @param \TestBundle\Entity\table1 $idT1
     *
     * @return table3
     */
    public function setIdT1(\TestBundle\Entity\table1 $idT1 = null)
    {
        $this->id_t1 = $idT1;

        return $this;
    }

    /**
     * Get idT1
     *
     * @return \TestBundle\Entity\table1
     */
    public function getIdT1()
    {
        return $this->id_t1;
    }
}
