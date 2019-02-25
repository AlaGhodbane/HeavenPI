<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
{

    /**
     * @var integer
     *
     * @ORM\Column(name="idproduct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="productname", type="string", length=45, nullable=true)
     */
    private $productname;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;


    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", precision=10, scale=0, nullable=true)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="minAlert", type="integer", precision=10, scale=0, nullable=true)
     */
    private $minAlert;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="productimage", type="string", length=255, nullable=true)
     */
    private $productimage;

    /**
     * @ORM\ManyToOne(targetEntity="HeavenTNBundle\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(name="category", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="stockstate", type="string", nullable=true)
     */
    private $stockstate;

    /**
     * Get idproduct
     *
     * @return integer
     */
    public function getIdproduct()
    {
        return $this->idproduct;
    }

    /**
     * Set productname
     *
     * @param string $productname
     *
     * @return Product
     */
    public function setProductname($productname)
    {
        $this->productname = $productname;

        return $this;
    }

    /**
     * Get productname
     *
     * @return string
     */
    public function getProductname()
    {
        return $this->productname;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Product
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }



    /**
     * Set category
     *
     * @param \HeavenTNBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\HeavenTNBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \HeavenTNBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set productimage
     *
     * @param string $productimage
     *
     * @return Product
     */
    public function setProductimage($productimage)
    {
        $this->productimage = $productimage;

        return $this;
    }

    /**
     * Get productimage
     *
     * @return string
     */
    public function getProductimage()
    {
        return $this->productimage;
    }

    /**
     * Set minAlert
     *
     * @param integer $minAlert
     *
     * @return Product
     */
    public function setMinAlert($minAlert)
    {
        $this->minAlert = $minAlert;

        return $this;
    }

    /**
     * Get minAlert
     *
     * @return integer
     */
    public function getMinAlert()
    {
        return $this->minAlert;
    }

    /**
     * Set stockstate
     *
     * @param string $stockstate
     *
     * @return Product
     */
    public function setStockstate($stockstate)
    {
        $this->stockstate = $stockstate;

        return $this;
    }

    /**
     * Get stockstate
     *
     * @return string
     */
    public function getStockstate()
    {
        return $this->stockstate;
    }
}
