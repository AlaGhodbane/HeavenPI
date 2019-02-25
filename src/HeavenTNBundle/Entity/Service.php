<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity
 */
class Service
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idservice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idservice;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicetype", type="integer", nullable=true)
     */
    private $servicetype;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="serviceimage", type="blob", length=65535, nullable=true)
     */
    private $serviceimage;

    /**
     * @var string
     *
     * @ORM\Column(name="servicename", type="string", length=45, nullable=true)
     */
    private $servicename;



    /**
     * Get idservice
     *
     * @return integer
     */
    public function getIdservice()
    {
        return $this->idservice;
    }

    /**
     * Set servicetype
     *
     * @param integer $servicetype
     *
     * @return Service
     */
    public function setServicetype($servicetype)
    {
        $this->servicetype = $servicetype;

        return $this;
    }

    /**
     * Get servicetype
     *
     * @return integer
     */
    public function getServicetype()
    {
        return $this->servicetype;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Service
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
     * Set serviceimage
     *
     * @param string $serviceimage
     *
     * @return Service
     */
    public function setServiceimage($serviceimage)
    {
        $this->serviceimage = $serviceimage;

        return $this;
    }

    /**
     * Get serviceimage
     *
     * @return string
     */
    public function getServiceimage()
    {
        return $this->serviceimage;
    }

    /**
     * Set servicename
     *
     * @param string $servicename
     *
     * @return Service
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
}
