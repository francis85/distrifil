<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibo
 *
 * @ORM\Table(name="recibo")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\ReciboRepository")
 */
class Recibo extends Comprobante
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
     */
    private $forma_pago;
    
    /**
     * Ver Relacion
     * @var type 
     */
    protected $cheques;
    
    
    /**
     * Ver Relacion
     * @var type 
     */
    protected $fact_cancela;


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
}
