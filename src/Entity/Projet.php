<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProjetRepository::class)]
#[ApiResource(formats: ["json"], normalizationContext: ['groups' => ['read:collection']],
operations: [
    new GetCollection(normalizationContext: ['groups' => ['read:collection', 'read:Projet']]),
    new Get(normalizationContext: ['groups' => ['read:collection', 'read:Projet']])])]
class Projet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:collection'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:collection'])]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['read:collection'])]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'projet', targetEntity: ImageProjet::class, cascade: ['persist'], orphanRemoval: true)]
    #[Groups(['read:Projet'])]
    private Collection $image;

    #[ORM\ManyToMany(targetEntity: Techno::class, inversedBy: 'projets')]
    #[Groups(['read:Projet'])]
    private Collection $technos;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['read:Projet'])]
    private ?string $lien = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:collection'])]
    private ?string $date = null;

    public function __construct()
    {
        $this->image = new ArrayCollection();
        $this->technos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, ImageProjet>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    /**
     * @param Collection $image
     */
    public function setImage(Collection $image): void
    {
        $this->image = $image;
    }

    public function addImage(ImageProjet $image): static
    {
        if (!$this->image->contains($image)) {
            $this->image->add($image);
            $image->setProjet($this);
        }

        return $this;
    }

    public function removeImage(ImageProjet $image): static
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProjet() === $this) {
                $image->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Techno>
     */
    public function getTechnos(): Collection
    {
        return $this->technos;
    }

    public function addTechno(Techno $techno): static
    {
        if (!$this->technos->contains($techno)) {
            $this->technos->add($techno);
        }

        return $this;
    }

    public function removeTechno(Techno $techno): static
    {
        $this->technos->removeElement($techno);

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): static
    {
        $this->lien = $lien;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }
}
