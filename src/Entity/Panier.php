<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="IdUser", columns={"IdUser"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PrixTotal", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $prixtotal;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUser", type="integer", nullable=false)
     */
    private $iduser;


}
