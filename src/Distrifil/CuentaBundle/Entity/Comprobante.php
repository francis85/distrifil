<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobante
 *
 * @ORM\Table(name="comprobante")
 * @ORM\Entity
 */
abstract class Comprobante
{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(name="comprobante_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="letra", type="integer")
     */
    private $letra;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="id")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * 
     */
    private $cliente;
       
    /**
     * @var integer
     * 
     * @ORM\Column(name="afecta_cta", type="integer")
     * 
     */
    private $afecta;
    
    /**
     * @var float
     * 
     * @ORM\Column(name="subtotal", type="float")
     */
    private $subtotal;
    
    /**
     * @var float
     * 
     * @ORM\Column(name="total", type="float")
     */
    private $total;
    
    public function getLetra() {
        return $this->letra;
    }

    public function setLetra(char $letra) {
        $this->letra = $letra;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha(date $fecha) {
        $this->fecha = $fecha;
    }
    
    public function getAfecta() {
        return $this->afecta;
    }

    public function setAfecta($afecta) {
        $this->afecta = $afecta;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
    }
    
        
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
     * Set cliente
     *
     * @param \Distrifil\CuentaBundle\Entity\Cliente $cliente
     * @return Comprobante
     */
    public function setCliente(\Distrifil\CuentaBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Distrifil\CuentaBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}