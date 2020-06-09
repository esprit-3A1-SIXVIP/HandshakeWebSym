<?php

namespace AideBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Beneficiaire
 *
 * @ORM\Table(name="beneficiaire")
 * @ORM\Entity(repositoryClass="AideBundle\Repository\BeneficiaireRepository")
 */
class Beneficiaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="beneficiaireId",type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $beneficiaireid;

    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     *
     *
     */
    private $user;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Aide")
     * @ORM\JoinColumn(name="aideId", referencedColumnName="aideId")
     *
     *
     */
    private $aide;

    /**
     * @return mixed
     */
    public function getAide()
    {
        return $this->aide;
    }

    /**
     * @param mixed $aide
     */
    public function setAide($aide)
    {
        $this->aide = $aide;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="nomBeneficiaire", type="string", length=250, nullable=false)
     */
    private $nombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomBeneficiaire", type="string", length=250, nullable=false)
     */
    private $prenombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=250, nullable=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseGPS", type="string", length=250, nullable=false)
     */
    private $adressegps;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=250, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="besoin", type="string", length=250, nullable=true)
     */
    private $besoin;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=250, nullable=true)
     */
    private $nationalite;

    /**
     * @return int
     */
    public function getBeneficiaireid()
    {
        return $this->beneficiaireid;
    }

    /**
     * @param int $beneficiaireid
     */
    public function setBeneficiaireid($beneficiaireid)
    {
        $this->beneficiaireid = $beneficiaireid;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



    /**
     * @return string
     */
    public function getNombeneficiaire()
    {
        return $this->nombeneficiaire;
    }

    /**
     * @param string $nombeneficiaire
     */
    public function setNombeneficiaire($nombeneficiaire)
    {
        $this->nombeneficiaire = $nombeneficiaire;
    }

    /**
     * @return string
     */
    public function getPrenombeneficiaire()
    {
        return $this->prenombeneficiaire;
    }

    /**
     * @param string $prenombeneficiaire
     */
    public function setPrenombeneficiaire($prenombeneficiaire)
    {
        $this->prenombeneficiaire = $prenombeneficiaire;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * @param \DateTime $datenaissance
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getAdressegps()
    {
        return $this->adressegps;
    }

    /**
     * @param string $adressegps
     */
    public function setAdressegps($adressegps)
    {
        $this->adressegps = $adressegps;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getBesoin()
    {
        return $this->besoin;
    }

    /**
     * @param string $besoin
     */
    public function setBesoin($besoin)
    {
        $this->besoin = $besoin;
    }

    /**
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param string $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }
}

