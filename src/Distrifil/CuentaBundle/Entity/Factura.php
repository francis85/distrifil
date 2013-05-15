<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity
 */
class Factura extends Comprobante
{
     /**
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="facturas")
     * @ORM\JoinColumn(name="cuenta_id", referencedColumnName="id")
     */
    private $cuenta;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="LineaFactura", mappedBy="factura", cascade={"persist"})
     * 
     */
    private $lineas;
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="Recibo", mappedBy="facturas")
     * 
     */
    private $recibos;

    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recibos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set cliente
     *
     * @param \Distrifil\CuentaBundle\Entity\Cliente $cliente
     * @return Factura
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
     * @return Factura
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

    /**
     * Add lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\LineaFactura $lineas
     * @return Factura
     */
    public function addLinea(\Distrifil\CuentaBundle\Entity\LineaFactura $lineas)
    {
        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\LineaFactura $lineas
     */
    public function removeLinea(\Distrifil\CuentaBundle\Entity\LineaFactura $lineas)
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

    /**
     * Add recibos
     *
     * @param \Distrifil\CuentaBundle\Entity\Recibo $recibos
     * @return Factura
     */
    public function addRecibo(\Distrifil\CuentaBundle\Entity\Recibo $recibos)
    {
        $this->recibos[] = $recibos;
    
        return $this;
    }

    /**
     * Remove recibos
     *
     * @param \Distrifil\CuentaBundle\Entity\Recibo $recibos
     */
    public function removeRecibo(\Distrifil\CuentaBundle\Entity\Recibo $recibos)
    {
        $this->recibos->removeElement($recibos);
    }

    /**
     * Get recibos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecibos()
    {
        return $this->recibos;
    }
}