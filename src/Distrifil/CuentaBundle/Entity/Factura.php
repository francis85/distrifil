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
     * @var float
     *
     * @ORM\Column(name="monto_iva", type="float")
     */
    private $montoIva;

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
     * Set montoIva
     *
     * @param float $montoIva
     * @return Factura
     */
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
}