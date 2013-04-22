<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobante
 *
 * @ORM\MappedSuperclass
 */
class Comprobante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="comprobante_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var char
     *
     * @ORM\Column(name="letra", type="char")
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
     * @ORM\OneTOMany(targetEntity="Linea", mappedBy="comprobante", cascade={"persist"})
     * 
     */
    private $lineas;
    
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
     * Constructor
     */
    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\Linea $lineas
     * @return Comprobante
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