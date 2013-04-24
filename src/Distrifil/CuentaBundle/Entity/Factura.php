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
     * @ORM\Column(name="factura_id", type="integer")
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
     * 
     * @ORM\ManyToMany(targetEntity="Recibo", mappedBy="facturas")
     * 
     */
    private $recibos;

    /**
     * 
     * @ORM\OneToMany(targetEntity="Linea", mappedBy="factura", cascade={"persist"})
     * 
     */
    private $lineas;
    
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recibos = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\Linea $lineas
     * @return Factura
     */
    public function addLinea(\Distrifil\CuentaBundle\Entity\Linea $lineas)
    {
        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\Linea $lineas
     */
    public function removeLinea(\Distrifil\CuentaBundle\Entity\Linea $lineas)
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