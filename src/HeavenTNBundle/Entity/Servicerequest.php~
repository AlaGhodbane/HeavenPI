<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicerequest
 *
 * @ORM\Table(name="servicerequest", indexes={@ORM\Index(name="fk_servicerequest_client1_idx", columns={"client_idclient"})})
 * @ORM\Entity
 */
class Servicerequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idservicerequest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idservicerequest;

    /**
     * @var string
     *
     * @ORM\Column(name="servicename", type="string", length=45, nullable=true)
     */
    private $servicename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="servicedate", type="date", nullable=true)
     */
    private $servicedate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

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
     * Set idservicerequest
     *
     * @param integer $idservicerequest
     *
     * @return Servicerequest
     */
    public function setIdservicerequest($idservicerequest)
    {
        $this->idservicerequest = $idservicerequest;

        return $this;
    }

    /**
     * Get idservicerequest
     *
     * @return integer
     */
    public function getIdservicerequest()
    {
        return $this->idservicerequest;
    }

    /**
     * Set servicename
     *
     * @param string $servicename
     *
     * @return Servicerequest
     */
    public function setServicename($servicename)
    {
        $this->servicename = $servicename;

        return $this;
    }

    /**
     * Get servicename
     *
     * @return string
     */
    public function getServicename()
    {
        return $this->servicename;
    }

    /**
     * Set servicedate
     *
     * @param \DateTime $servicedate
     *
     * @return Servicerequest
     */
    public function setServicedate($servicedate)
    {
        $this->servicedate = $servicedate;

        return $this;
    }

    /**
     * Get servicedate
     *
     * @return \DateTime
     */
    public function getServicedate()
    {
        return $this->servicedate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Servicerequest
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
     * Set clientclient
     *
     * @param \AppBundle\Entity\Client $clientclient
     *
     * @return Servicerequest
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
