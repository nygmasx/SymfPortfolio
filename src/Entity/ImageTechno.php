<?php

namespace App\Entity;

use App\Repository\ImageTechnoRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation\Uploadable;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;

#[ORM\Entity(repositoryClass: ImageTechnoRepository::class)]
#[Uploadable]
class ImageTechno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[UploadableField(mapping: 'techno', fileNameProperty: 'nom',size: 'taille',)]
    private ?File $file =null;

    #[ORM\ManyToOne(inversedBy: 'image')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Techno $techno = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $taille = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @return File|null
     */
    public function getFile(): ?File
    {
        return $this->file;
    }

    /**
     * @param File|null $file
     */
    public function setFile(?File $file): self
    {
        $this->file = $file;

        if(null !== $file){
            $this->createdAt = new \DateTimeImmutable();
        }
        return $this;
    }


    public function getTechno(): ?Techno
    {
        return $this->techno;
    }

    public function setTechno(?Techno $techno): static
    {
        $this->techno = $techno;

        return $this;
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

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
