<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
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
     * @var date
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente", reversedBy="id")
     * @ORM\JoinColumn
     * 
     */
    private $cliente;
    
    /**
     * @ORM\OneTOMany(targetEntity="Linea", mappedBy="comp")
     * 
     */
    private $lineas;
    
    /**
     * @var integer
     * 
     * @ORM\Column(name="afecta_cta", type="integer")
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
    
}
?>
