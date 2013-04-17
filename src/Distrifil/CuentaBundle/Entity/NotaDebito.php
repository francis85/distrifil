<?php

namespace Distrifil\CuentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nota de Debito
 *
 * @ORM\Table(name="nota_debito")
 * @ORM\Entity(repositoryClass="Distrifil\CuentaBundle\Entity\NotaDebitoRepository")
 */
class NotaDebito extends Comprobante
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
}

?>
