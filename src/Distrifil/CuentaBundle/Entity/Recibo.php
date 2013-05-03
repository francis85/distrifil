<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Recibo
 *
 * @ORM\Table(name="recibo")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\ReciboRepository")
 */
class Recibo
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
     * @var integer
     *
     * @ORM\Column(name="forma_pago", type="integer")
     * 
     * @Assert\Choice(choices = {"Efectivo", "Cheque"}, message = "Choose a valid gender.")
     */
    private $forma_pago;
    
    /**
     * 
     * @ORM\OneToMany(targetEntity="Cheque", mappedBy="numero")
     */
    private $cheques;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Cuenta", inversedBy="recibos")
     * @ORM\JoinColumn(name="recibo_id", referencedColumnName="id")
     */
    private $cuenta;
    
    
    /**
     * 
     * @ORM\ManyToMany(targetEntity="Factura", inversedBy="recibos")
     * @ORM\JoinTable(name="reciboXfactura",
     *      joinColumns={@ORM\JoinColumn(name="recibo_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="factura_id", referencedColumnName="id")}
     *      ) 
     */
    private $facturas;

    /**
     * @var float
     * 
     * @ORM\Column(name="total", type="float")
     */
    private $total;

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
     * Set forma_pago
     *
     * @param integer $formaPago
     * @return Recibo
     */
    public function setFormaPago($formaPago)
    {
        $this->forma_pago = $formaPago;
    
        return $this;
    }

    /**
     * Get forma_pago
     *
     * @return integer 
     */
    public function getFormaPago()
    {
        return $this->forma_pago;
    }
    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cheques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->facturas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set total
     *
     * @param float $total
     * @return Recibo
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

    /**
     * Add cheques
     *
     * @param \Distrifil\CuentaBundle\Entity\Cheque $cheques
     * @return Recibo
     */
    public function addCheque(\Distrifil\CuentaBundle\Entity\Cheque $cheques)
    {
        $this->cheques[] = $cheques;
    
        return $this;
    }

    /**
     * Remove cheques
     *
     * @param \Distrifil\CuentaBundle\Entity\Cheque $cheques
     */
    public function removeCheque(\Distrifil\CuentaBundle\Entity\Cheque $cheques)
    {
        $this->cheques->removeElement($cheques);
    }

    /**
     * Get cheques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCheques()
    {
        return $this->cheques;
    }

    /**
     * Add facturas
     *
     * @param \Distrifil\CuentaBundle\Entity\Factura $facturas
     * @return Recibo
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
     * Set cuenta
     *
     * @param \Distrifil\CuentaBundle\Entity\Cuenta $cuenta
     * @return Recibo
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