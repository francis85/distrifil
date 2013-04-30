<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * LineaFactura
 *
 * @ORM\Table(name="lineafactura")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\LineaFacturaRepository")
 */
class LineaFactura
{
    /**
     * @var integer
     * 
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Factura", inversedBy="lineas", cascade={"all"})
     * 
     * @ORM\JoinColumn(name="factura_id", referencedColumnName="id", nullable=false)
     * 
     * @Assert\NotNull()
     */
    private $factura;

    /**
     *
     * @ORM\OneToOne(targetEntity="Producto")
     * @ORM\JoinColumn(name="producto_id", referencedColumnName="id")
     */
    private $producto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cant", type="integer")
     */
    private $cant;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_un", type="float")
     */
    private $precio_un;

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
     * Set cant
     *
     * @param integer $cant
     * @return LineaFactura
     */
    public function setCant($cant)
    {
        $this->cant = $cant;
    
        return $this;
    }

    /**
     * Get cant
     *
     * @return integer 
     */
    public function getCant()
    {
        return $this->cant;
    }

    /**
     * Set precio_un
     *
     * @param float $precioUn
     * @return LineaFactura
     */
    public function setPrecioUn($precioUn)
    {
        $this->precio_un = $precioUn;
    
        return $this;
    }

    /**
     * Get precio_un
     *
     * @return float 
     */
    public function getPrecioUn()
    {
        return $this->precio_un;
    }

    /**
     * Set factura
     *
     * @param \Distrifil\CuentaBundle\Entity\Factura $factura
     * @return LineaFactura
     */
    public function setFactura(\Distrifil\CuentaBundle\Entity\Factura $factura)
    {
        $this->factura = $factura;
    
        return $this;
    }

    /**
     * Get factura
     *
     * @return \Distrifil\CuentaBundle\Entity\Factura 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set producto
     *
     * @param \Distrifil\CuentaBundle\Entity\Producto $producto
     * @return LineaFactura
     */
    public function setProducto(\Distrifil\CuentaBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return \Distrifil\CuentaBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}