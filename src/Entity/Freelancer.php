<?php

namespace App\Entity;

use App\Repository\FreelancerRepository;
use Doctrine\DBAL\Types\Types;

use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;

use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: FreelancerRepository::class)]
#[ORM\Table(name: 'freelancer')]
#[Broadcast]
class Freelancer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(type: "json", nullable: true)]
    private ?array $data = null;

    #[ORM\Column(length: 255)]
    private ?string $last_name = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\Column(nullable: true)]
    private ?array $files = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;
    

    #[ORM\Column(type: "json", nullable: true)]
    private $skills = [];

    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Updated_at = null;


    public function __construct()
    {
        // Initialize skills as an empty array
        $this->skills = [];
    }

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
        if ($data !== null) {
            $this->data = json_encode($data);
        } else {
            $this->data = null;
        }

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

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(?array $skills): self
    {
        $this->skills = $skills;

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
