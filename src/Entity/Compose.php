<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Compose
 *
 * @ORM\Table(name="compose", indexes={@ORM\Index(name="idCommande", columns={"idCommande"})})
 * @ORM\Entity
 */
class Compose
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdProduit_", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idproduit;

    /**
     * @var int
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idcommande;


}
