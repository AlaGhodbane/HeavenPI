<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productreview
 *
 * @ORM\Table(name="productreview", indexes={@ORM\Index(name="fk_review_client1_idx", columns={"client_idclient"}), @ORM\Index(name="fk_review_admin1_idx", columns={"admin_idadmin"})})
 * @ORM\Entity
 */
class Productreview
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idreview", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idreview;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reviewdate", type="datetime", nullable=true)
     */
    private $reviewdate;

    /**
     * @var \Admin
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="admin_idadmin", referencedColumnName="idadmin")
     * })
     */
    private $adminadmin;

    /**
     * @var \Client
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_idclient", referencedColumnName="idclient")
     * })
     */
    private $clientclient;



    /**
     * Set idreview
     *
     * @param integer $idreview
     *
     * @return Productreview
     */
    public function setIdreview($idreview)
    {
        $this->idreview = $idreview;

        return $this;
    }

    /**
     * Get idreview
     *
     * @return integer
     */
    public function getIdreview()
    {
        return $this->idreview;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Productreview
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
     * Set reviewdate
     *
     * @param \DateTime $reviewdate
     *
     * @return Productreview
     */
    public function setReviewdate($reviewdate)
    {
        $this->reviewdate = $reviewdate;

        return $this;
    }

    /**
     * Get reviewdate
     *
     * @return \DateTime
     */
    public function getReviewdate()
    {
        return $this->reviewdate;
    }

    /**
     * Set adminadmin
     *
     * @param \AppBundle\Entity\Admin $adminadmin
     *
     * @return Productreview
     */
    public function setAdminadmin(\AppBundle\Entity\Admin $adminadmin)
    {
        $this->adminadmin = $adminadmin;

        return $this;
    }

    /**
     * Get adminadmin
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getAdminadmin()
    {
        return $this->adminadmin;
    }

    /**
     * Set clientclient
     *
     * @param \AppBundle\Entity\Client $clientclient
     *
     * @return Productreview
     */
    public function setClientclient(\AppBundle\Entity\Client $clientclient)
    {
        $this->clientclient = $clientclient;

        return $this;
    }

    /**
     * Get clientclient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getClientclient()
    {
        return $this->clientclient;
    }
}
