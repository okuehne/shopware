<?php

namespace Okuehne\Shopware\Entity;

use Doctrine\ORM\Mapping as ORM;
use Okuehne\Shopware\Repository\StoreRepository;

#[ORM\Entity(repositoryClass: StoreRepository::class)]
class Store
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column(length: 255)]
    private ?string $clientId;

    #[ORM\Column(length: 255)]
    private ?string $clientSecret;

    #[ORM\Column(length: 255)]
    private ?string $clientHost;

    #[ORM\Column(length: 255)]
    private ?string $test;

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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): static
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function setClientSecret(string $clientSecret): static
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    public function getClientHost(): string
    {
        return $this->clientHost;
    }

    public function setClientHost(string $clientHost): static
    {
        $this->clientHost = $clientHost;

        return $this;
    }
}
