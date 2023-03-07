<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * DétailsCommande
 *
 * @ORM\Table(name="détails_commande", indexes={@ORM\Index(name="IdPanier", columns={"IdPanier"})})
 * @ORM\Entity
 */
class DétailsCommande
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
     * @ORM\Column(name="IdPanier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpanier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantité", type="integer", nullable=true)
     */
    private $quantité;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise;


}
