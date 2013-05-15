<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Producto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\ProductoRepository")
 * @UniqueEntity("codigo")
 */
class Producto
{
     /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;
    
    /**
     * 
     * @var string
     * 
     * @ORM\Column(name="codigo", type="string")
     */
    
    private $codigo;
    

        /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="string", length=150)
     */
    private $descrip;

    /**
     * @var float
     *
     * @ORM\Column(name="precio", type="float")
     */
    private $precio;
    
     /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo() {
        return $this->codigo;
    }
    
    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Producto
     */
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    /**
     * Set descrip
     *
     * @param string $descrip
     * @return Producto
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;
    
        return $this;
    }

    /**
     * Get descrip
     *
     * @return string 
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set precio
     *
     * @param float $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
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
}
