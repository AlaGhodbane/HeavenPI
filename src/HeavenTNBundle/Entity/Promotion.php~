<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion", indexes={@ORM\Index(name="fk_promotion_product1_idx", columns={"product_idproduct"})})
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromotion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpromotion;

    /**
     * @var integer
     *
     * @ORM\Column(name="percentage", type="integer", nullable=true)
     */
    private $percentage;

    /**
     * @var float
     *
     * @ORM\Column(name="newprice", type="float", precision=10, scale=0, nullable=true)
     */
    private $newprice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="date", nullable=true)
     */
    private $enddate;

    /**
     * @var \Product
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_idproduct", referencedColumnName="idproduct")
     * })
     */
    private $productproduct;



    /**
     * Set idpromotion
     *
     * @param integer $idpromotion
     *
     * @return Promotion
     */
    public function setIdpromotion($idpromotion)
    {
        $this->idpromotion = $idpromotion;

        return $this;
    }

    /**
     * Get idpromotion
     *
     * @return integer
     */
    public function getIdpromotion()
    {
        return $this->idpromotion;
    }

    /**
     * Set percentage
     *
     * @param integer $percentage
     *
     * @return Promotion
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return integer
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Set newprice
     *
     * @param float $newprice
     *
     * @return Promotion
     */
    public function setNewprice($newprice)
    {
        $this->newprice = $newprice;

        return $this;
    }

    /**
     * Get newprice
     *
     * @return float
     */
    public function getNewprice()
    {
        return $this->newprice;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Promotion
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Promotion
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set productproduct
     *
     * @param \AppBundle\Entity\Product $productproduct
     *
     * @return Promotion
     */
    public function setProductproduct(\AppBundle\Entity\Product $productproduct)
    {
        $this->productproduct = $productproduct;

        return $this;
    }

    /**
     * Get productproduct
     *
     * @return \AppBundle\Entity\Product
     */
    public function getProductproduct()
    {
        return $this->productproduct;
    }
}
