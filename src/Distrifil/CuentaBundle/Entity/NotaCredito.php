<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotaCredito
 *
 * @ORM\Table(name="notacredito")
 * @ORM\Entity
 */
class NotaCredito extends Comprobante
{
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="notascred")
     * @ORM\JoinColumn(name="cuenta_id", referencedColumnName="id")
     */
    private $cuenta;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="LineaNotaCredito", mappedBy="notacredito", cascade={"persist"})
     * 
     */
    private $lineas;
    
    /**
     * Set observacion
     *
     * @param string $observacion
     * @return NotaCredito
     */  
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }
    
    /**
     * Set cliente
     *
     * @param \Distrifil\CuentaBundle\Entity\Cliente $cliente
     * @return NotaCredito
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

    /**
     * Set cuenta
     *
     * @param \Distrifil\CuentaBundle\Entity\Cuenta $cuenta
     * @return NotaCredito
     */
    public function setCuenta(\Distrifil\CuentaBundle\Entity\Cuenta $cuenta = null)
    {
        $this->cuenta = $cuenta;
    
        return $this;
    }

    /**
     * Get cuenta
     *
     * @return \Distrifil\CuentaBundle\Entity\Cuenta 
     */
    public function getCuenta()
    {
        return $this->cuenta;
    }
    
    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\LineaNotaCredito $lineas
     * @return NotaCredito
     */
    public function addLinea(\Distrifil\CuentaBundle\Entity\LineaNotaCredito $lineas)
    {
        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\LineaNotaCredito $lineas
     */
    public function removeLinea(\Distrifil\CuentaBundle\Entity\LineaNotaCredito $lineas)
    {
        $this->lineas->removeElement($lineas);
    }

    /**
     * Get lineas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLineas()
    {
        return $this->lineas;
    }
}