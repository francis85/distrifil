<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *  LineaNotaCredito
 *
 * @ORM\Table("lineanotacredito")
 * @ORM\Entity
 */
class  LineaNotaCredito
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
     * @ORM\ManyToOne(targetEntity="NotaCredito", inversedBy="lineas", cascade={"all"})
     * 
     * @ORM\JoinColumn(name="notacredito_id", referencedColumnName="id", nullable=false)
     * 
     * @Assert\NotNull()
     */
    private $notacredito;

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
}
