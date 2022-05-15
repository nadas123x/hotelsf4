<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idHotel;

    /**
     * @ORM\Column(type="date")
     */
    private $datedepart;

    /**
     * @ORM\Column(type="date")
     */
    private $datearriv;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbrePersonnes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdHotel(): ?int
    {
        return $this->idHotel;
    }

    public function setIdHotel(int $idHotel): self
    {
        $this->idHotel = $idHotel;

        return $this;
    }

    public function getDatedepart(): ?\DateTimeInterface
    {
        return $this->datedepart;
    }

    public function setDatedepart(\DateTimeInterface $datedepart): self
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    public function getDatearriv(): ?\DateTimeInterface
    {
        return $this->datearriv;
    }

    public function setDatearriv(\DateTimeInterface $datearriv): self
    {
        $this->datearriv = $datearriv;

        return $this;
    }

    public function getNbrePersonnes(): ?int
    {
        return $this->NbrePersonnes;
    }

    public function setNbrePersonnes(int $NbrePersonnes): self
    {
        $this->NbrePersonnes = $NbrePersonnes;

        return $this;
    }
}
