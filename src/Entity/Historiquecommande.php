<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Historiquecommande
 *
 * @ORM\Table(name="historiquecommande")
 * @ORM\Entity
 */
class Historiquecommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PrixTotal", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $prixtotal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateCommande", type="date", nullable=true)
     */
    private $datecommande;


}
