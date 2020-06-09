<?php

namespace AideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aide
 *
 * @ORM\Table(name="aide")
 * @ORM\Entity(repositoryClass="AideBundle\Repository\AideRepository")
 */
class Aide
{
    /**
     * @var int
     *
     * @ORM\Column(name="aideId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     *
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionAide", type="string", length=255)
     */
    private $descriptionAide;
    /**
     * @var string
     *
     * @ORM\Column(name="Longitude", type="string", length=255)
     */
    private $Longitude;
    /**
     * @var string
     *
     * @ORM\Column(name="Latitude", type="string", length=255)
     */
    private $Latitude;

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="localisationAide", type="string", length=255)
     */
    private $localisationAide;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieAide", type="string", length=255)
     */
    private $categorieAide;
    /**
     * @var int
     *
     * @ORM\Column(name="statutAide", type="integer")
     */
    private $statutAide;

    /**
     * @return int
     */
    public function getStatutAide()
    {
        return $this->statutAide;
    }

    /**
     * @param int $statutAide
     */
    public function setStatutAide($statutAide)
    {
        $this->statutAide = $statutAide;
    }



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
     * Set descriptionAide
     *
     * @param string $descriptionAide
     *
     * @return aide
     */
    public function setDescriptionAide($descriptionAide)
    {
        $this->descriptionAide = $descriptionAide;

        return $this;
    }

    /**
     * Get descriptionAide
     *
     * @return string
     */
    public function getDescriptionAide()
    {
        return $this->descriptionAide;
    }

    /**
     * Set localisationAide
     *
     * @param string $localisationAide
     *
     * @return aide
     */
    public function setLocalisationAide($localisationAide)
    {
        $this->localisationAide = $localisationAide;

        return $this;
    }

    /**
     * Get localisationAide
     *
     * @return string
     */
    public function getLocalisationAide()
    {
        return $this->localisationAide;
    }

    /**
     * Set categorieAide
     *
     * @param string $categorieAide
     *
     * @return aide
     */
    public function setCategorieAide($categorieAide)
    {
        $this->categorieAide = $categorieAide;

        return $this;
    }

    /**
     * Get categorieAide
     *
     * @return string
     */
    public function getCategorieAide()
    {
        return $this->categorieAide;
    }
}

