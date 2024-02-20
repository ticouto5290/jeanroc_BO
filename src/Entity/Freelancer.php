<?php

namespace App\Entity;

use App\Repository\FreelancerRepository;
use Doctrine\DBAL\Types\Types;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

use Symfony\Component\Serializer\Annotation\Groups;

#[ApiResource(
        operations: [
            new Get(normalizationContext: ['groups' => 'Freelancer:item']),
            new GetCollection(normalizationContext: ['groups' => 'Freelancer:list'])
        ],
        // order: ['year' => 'DESC', 'city' => 'ASC'],
        paginationEnabled: false,
)]

#[ORM\Entity(repositoryClass: FreelancerRepository::class)]
#[Broadcast]
class Freelancer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]

    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?string $Name = null;

    // #[ORM\Column(nullable: true)]
    // #[Groups(['Freelancer:list', 'Freelancer:item'])]
    // private ?array $data = null;

    #[ORM\Column(type: "json", nullable: true)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?array $data = null;

    #[ORM\Column(length: 255)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?string $last_name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?string $Email = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?int $status = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?array $files = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?string $description = null;

    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?\DateTimeInterface $Created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['Freelancer:list', 'Freelancer:item'])]
    private ?\DateTimeInterface $Updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getFiles(): ?array
    {
        return $this->files;
    }

    public function setFiles(?array $files): static
    {
        $this->files = $files;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->Created_at;
    }

    public function setCreatedAt(\DateTimeInterface $Created_at): self
    {
        $this->Created_at = $Created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->Updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $Updated_at): self
    {
        $this->Updated_at = $Updated_at;

        return $this;
    }
}
