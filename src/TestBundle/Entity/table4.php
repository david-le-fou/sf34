<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table4
 *
 * @ORM\Table(name="table4")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\table4Repository")
 */
class table4
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
     * @ORM\ManyToOne(targetEntity="TestBundle\Entity\table3")
     */
    private $id_t3;
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
     * @return table4
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
     * Set idT3
     *
     * @param \TestBundle\Entiry\table3 $idT3
     *
     * @return table4
     */
    public function setIdT3(\TestBundle\Entity\table3 $idT3 = null)
    {
        $this->id_t3 = $idT3;

        return $this;
    }

    /**
     * Get idT3
     *
     * @return \TestBundle\Entiry\table3
     */
    public function getIdT3()
    {
        return $this->id_t3;
    }
}
