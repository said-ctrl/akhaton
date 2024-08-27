<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $liens = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $id_Produits = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLiens(): ?string
    {
        return $this->liens;
    }

    public function setLiens(string $liens): static
    {
        $this->liens = $liens;

        return $this;
    }

    public function getIdProduits(): ?string
    {
        return $this->id_Produits;
    }

    public function setIdProduits(string $id_Produits): static
    {
        $this->id_Produits = $id_Produits;

        return $this;
    }
}
