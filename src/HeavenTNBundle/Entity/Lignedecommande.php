<?php

namespace HeavenTNBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignedecommande
 *
 * @ORM\Table(name="lignedecommande")
 * @ORM\Entity(repositoryClass="HeavenTNBundle\Repository\LignedecommandeRepository")
 */
class Lignedecommande
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
     * @var integer
     *
     * @ORM\Column(name="quantiteligne", type="integer", nullable=false)
     */
    private $quantiteligne;

    /**
     * @var integer
     *
     * @ORM\Column(name="prixligne", type="integer", nullable=false)
     */
    private $prixligne;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=10)
     */
    private $etat;


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
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="HeavenTNBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduct", referencedColumnName="idproduct")
     * })
     */
    private $idProduct;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Lignedecommande
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
     * Set prix
     *
     * @param integer $prix
     *
     * @return Lignedecommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Lignedecommande
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idCommande
     *
     * @param \HeavenTNBundle\Entity\Commandes $idCommande
     *
     * @return Lignedecommande
     */
    public function setIdCommande(\HeavenTNBundle\Entity\Commandes $idCommande = null)
    {
        $this->id_Commande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \HeavenTNBundle\Entity\Commandes
     */
    public function getIdCommande()
    {
        return $this->id_Commande;
    }

    /**
     * Set idUser
     *
     * @param \UserBundle\Entity\User $idUser
     *
     * @return Lignedecommande
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
     * Set idProduct
     *
     * @param \HeavenTNBundle\Entity\Product $idProduct
     *
     * @return Lignedecommande
     */
    public function setIdProduct(\HeavenTNBundle\Entity\Product $idProduct = null)
    {
        $this->idProduct = $idProduct;

        return $this;
    }

    /**
     * Get idProduct
     *
     * @return \HeavenTNBundle\Entity\Product
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set quantiteligne
     *
     * @param integer $quantiteligne
     *
     * @return Lignedecommande
     */
    public function setQuantiteligne($quantiteligne)
    {
        $this->quantiteligne = $quantiteligne;

        return $this;
    }

    /**
     * Get quantiteligne
     *
     * @return integer
     */
    public function getQuantiteligne()
    {
        return $this->quantiteligne;
    }

    /**
     * Set prixligne
     *
     * @param integer $prixligne
     *
     * @return Lignedecommande
     */
    public function setPrixligne($prixligne)
    {
        $this->prixligne = $prixligne;

        return $this;
    }

    /**
     * Get prixligne
     *
     * @return integer
     */
    public function getPrixligne()
    {
        return $this->prixligne;
    }
}
