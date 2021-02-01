<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire")
 * @ORM\Entity
 */
class Horaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_matin", type="time", nullable=false)
     */
    private $debutMatin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_matin", type="time", nullable=false)
     */
    private $finMatin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut_apm", type="time", nullable=false)
     */
    private $debutApm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_apm", type="time", nullable=false)
     */
    private $finApm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebutMatin(): ?\DateTimeInterface
    {
        return $this->debutMatin;
    }

    public function setDebutMatin(\DateTimeInterface $debutMatin): self
    {
        $this->debutMatin = $debutMatin;

        return $this;
    }

    public function getFinMatin(): ?\DateTimeInterface
    {
        return $this->finMatin;
    }

    public function setFinMatin(\DateTimeInterface $finMatin): self
    {
        $this->finMatin = $finMatin;

        return $this;
    }

    public function getDebutApm(): ?\DateTimeInterface
    {
        return $this->debutApm;
    }

    public function setDebutApm(\DateTimeInterface $debutApm): self
    {
        $this->debutApm = $debutApm;

        return $this;
    }

    public function getFinApm(): ?\DateTimeInterface
    {
        return $this->finApm;
    }

    public function setFinApm(\DateTimeInterface $finApm): self
    {
        $this->finApm = $finApm;

        return $this;
    }


}
