<?php

namespace App\Entity;

use App\Repository\LienRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LienRepository::class)
 */
class Lien
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
    private $client_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $materiel_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientId(): ?int
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getMaterielId(): ?int
    {
        return $this->materiel_id;
    }

    public function setMaterielId(int $materiel_id): self
    {
        $this->materiel_id = $materiel_id;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
