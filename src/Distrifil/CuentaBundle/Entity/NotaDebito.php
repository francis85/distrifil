<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotaDebito
 *
 * @ORM\Table(name="notadebito")
 * @ORM\Entity
 */
class NotaDebito extends Comprobante
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
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="notasdeb")
     * @ORM\JoinColumn(name="cuenta_id", referencedColumnName="id")
     */
    private $cuenta;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="LineaNotaDebito", mappedBy="notadebito", cascade={"persist"})
     * 
     */
    private $lineas;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set observacion
     *
     * @param string $observacion
     * @return NotaDebito
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
     * @return NotaDebito
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
     * @param \Distrifil\CuentaBundle\Entity\LineaNotaDebito $lineas
     * @return NotaDebito
     */
    public function addLinea(\Distrifil\CuentaBundle\Entity\LineaNotaDebito $lineas)
    {
        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param \Distrifil\CuentaBundle\Entity\LineaNotaDebito $lineas
     */
    public function removeLinea(\Distrifil\CuentaBundle\Entity\LineaNotaDebito $lineas)
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