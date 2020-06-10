<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use Vich\UploaderBundle\Mapping\Annotation as Vich;

//use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Vich\Uploadable
 * 
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\EvenementRepository")

 */
class Evenement
{
    /**
     * @ORM\Column(name="evenementId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $evenementId;
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=250, nullable=false)
     */
    private $code;
    /**
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @ORM\Column(name="lieuEvenement", type="string", length=250, nullable=false)
     */
    private $lieuEvenement;

    /**
     * @ORM\Column(name="start", type="datetime", nullable=true)
     */
    private $start;

    /**
     * @ORM\Column(name="end", type="datetime", nullable=true)
     */
    private $end;

    /**
     * @ORM\Column(name="porteeEvenement", type="string", length=250, nullable=true)
     */
    private $porteeEvenement;

    /**
     * @ORM\Column(name="prixEvenement", type="integer", nullable=false)
     */
    private $prixEvenement;

    /**
     * @ORM\Column(name="image", type="string", length=255,nullable=true)
     */
    private $image;
   

 /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $imageName;
   

    /**
     * @Vich\UploadableField(mapping="evenement_image", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * Evenement constructor.
     * @param $updatedAt
     */
    public function __construct()
    {
        $this->updatedAt = new \DateTime('now');
    }


    public function setImageFile(File $image= null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

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
     * Set evenementId
     *
     * @param integer $evenementId
     *
     * @return Evenement
     */
    public function setEvenementId($evenementId)
    {
        $this->evenementId = $evenementId;

        return $this;
    }

    /**
     * Get evenementId
     *
     * @return int
     */
    public function getEvenementId()
    {
        return $this->evenementId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Evenement
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set lieuEvenement
     *
     * @param string $lieuEvenement
     *
     * @return Evenement
     */
    public function setLieuEvenement($lieuEvenement)
    {
        $this->lieuEvenement = $lieuEvenement;

        return $this;
    }

    /**
     * Get lieuEvenement
     *
     * @return string
     */
    public function getLieuEvenement()
    {
        return $this->lieuEvenement;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return Evenement
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return Evenement
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set porteeEvenement
     *
     * @param string $porteeEvenement
     *
     * @return Evenement
     */
    public function setPorteeEvenement($porteeEvenement)
    {
        $this->porteeEvenement = $porteeEvenement;

        return $this;
    }

    /**
     * Get porteeEvenement
     *
     * @return string
     */
    public function getPorteeEvenement()
    {
        return $this->porteeEvenement;
    }

    /**
     * Set prixEvenement
     *
     * @param integer $prixEvenement
     *
     * @return Evenement
     */
    public function setPrixEvenement($prixEvenement)
    {
        $this->prixEvenement = $prixEvenement;

        return $this;
    }

    /**
     * Get prixEvenement
     *
     * @return int
     */
    public function getPrixEvenement()
    {
        return $this->prixEvenement;
    }





    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Evenement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param mixed $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }


}

