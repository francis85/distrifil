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
     * @ORM\OneToOne(targetEntity="Cliente", mappedBy="id")
     */
    private $cliente;

    /**
     * @var float
     *
     * @ORM\Column(name="saldo", type="float")
     */
    private $saldo;

    /**
     * @var string
     *
     * @ORM\Column(name="comprobante", type="string", length=255)
     */
    private $comprobante;


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


}
