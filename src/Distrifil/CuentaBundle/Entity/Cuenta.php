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
     * @ORM\Column(name="comprobante", type="string", length=255)
     */
    private $comprobantes;


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
     * Set comprobantes
     *
     * @param string $comprobantes
     * @return Cuenta
     */
    public function setComprobantes($comprobantes)
    {
        $this->comprobantes = $comprobantes;
    
        return $this;
    }

    /**
     * Get comprobantes
     *
     * @return string 
     */
    public function getComprobantes()
    {
        return $this->comprobantes;
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
}