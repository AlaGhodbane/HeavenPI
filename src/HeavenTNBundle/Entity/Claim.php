<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Claim
 *
 * @ORM\Table(name="claim")
 * @ORM\Entity
 */
class Claim
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idclaim", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclaim;


    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $id_user;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=45, nullable=true)
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="claimdate", type="datetime", nullable=true)
     */
    private $claimdate;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=45, nullable=true)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;




    /**
     * Set idclaim
     *
     * @param integer $idclaim
     *
     * @return Claim
     */
    public function setIdclaim($idclaim)
    {
        $this->idclaim = $idclaim;

        return $this;
    }

    public function __construct()
    {
        $this->claimdate = new \DateTime();
    }




/**
     * Get idclaim
     *
     * @return integer
     */
    public function getIdclaim()
    {
        return $this->idclaim;
    }

    /**
     * Set claimdate
     *
     * @param \DateTime $claimdate
     *
     * @return Claim
     */
    public function setClaimdate($claimdate)
    {
        $this->claimdate = $claimdate;

        return $this;
    }

    /**
     * Get claimdate
     *
     * @return \DateTime
     */
    public function getClaimdate()
    {
        return $this->claimdate;

    }

    /**
     * Set object
     *
     * @param string $object
     *
     * @return Claim
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Claim
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return Claim
     */
    public function setIdUser(\UserBundle\Entity\User $idUser = null)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \UserBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Claim
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
