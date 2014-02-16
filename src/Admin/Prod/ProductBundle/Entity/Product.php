<?php

namespace Admin\Prod\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Product
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isNew", type="boolean")
     */
    private $isNew;

    /**
     * @var string
     *
     * @ORM\Column(name="prodAlias", type="string", length=80)
     */
    private $prodAlias;

    /**
     * @var string
     *
     * @ORM\Column(name="prodName", type="string", length=80)
     */
    private $prodName;

    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="AdminProdDph:Dph")
     * @ORM\JoinColumn(name="dph_id", referencedColumnName="id")
     * @ORM\Column(name="dphId", type="smallint")
     */
    private $dphId;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;


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
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return Product
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set isNew
     *
     * @param boolean $isNew
     * @return Product
     */
    public function setIsNew($isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

    /**
     * Get isNew
     *
     * @return boolean
     */
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set prodAlias
     *
     * @param string $prodAlias
     * @return Product
     */
    public function setProdAlias($prodAlias)
    {
        $this->prodAlias = $prodAlias;

        return $this;
    }

    /**
     * Get prodAlias
     *
     * @return string
     */
    public function getProdAlias()
    {
        return $this->prodAlias;
    }

    /**
     * Set prodName
     *
     * @param string $prodName
     * @return Product
     */
    public function setProdName($prodName)
    {
        $this->prodName = $prodName;

        return $this;
    }

    /**
     * Get prodName
     *
     * @return string
     */
    public function getProdName()
    {
        return $this->prodName;
    }

    /**
     * Set dphId
     *
     * @param integer $dphId
     * @return Product
     */
    public function setDphId($dphId)
    {
        $this->dphId = $dphId;

        return $this;
    }

    /**
     * Get dphId
     *
     * @return integer
     */
    public function getDphId()
    {
        return $this->dphId;
    }

    /**
     * Set price
     *
     * @param string $price
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
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
