<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\TechnoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: TechnoRepository::class)]
#[ApiResource(formats: ["json"])]
#[ApiFilter(SearchFilter::class, properties: ["nom" => "ipartial"])]
class Techno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read:Projet'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read:Projet'])]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'techno', targetEntity: ImageTechno::class, cascade: ['persist'], orphanRemoval: true)]
    #[Groups(['read:Projet'])]
    private Collection $image;

    #[ORM\ManyToMany(targetEntity: Projet::class, mappedBy: 'technos')]
    private Collection $projets;

    public function __construct()
    {
        $this->image = new ArrayCollection();
        $this->projets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, ImageTechno>
     */
    public function getImage(): Collection
    {
        return $this->image;
    }

    public function addImage(ImageTechno $image): static
    {
        if (!$this->image->contains($image)) {
            $this->image->add($image);
            $image->setTechno($this);
        }

        return $this;
    }

    public function removeImage(ImageTechno $image): static
    {
        if ($this->image->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getTechno() === $this) {
                $image->setTechno(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Projet>
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Projet $projet): static
    {
        if (!$this->projets->contains($projet)) {
            $this->projets->add($projet);
            $projet->addTechno($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): static
    {
        if ($this->projets->removeElement($projet)) {
            $projet->removeTechno($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNom(); // Supposons que Techno ait une méthode getName()
    }


}
