<?php

namespace App\Entity;

use App\Repository\PersonaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonaRepository::class)]
class Persona
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $Apellido1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Apellido2 = null;

    #[ORM\Column(length: 9)]
    private ?string $DNI = null;

    #[ORM\Column]
    private ?bool $d_hipo = null;

    #[ORM\Column]
    private ?bool $d_cerdo = null;

    #[ORM\Column]
    private ?bool $celiaco = null;

    #[ORM\Column]
    private ?bool $lactosa = null;

    #[ORM\Column]
    private ?bool $cefalopodos = null;

    #[ORM\Column]
    private ?bool $huevo = null;

    #[ORM\Column]
    private ?bool $almuerzo_14 = null;

    #[ORM\Column]
    private ?bool $microondas = null;

    #[ORM\Column]
    private ?bool $picnic = null;

    #[ORM\Column(nullable: true)]
    private ?bool $otras = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $otras_desc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getApellido1(): ?string
    {
        return $this->Apellido1;
    }

    public function setApellido1(string $Apellido1): self
    {
        $this->Apellido1 = $Apellido1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->Apellido2;
    }

    public function setApellido2(?string $Apellido2): self
    {
        $this->Apellido2 = $Apellido2;

        return $this;
    }

    public function getDNI(): ?string
    {
        return $this->DNI;
    }

    public function setDNI(string $DNI): self
    {
        $this->DNI = $DNI;

        return $this;
    }

    public function isDHipo(): ?bool
    {
        return $this->d_hipo;
    }

    public function setDHipo(bool $d_hipo): self
    {
        $this->d_hipo = $d_hipo;

        return $this;
    }

    public function isDCerdo(): ?bool
    {
        return $this->d_cerdo;
    }

    public function setDCerdo(bool $d_cerdo): self
    {
        $this->d_cerdo = $d_cerdo;

        return $this;
    }

    public function isCeliaco(): ?bool
    {
        return $this->celiaco;
    }

    public function setCeliaco(bool $celiaco): self
    {
        $this->celiaco = $celiaco;

        return $this;
    }

    public function isLactosa(): ?bool
    {
        return $this->lactosa;
    }

    public function setLactosa(bool $lactosa): self
    {
        $this->lactosa = $lactosa;

        return $this;
    }

    public function isCefalopodos(): ?bool
    {
        return $this->cefalopodos;
    }

    public function setCefalopodos(bool $cefalopodos): self
    {
        $this->cefalopodos = $cefalopodos;

        return $this;
    }

    public function isHuevo(): ?bool
    {
        return $this->huevo;
    }

    public function setHuevo(bool $huevo): self
    {
        $this->huevo = $huevo;

        return $this;
    }

    public function isAlmuerzo14(): ?bool
    {
        return $this->almuerzo_14;
    }

    public function setAlmuerzo14(bool $almuerzo_14): self
    {
        $this->almuerzo_14 = $almuerzo_14;

        return $this;
    }

    public function isMicroondas(): ?bool
    {
        return $this->microondas;
    }

    public function setMicroondas(bool $microondas): self
    {
        $this->microondas = $microondas;

        return $this;
    }

    public function isPicnic(): ?bool
    {
        return $this->picnic;
    }

    public function setPicnic(bool $picnic): self
    {
        $this->picnic = $picnic;

        return $this;
    }

    public function isOtras(): ?bool
    {
        return $this->otras;
    }

    public function setOtras(?bool $otras): self
    {
        $this->otras = $otras;

        return $this;
    }

    public function getOtrasDesc(): ?string
    {
        return $this->otras_desc;
    }

    public function setOtrasDesc(?string $otras_desc): self
    {
        $this->otras_desc = $otras_desc;

        return $this;
    }
}
