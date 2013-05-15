<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * LineaNotaDebito
 *
 * @ORM\Table("lineanotadebito")
 * @ORM\Entity
 */
class LineaNotaDebito
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
     * @ORM\ManyToOne(targetEntity="NotaDebito", inversedBy="lineas", cascade={"all"})
     * 
     * @ORM\JoinColumn(name="notadebito_id", referencedColumnName="id", nullable=false)
     * 
     * @Assert\NotNull()
     */
    private $notadebito;

    /**
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
     * Set factura
     *
     * @param string $factura
     * @return LineaNotaDebito
     */
    public function setFactura($factura)
    {
        $this->factura = $factura;
    
        return $this;
    }

    /**
     * Get factura
     *
     * @return string 
     */
    public function getFactura()
    {
        return $this->factura;
    }

    /**
     * Set producto
     *
     * @param string $producto
     * @return LineaNotaDebito
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return string 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set cant
     *
     * @param integer $cant
     * @return LineaNotaDebito
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
     * @return LineaNotaDebito
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
     * Set notadebito
     *
     * @param \Distrifil\CuentaBundle\Entity\NotaDebito $notadebito
     * @return LineaNotaDebito
     */
    public function setNotadebito(\Distrifil\CuentaBundle\Entity\NotaDebito $notadebito)
    {
        $this->notadebito = $notadebito;
    
        return $this;
    }

    /**
     * Get notadebito
     *
     * @return \Distrifil\CuentaBundle\Entity\NotaDebito 
     */
    public function getNotadebito()
    {
        return $this->notadebito;
    }
}