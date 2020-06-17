<?php

namespace DonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DonEspece
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="DonBundle\Repository\DonEspeceRepository")
 */
class DonEspece
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
     * @var int
     *
     * @ORM\Column(name="montantDon", type="integer")
     */
    private $montantDon;

    /**
     * @var string
     *
     * @ORM\Column(name="cibleDon", type="string", length=255, nullable=true)
     */
    private $cibleDon;

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
     * @return DonEspece
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
     * @return DonEspece
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
     * Set montantDon
     *
     * @param integer $montantDon
     *
     * @return DonEspece
     */
    public function setMontantDon($montantDon)
    {
        $this->montantDon = $montantDon;

        return $this;
    }

    /**
     * Get montantDon
     *
     * @return int
     */
    public function getMontantDon()
    {
        return $this->montantDon;
    }

    /**
     * Set cibleDon
     *
     * @param string $cibleDon
     *
     * @return DonEspece
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
     * Set dateDon
     *
     * @param \DateTime $dateDon
     *
     * @return DonEspece
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

