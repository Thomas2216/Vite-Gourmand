<?php

namespace App\Entity;

use App\Repository\PlatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatRepository::class)]
class Plat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_plat = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private mixed $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $allergene = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPlat(): ?string
    {
        return $this->nom_plat;
    }

    public function setNomPlat(string $nom_plat): static
    {
        $this->nom_plat = $nom_plat;

        return $this;
    }

    public function getPhoto(): mixed
    {
        return $this->photo;
    }

    public function setPhoto(mixed $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getAllergene(): ?string
    {
        return $this->allergene;
    }

    public function setAllergene(?string $allergene): static
    {
        $this->allergene = $allergene;

        return $this;
    }
}
