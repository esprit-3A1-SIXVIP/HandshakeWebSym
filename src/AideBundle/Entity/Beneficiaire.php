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
     * @ORM\Column(name="beneficiaireId", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $beneficiaireid;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBeneficiaire", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $nombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomBeneficiaire", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $prenombeneficiaire;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", precision=0, scale=0, nullable=false, unique=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseGPS", type="string", length=250, precision=0, scale=0, nullable=false, unique=false)
     */
    private $adressegps;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="besoin", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $besoin;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=250, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nationalite;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;

    /**
     * @var \AideBundle\Entity\Aide
     *
     * @ORM\ManyToOne(targetEntity="AideBundle\Entity\Aide")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aideId", referencedColumnName="aideId", nullable=true)
     * })
     */
    private $aide;


}

