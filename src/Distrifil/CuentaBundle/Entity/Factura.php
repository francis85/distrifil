<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\FacturaRepository")
 */
class Factura extends Comprobante
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
     * @var float
     *
     * @ORM\Column(name="monto_iva", type="float")
     */
    private $monto_iva;


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
     * Set monto_iva
     *
     * @param float $montoIva
     * @return Factura
     */
    public function setMontoIva($montoIva)
    {
        $this->monto_iva = $montoIva;
    
        return $this;
    }

    /**
     * Get monto_iva
     *
     * @return float 
     */
    public function getMontoIva()
    {
        return $this->monto_iva;
    }
}
