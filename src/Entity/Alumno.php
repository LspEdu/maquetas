<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=AlumnoRepository::class)
 */
class Alumno
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
     * @ORM\Column(length=255)
     */
    private ?string $apellido1 = null;

    /**
     * @ORM\Column(length=255, nullable=true)
     */
    private ?string $apellido2 = null;

    /**
     * @ORM\Column
     */
    private ?int $tlf1 = null;

    /**
     * @ORM\Column(nullable=true)
     */
    private ?int $tlf2 = null;

    /**
     * @ORM\Column(length=255)
     */
    private ?string $curso = null;

    /**
     * @ORM\Column
     */
    private ?int $edad = null;

    /**
     * @ORM\ManyToOne(inversedBy="alumnos")
     */
    private ?Habitacion $habitacion = null;

    
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

    public function getApellido1(): ?string
    {
        return $this->apellido1;
    }

    public function setApellido1(string $apellido1): self
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->apellido2;
    }

    public function setApellido2(?string $apellido2): self
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    public function getTlf1(): ?int
    {
        return $this->tlf1;
    }

    public function setTlf1(int $tlf1): self
    {
        $this->tlf1 = $tlf1;

        return $this;
    }

    public function getTlf2(): ?int
    {
        return $this->tlf2;
    }

    public function setTlf2(?int $tlf2): self
    {
        $this->tlf2 = $tlf2;

        return $this;
    }

    public function getCurso(): ?string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    public function getHabitacion(): ?Habitacion
    {
        return $this->habitacion;
    }

    public function setHabitacion(?Habitacion $habitacion): self
    {
        $this->habitacion = $habitacion;

        return $this;
    }
}
