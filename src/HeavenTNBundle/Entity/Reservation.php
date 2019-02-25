<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="HeavenTNBundle\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pub", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRes;



    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="string", length=255, nullable=false)
     */
    private $position;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="datetime", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="datetime", nullable=false)
     */
    private $datefin;



    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id")
     */
    private $user;


    /**
     * Get idRes
     *
     * @return integer
     */
    public function getIdRes()
    {
        return $this->idRes;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Reservation
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Reservation
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Reservation
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }


    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Reservation
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
