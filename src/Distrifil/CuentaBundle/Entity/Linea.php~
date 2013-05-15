<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Linea
 *
 * @ORM\Table(name="linea")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\LineaRepository")
 */
class Linea
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
     * @ORM\JoinColumn(name="cod_prod", referencedColumnName="codigo")
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
     * @return Linea
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
     * @return Linea
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
     * Set producto
     *
     * @param \Distrifil\CuentaBundle\Entity\Producto $producto
     * @return Linea
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

    /**
     * Set factura
     *
     * @param \Distrifil\CuentaBundle\Entity\Factura $factura
     * @return Linea
     */
    public function setFactura(\Distrifil\CuentaBundle\Entity\Factura $factura = null)
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
}