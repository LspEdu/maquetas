<?php

namespace App\Entity;

use App\Repository\SalidaMayorEdadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalidaMayorEdadRepository::class)
 */
class SalidaMayorEdad
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $nombre = null;

    /**
     * @ORM\Column(length=9)
     */
    private ?string $dni = null;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private ?\DateTimeImmutable $fechaLlegada = null;

    /**
     * @ORM\Column(type="date_immutable")
     */
    private ?\DateTimeImmutable $fechaSalida = null;

    /**
     * @ORM\Column(type="text")
     */
    private ?string $motivo = null;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getFechaLlegada(): ?\DateTimeImmutable
    {
        return $this->fechaLlegada;
    }

    public function setFechaLlegada(\DateTimeImmutable $fechaLlegada): self
    {
        $this->fechaLlegada = $fechaLlegada;

        return $this;
    }

    public function getFechaSalida(): ?\DateTimeImmutable
    {
        return $this->fechaSalida;
    }

    public function setFechaSalida(\DateTimeImmutable $fechaSalida): self
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }
}
