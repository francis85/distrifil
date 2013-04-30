<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobante
 * @ORM\MappedSuperclass
 */
abstract class Comprobante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=1)
     */
    protected $letra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    protected $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="afecta", type="integer")
     */
    protected $afecta;

    /**
     * @var float
     *
     * @ORM\Column(name="subtotal", type="float")
     */
    protected $subtotal;
    
    /**
     * @var float
     *
     * @ORM\Column(name="monto_iva", type="float")
     */
    protected $montoIva;

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float")
     */
    protected $total;


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
     * Set letra
     *
     * @param string $letra
     * @return Comprobante
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;
    
        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Comprobante
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set afecta
     *
     * @param integer $afecta
     * @return Comprobante
     */
    public function setAfecta($afecta)
    {
        $this->afecta = $afecta;
    
        return $this;
    }

    /**
     * Get afecta
     *
     * @return integer 
     */
    public function getAfecta()
    {
        return $this->afecta;
    }

    /**
     * Set subtotal
     *
     * @param float $subtotal
     * @return Comprobante
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    
        return $this;
    }

    /**
     * Get subtotal
     *
     * @return float 
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    
    public function setMontoIva($montoIva)
    {
        $this->montoIva = $montoIva;
    
        return $this;
    }
    
    /**
     * Get montoIva
     *
     * @return float 
     */
    public function getMontoIva()
    {
        return $this->montoIva;
    }

    /**
     * Set total
     *
     * @param float $total
     * @return Comprobante
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return float 
     */
    public function getTotal()
    {
        return $this->total;
    }
}