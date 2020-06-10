<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Participation
 * 
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\ParticipationRepository")
 * 
 */
class Participation
{


    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="userId", referencedColumnName="id", nullable=true)
     * })
     */
    protected $user;
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
     * @var \EvenementBundle\Entity\Evenement
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="EvenementBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="evenement", referencedColumnName="evenementId", nullable=true)
     * })
     */
    protected $events;
    /**
     * @return Evenement
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Evenement $events
     */
    public function setEvents($events)
    {
        $this->events = $events;
    }
    


}

