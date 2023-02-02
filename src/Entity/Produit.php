<?php

namespace MyBundle;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdProduit_", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom", type="string", length=150, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prix", type="decimal", precision=5, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Référence", type="string", length=50, nullable=true)
     */
    private $référence;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Photo", type="string", length=150, nullable=true)
     */
    private $photo;


}
