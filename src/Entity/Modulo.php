<?php

namespace App\Entity;

use App\Repository\ModuloRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ModuloRepository::class)
 */
class Modulo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id = null;

    /**
     * @ORM\Column
     */
    private ?int $numeroModulo = null;

    /**
     * @ORM\OneToMany(mappedBy="modulo", targetEntity=Habitacion::class, orphanRemoval=true)
     */
    private Collection $habitaciones;

    public function __construct()
    {
        $this->habitaciones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection<int, Habitacion>
     */
    public function getHabitaciones(): Collection
    {
        return $this->habitaciones;
    }

    public function addHabitacione(Habitacion $habitacione): self
    {
        if (!$this->habitaciones->contains($habitacione)) {
            $this->habitaciones->add($habitacione);
            $habitacione->setModulo($this);
        }

        return $this;
    }

    public function removeHabitacione(Habitacion $habitacione): self
    {
        if ($this->habitaciones->removeElement($habitacione)) {
            // set the owning side to null (unless already changed)
            if ($habitacione->getModulo() === $this) {
                $habitacione->setModulo(null);
            }
        }

        return $this;
    }
}