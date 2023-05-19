<?php

namespace App\Entity;

use App\Repository\HabitacionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HabitacionRepository::class)
 * @ORM\Table(name="Habitacion")
 */
class Habitacion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id = null;

    /**
     * @ORM\Column(length=1)
     */
    private ?string $letra = null;

    /**
     * @ORM\Column
     */
    private ?int $numeroModulo = null;

    /**
     * @ORM\OneToMany(mappedBy="habitacion", targetEntity=Alumno::class)
     */
    private Collection $alumnos;

    /**
     * @ORM\ManyToOne(targetEntity=Modulo::class, inversedBy="habitaciones")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Modulo $modulo = null;

    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLetra(): ?string
    {
        return $this->letra;
    }

    public function setLetra(string $letra): self
    {
        $this->letra = $letra;

        return $this;
    }

    public function getNumeroModulo(): ?int
    {
        return $this->numeroModulo;
    }

    public function setNumeroModulo(int $numeroModulo): self
    {
        $this->numeroModulo = $numeroModulo;

        return $this;
    }

    /**
     * @return Collection<int, Alumno>
     */
    public function getAlumnos(): Collection
    {
        return $this->alumnos;
    }

    public function addAlumno(Alumno $alumno): self
    {
        if (!$this->alumnos->contains($alumno)) {
            $this->alumnos->add($alumno);
            $alumno->setHabitacion($this);
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): self
    {
        if ($this->alumnos->removeElement($alumno)) {
            // set the owning side to null (unless already changed)
            if ($alumno->getHabitacion() === $this) {
                $alumno->setHabitacion(null);
            }
        }

        return $this;
    }


    public function getModulo(): ?Modulo
    {
        return $this->modulo;
    }

    public function setModulo(?Modulo $modulo): self
    {
        $this->modulo = $modulo;

        return $this;
    }
}
