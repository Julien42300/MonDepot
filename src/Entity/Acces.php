<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Utilisateur_ID;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Document_ID;

    /**
     * @ORM\ManyToOne(targetEntity=Autorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Autorisation_ID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurID(): ?Utilisateur
    {
        return $this->Utilisateur_ID;
    }

    public function setUtilisateurID(?Utilisateur $Utilisateur_ID): self
    {
        $this->Utilisateur_ID = $Utilisateur_ID;

        return $this;
    }

    public function getDocumentID(): ?Document
    {
        return $this->Document_ID;
    }

    public function setDocumentID(?Document $Document_ID): self
    {
        $this->Document_ID = $Document_ID;

        return $this;
    }

    public function getAutorisationID(): ?Autorisation
    {
        return $this->Autorisation_ID;
    }

    public function setAutorisationID(?Autorisation $Autorisation_ID): self
    {
        $this->Autorisation_ID = $Autorisation_ID;

        return $this;
    }
}
