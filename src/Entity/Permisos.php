<?php

namespace App\Entity;

use App\Repository\PermisosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PermisosRepository::class)]
class Permisos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idAlumno = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $fechaInicio = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $fechaFin = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $motivo = null;

    #[ORM\Column(length: 255)]
    private ?string $autoriza = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAlumno(): ?string
    {
        return $this->idAlumno;
    }

    public function setIdAlumno(string $idAlumno): self
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeImmutable
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeImmutable $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeImmutable
    {
        return $this->fechaFin;
    }

    public function setFechaFin(\DateTimeImmutable $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

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

    public function getAutoriza(): ?string
    {
        return $this->autoriza;
    }

    public function setAutoriza(string $autoriza): self
    {
        $this->autoriza = $autoriza;

        return $this;
    }
}
