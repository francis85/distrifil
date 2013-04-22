<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\ClienteRepository")
 */
class Cliente
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
     * @var string
     *
     * @ORM\Column(name="descli", type="string", length=200)
     */
    private $descli;

    /**
     * @var string
     *
     * @ORM\Column(name="domici", type="string", length=255)
     */
    private $domici;

    /**
     * @var integer
     *
     * @ORM\Column(name="cuit", type="integer")
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="cond_iva", type="string", length=255)
     */
    private $cond_iva;

    /**
     * @var string
     *
     * @ORM\Column(name="locali", type="string", length=100)
     */
    private $locali;
    
    /**
     * @ORM\OneToOne(targetEntity="Cuenta", mappedBy="cliente")
     */
    private $cuenta


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
     * Set descli
     *
     * @param string $descli
     * @return Cliente
     */
    public function setDescli($descli)
    {
        $this->descli = $descli;
    
        return $this;
    }

    /**
     * Get descli
     *
     * @return string 
     */
    public function getDescli()
    {
        return $this->descli;
    }

    /**
     * Set domici
     *
     * @param string $domici
     * @return Cliente
     */
    public function setDomici($domici)
    {
        $this->domici = $domici;
    
        return $this;
    }

    /**
     * Get domici
     *
     * @return string 
     */
    public function getDomici()
    {
        return $this->domici;
    }

    /**
     * Set cuit
     *
     * @param integer $cuit
     * @return Cliente
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    
        return $this;
    }

    /**
     * Get cuit
     *
     * @return integer 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set cond_iva
     *
     * @param string $condIva
     * @return Cliente
     */
    public function setCondIva($condIva)
    {
        $this->cond_iva = $condIva;
    
        return $this;
    }

    /**
     * Get cond_iva
     *
     * @return string 
     */
    public function getCondIva()
    {
        return $this->cond_iva;
    }
    

    /**
     * Set locali
     *
     * @param string $locali
     * @return Cliente
     */
    public function setLocali($locali)
    {
        $this->locali = $locali;
    
        return $this;
    }

    /**
     * Get locali
     *
     * @return string 
     */
    public function getLocali()
    {
        return $this->locali;
    }
}