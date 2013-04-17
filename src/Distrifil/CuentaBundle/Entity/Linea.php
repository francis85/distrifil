<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Linea
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\LineaRepository")
 */
class Linea
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
     * @ORM\ManyToOne(targetEntity="Comprobante", inversedBy="linea", cascade={"persist"})
     * 
     * @ORM\JoinColumn(name="comprobante_id", referencedColumnName="id")
     * 
     * @Assert\NotNull()
     */
    protected $comp;

    /**
     *
     * @ORM\OneToOne(targetEntity="Producto")
     * @JoinColumn(name="cod_prod", referencedColumnName="codigo")
     */
    protected $prod;

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
     * Set comp
     *
     * @param string $comp
     * @return Linea
     */
    public function setComp($comp)
    {
        $this->comp = $comp;
    
        return $this;
    }

    /**
     * Get comp
     *
     * @return string 
     */
    public function getComp()
    {
        return $this->comp;
    }

    /**
     * Set prod
     *
     * @param string $prod
     * @return Linea
     */
    public function setProd($prod)
    {
        $this->prod = $prod;
    
        return $this;
    }

    /**
     * Get prod
     *
     * @return string 
     */
    public function getProd()
    {
        return $this->prod;
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
}
