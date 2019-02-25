<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="fk_panier_client1_idx", columns={"client_idclient"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpanier;

    /**
     * @var string
     *
     * @ORM\Column(name="paniercol", type="string", length=45, nullable=true)
     */
    private $paniercol;

    /**
     * @var float
     *
     * @ORM\Column(name="totalprice", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalprice;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", precision=10, scale=0, nullable=true)
     */
    private $tva;

    /**
     * @var float
     *
     * @ORM\Column(name="pricetopay", type="float", precision=10, scale=0, nullable=true)
     */
    private $pricetopay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deliverydate", type="date", nullable=true)
     */
    private $deliverydate;

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
     * Set idpanier
     *
     * @param integer $idpanier
     *
     * @return Panier
     */
    public function setIdpanier($idpanier)
    {
        $this->idpanier = $idpanier;

        return $this;
    }

    /**
     * Get idpanier
     *
     * @return integer
     */
    public function getIdpanier()
    {
        return $this->idpanier;
    }

    /**
     * Set paniercol
     *
     * @param string $paniercol
     *
     * @return Panier
     */
    public function setPaniercol($paniercol)
    {
        $this->paniercol = $paniercol;

        return $this;
    }

    /**
     * Get paniercol
     *
     * @return string
     */
    public function getPaniercol()
    {
        return $this->paniercol;
    }

    /**
     * Set totalprice
     *
     * @param float $totalprice
     *
     * @return Panier
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;

        return $this;
    }

    /**
     * Get totalprice
     *
     * @return float
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * Set tva
     *
     * @param float $tva
     *
     * @return Panier
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set pricetopay
     *
     * @param float $pricetopay
     *
     * @return Panier
     */
    public function setPricetopay($pricetopay)
    {
        $this->pricetopay = $pricetopay;

        return $this;
    }

    /**
     * Get pricetopay
     *
     * @return float
     */
    public function getPricetopay()
    {
        return $this->pricetopay;
    }

    /**
     * Set deliverydate
     *
     * @param \DateTime $deliverydate
     *
     * @return Panier
     */
    public function setDeliverydate($deliverydate)
    {
        $this->deliverydate = $deliverydate;

        return $this;
    }

    /**
     * Get deliverydate
     *
     * @return \DateTime
     */
    public function getDeliverydate()
    {
        return $this->deliverydate;
    }

    /**
     * Set clientclient
     *
     * @param \AppBundle\Entity\Client $clientclient
     *
     * @return Panier
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
