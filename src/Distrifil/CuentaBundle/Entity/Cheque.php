<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\ChequeRepository")
 */
class Cheque
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
     * @ORM\Column(name="numero", type="bigint")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=150)
     */
    private $banco;

    /**
     * @var float
     *
     * @ORM\Column(name="monto", type="float")
     */
    private $monto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_pago", type="date")
     */
    private $fecha_pago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_emision", type="date")
     */
    private $fecha_emision;


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
     * Set numero
     *
     * @param integer $numero
     * @return Cheque
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set banco
     *
     * @param string $banco
     * @return Cheque
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return string 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return Cheque
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fecha_pago
     *
     * @param \DateTime $fechaPago
     * @return Cheque
     */
    public function setFechaPago($fechaPago)
    {
        $this->fecha_pago = $fechaPago;
    
        return $this;
    }

    /**
     * Get fecha_pago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fecha_pago;
    }

    /**
     * Set fecha_emision
     *
     * @param \DateTime $fechaEmision
     * @return Cheque
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fecha_emision = $fechaEmision;
    
        return $this;
    }

    /**
     * Get fecha_emision
     *
     * @return \DateTime 
     */
    public function getFechaEmision()
    {
        return $this->fecha_emision;
    }
}
