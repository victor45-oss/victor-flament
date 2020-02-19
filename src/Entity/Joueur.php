<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JoueurRepository")
 */
class Joueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $clubs;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $poste;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pays;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $palmares;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $selections;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $presentation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $identite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getphoto(): ?string
    {
        return $this->photo;
    }

    public function setphoto(?string $photo): self
    {
        $this->photo= $photo;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getClubs(): ?string
    {
        return $this->clubs;
    }

    public function setClubs(?string $clubs): self
    {
        $this->clubs = $clubs;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getPalmares(): ?string
    {
        return $this->palmares;
    }

    public function setPalmares(?string $palmares): self
    {
        $this->palmares = $palmares;

        return $this;
    }

    public function getSelections(): ?string
    {
        return $this->selections;
    }

    public function setSelections(?string $selections): self
    {
        $this->selections = $selections;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(?string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getIdentite(): ?string
    {
        return $this->identite;
    }

    public function setIdentite(?string $identite): self
    {
        $this->identite = $identite;

        return $this;
    }
}
