<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota de Credito
 *
 * @ORM\Table(name="nota_credito")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\NotaCreditoRepository")
 */
class NotaCredito extends Comprobante
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}