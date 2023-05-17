<?php

namespace App\Entity;

use App\Repository\SalidaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalidaRepository::class)
 */
class Salida
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id = null;


    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private ?\DateTimeImmutable $fecha_llegada = null;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private ?\DateTimeImmutable $fecha_salida = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $id_Alumno = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $id_Educador = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaLlegada(): ?\DateTimeImmutable
    {
        return $this->fecha_llegada;
    }

    public function setFechaLlegada(\DateTimeImmutable $fecha_llegada): self
    {
        $this->fecha_llegada = $fecha_llegada;

        return $this;
    }

    public function getFechaSalida(): ?\DateTimeImmutable
    {
        return $this->fecha_salida;
    }

    public function setFechaSalida(\DateTimeImmutable $fecha_salida): self
    {
        $this->fecha_salida = $fecha_salida;

        return $this;
    }

    public function getIdAlumno(): ?string
    {
        return $this->id_Alumno;
    }

    public function setIdAlumno(string $id_Alumno): self
    {
        $this->id_Alumno = $id_Alumno;

        return $this;
    }

    public function getIdEducador(): ?string
    {
        return $this->id_Educador;
    }

    public function setIdEducador(string $id_Educador): self
    {
        $this->id_Educador = $id_Educador;

        return $this;
    }
}
