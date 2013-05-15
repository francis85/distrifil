<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table("cuenta")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\CuentaRepository")
 */
class Cuenta
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
     *
     * @ORM\OneToOne(targetEntity="Cliente", inversedBy="cuenta")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;

    /**
     * @var float
     *
     * @ORM\Column(name="saldo", type="float")
     */
    private $saldo;

    /**
     *
     * @ORM\OneToMany(targetEntity="Factura", mappedBy="cuenta"))
     */
    private $facturas;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="NotaCredito", mappedBy="cuenta")
     */
    private $notascred;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="NotaDebito", mappedBy="cuenta")
     */
    private $notasdeb;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Recibo", mappedBy="cuenta")
     */
    private $recibos;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->facturas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notascred = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notasdeb = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set saldo
     *
     * @param float $saldo
     * @return Cuenta
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    
        return $this;
    }

    /**
     * Get saldo
     *
     * @return float 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set cliente
     *
     * @param \Distrifil\CuentaBundle\Entity\Cliente $cliente
     * @return Cuenta
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
     * Add facturas
     *
     * @param \Distrifil\CuentaBundle\Entity\Factura $facturas
     * @return Cuenta
     */
    public function addFactura(\Distrifil\CuentaBundle\Entity\Factura $facturas)
    {
        $this->facturas[] = $facturas;
    
        return $this;
    }

    /**
     * Remove facturas
     *
     * @param \Distrifil\CuentaBundle\Entity\Factura $facturas
     */
    public function removeFactura(\Distrifil\CuentaBundle\Entity\Factura $facturas)
    {
        $this->facturas->removeElement($facturas);
    }

    /**
     * Get facturas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFacturas()
    {
        return $this->facturas;
    }

    /**
     * Add notascred
     *
     * @param \Distrifil\CuentaBundle\Entity\NotaCredito $notascred
     * @return Cuenta
     */
    public function addNotascred(\Distrifil\CuentaBundle\Entity\NotaCredito $notascred)
    {
        $this->notascred[] = $notascred;
    
        return $this;
    }

    /**
     * Remove notascred
     *
     * @param \Distrifil\CuentaBundle\Entity\NotaCredito $notascred
     */
    public function removeNotascred(\Distrifil\CuentaBundle\Entity\NotaCredito $notascred)
    {
        $this->notascred->removeElement($notascred);
    }

    /**
     * Get notascred
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotascred()
    {
        return $this->notascred;
    }

    /**
     * Add notasdeb
     *
     * @param \Distrifil\CuentaBundle\Entity\NotaDebito $notasdeb
     * @return Cuenta
     */
    public function addNotasdeb(\Distrifil\CuentaBundle\Entity\NotaDebito $notasdeb)
    {
        $this->notasdeb[] = $notasdeb;
    
        return $this;
    }

    /**
     * Remove notasdeb
     *
     * @param \Distrifil\CuentaBundle\Entity\NotaDebito $notasdeb
     */
    public function removeNotasdeb(\Distrifil\CuentaBundle\Entity\NotaDebito $notasdeb)
    {
        $this->notasdeb->removeElement($notasdeb);
    }

    /**
     * Get notasdeb
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotasdeb()
    {
        return $this->notasdeb;
    }

    /**
     * Add recibos
     *
     * @param \Distrifil\CuentaBundle\Entity\Recibo $recibos
     * @return Cuenta
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