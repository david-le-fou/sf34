<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table6
 *
 * @ORM\Table(name="table6")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\table6Repository")
 */
class table6
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
     * 
     * @Orm\ManyToMany(targetEntity="TestBundle\Entity\table5")
     * 
     * @ORM\JoinTable(name="table6_table5")
     */
    private $id_t5;

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
     * @return table6
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
     * Constructor
     */
    public function __construct()
    {
        $this->id_t5 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idT5
     *
     * @param \TestBundle\Entity\table5 $idT5
     *
     * @return table6
     */
    public function addIdT5(\TestBundle\Entity\table5 $idT5)
    {
        $this->id_t5[] = $idT5;

        return $this;
    }

    /**
     * Remove idT5
     *
     * @param \TestBundle\Entity\table5 $idT5
     */
    public function removeIdT5(\TestBundle\Entity\table5 $idT5)
    {
        $this->id_t5->removeElement($idT5);
    }

    /**
     * Get idT5
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdT5()
    {
        return $this->id_t5;
    }
}
