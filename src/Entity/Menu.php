<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
class Menu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?int $nombre_personne_min = null;

    #[ORM\Column]
    private ?float $prix_par_personne = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $regime = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombrePersonneMin(): ?int
    {
        return $this->nombre_personne_min;
    }

    public function setNombrePersonneMin(int $nombre_personne_min): static
    {
        $this->nombre_personne_min = $nombre_personne_min;

        return $this;
    }

    public function getPrixParPersonne(): ?float
    {
        return $this->prix_par_personne;
    }

    public function setPrixParPersonne(float $prix_par_personne): static
    {
        $this->prix_par_personne = $prix_par_personne;

        return $this;
    }

    public function getRegime(): ?string
    {
        return $this->regime;
    }

    public function setRegime(?string $regime): static
    {
        $this->regime = $regime;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
