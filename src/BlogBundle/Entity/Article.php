<?php

namespace BlogBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Auteur", type="string", length=255)
     */
    private $auteur;


    /**
     * @var int
     *
     * @ORM\Column(name="nbrVue", type="integer")
     */
    private $nbrVue;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrlike", type="integer")
     */
    private $nbrlike;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $myfile;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublication", type="date")
     */
    private $datePublication;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }



    /**
     * @return int
     */
    public function getNbrVue()
    {
        return $this->nbrVue;
    }

    /**
     * @param int $nbrVue
     */
    public function setNbrVue($nbrVue)
    {
        $this->nbrVue = $nbrVue;
    }

    /**
     * @return int
     */
    public function getNbrlike()
    {
        return $this->nbrlike;
    }

    /**
     * @param int $nbrlike
     */
    public function setNbrlike($nbrlike)
    {
        $this->nbrlike = $nbrlike;
    }
    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Article
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }
    /**
     * @return string
     */
    public function getMyfile()
    {
        return $this->myfile;
    }

    /**
     * @param string $myfile
     * @return Article
     */
    public function setMyfile(string $myfile)
    {
        $this->myfile = $myfile;

        return $this;
    }


}

