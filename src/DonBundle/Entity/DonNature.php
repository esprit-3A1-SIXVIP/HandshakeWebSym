<?php

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonNature
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="DonBundle\Repository\DonNatureRepository")
 */
class DonNature
{
    /**
     * @var int
     *
     * @ORM\Column(name="donId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDon", type="string", length=255)
     */
    private $typeDon;

    /**
     * @var string
     *
     * @ORM\Column(name="cibleDon", type="string", length=255, nullable=true)
     */
    private $cibleDon;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleDonNature", type="string", length=255)
     */
    private $libelleDonNature;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieDonNature", type="string", length=255)
     */
    private $categorieDonNature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDon", type="date")
     */
    private $dateDon;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return DonNature
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set typeDon
     *
     * @param string $typeDon
     *
     * @return DonNature
     */
    public function setTypeDon($typeDon)
    {
        $this->typeDon = $typeDon;

        return $this;
    }

    /**
     * Get typeDon
     *
     * @return string
     */
    public function getTypeDon()
    {
        return $this->typeDon;
    }

    /**
     * Set cibleDon
     *
     * @param string $cibleDon
     *
     * @return DonNature
     */
    public function setCibleDon($cibleDon)
    {
        $this->cibleDon = $cibleDon;

        return $this;
    }

    /**
     * Get cibleDon
     *
     * @return string
     */
    public function getCibleDon()
    {
        return $this->cibleDon;
    }

    /**
     * Set libelleDonNature
     *
     * @param string $libelleDonNature
     *
     * @return DonNature
     */
    public function setLibelleDonNature($libelleDonNature)
    {
        $this->libelleDonNature = $libelleDonNature;

        return $this;
    }

    /**
     * Get libelleDonNature
     *
     * @return string
     */
    public function getLibelleDonNature()
    {
        return $this->libelleDonNature;
    }

    /**
     * Set categorieDonNature
     *
     * @param string $categorieDonNature
     *
     * @return DonNature
     */
    public function setCategorieDonNature($categorieDonNature)
    {
        $this->categorieDonNature = $categorieDonNature;

        return $this;
    }

    /**
     * Get categorieDonNature
     *
     * @return string
     */
    public function getCategorieDonNature()
    {
        return $this->categorieDonNature;
    }

    /**
     * Set dateDon
     *
     * @param \DateTime $dateDon
     *
     * @return DonNature
     */
    public function setDateDon($dateDon)
    {
        $this->dateDon = $dateDon;

        return $this;
    }

    /**
     * Get dateDon
     *
     * @return \DateTime
     */
    public function getDateDon()
    {
        return $this->dateDon;
    }
}

