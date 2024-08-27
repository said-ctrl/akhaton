<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $prix = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $Quantité = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Vendeur = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $Poids = null;

    #[ORM\Column(length: 100)]
    private ?string $Reference = null;

    #[ORM\Column(length: 100)]
    private ?string $Categorie = null;

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

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getQuantité(): ?string
    {
        return $this->Quantité;
    }

    public function setQuantité(?string $Quantité): static
    {
        $this->Quantité = $Quantité;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->Vendeur;
    }

    public function setVendeur(string $Vendeur): static
    {
        $this->Vendeur = $Vendeur;

        return $this;
    }

    public function getPoids(): ?string
    {
        return $this->Poids;
    }

    public function setPoids(string $Poids): static
    {
        $this->Poids = $Poids;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->Categorie;
    }

    public function setCategorie(string $Categorie): static
    {
        $this->Categorie = $Categorie;

        return $this;
    }

    
}

