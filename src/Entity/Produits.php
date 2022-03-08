<?php

namespace App\Entity;



use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProduitsRepository")
 * @ApiResource(
 * normalizationContext={"groups"={"product:read"}},
 * collectionOperations={"get",
 *  "post"={
 *      "controller"=App\Controller\Api\ProduitCreateController::class,
 *      "denormalization_context"={"groups"={"product:create"}},
 *      "validation_groups"={Produits::class, "validationGroups"}
 *  }
 * },
 * itemOperations={
 *  "get"={
 *      "normalization_context"={"product:read"}
 *  },
 * "put"={
 *     "denormalization_context"={"groups"={"product:edit"}}
 *  },
 *  "delete"={
 *      "denormalization_context"={"groups"={"product:delete"}}
 *   }
 *  }
 * )
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"product:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "product:edit", "product:create"})
     */
    private $titre;


    /**
     * @ORM\Column(type="simple_array")
     * @Groups({"product:read", "product:edit", "product:create"})
     */
    private $ingredients = [];

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "product:create"})
     *
     */
    private $ean;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $kcal;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $kj;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $matieresGrasses;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $acidesGrasSatures;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $glucides;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     */
    private $sucres;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $fibres;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $proteines;

    /**
     * @ORM\Column(type="float")
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $sel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"product:read", "product:edit", "product:create"})
     *
     */
    private $photoUrl;

    public static function validationGroups(self $produit)
    {
        if($produit->glucides < 500){
            return ['product:create', 'product:edit'];
        }else{
            dd('false');
        }
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photoUrl;
    }

    public function setPhotoUrl(string $photoUrl): self
    {
        $this->photoUrl = $photoUrl;

        return $this;
    }


    public function getIngredients(): ?array
    {
        return $this->ingredients;
    }

    public function setIngredients(array $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(string $ean): self
    {
        $this->ean = $ean;

        return $this;
    }

    public function getKcal(): ?float
    {
        return $this->kcal;
    }

    public function setKcal(float $kcal): self
    {
        $this->kcal = $kcal;

        return $this;
    }

    public function getKj(): ?float
    {
        return $this->kj;
    }

    public function setKj(float $kj): self
    {
        $this->kj = $kj;

        return $this;
    }

    public function getMatieresGrasses(): ?float
    {
        return $this->matieresGrasses;
    }

    public function setMatieresGrasses(float $matieresGrasses): self
    {
        $this->matieresGrasses = $matieresGrasses;

        return $this;
    }

    public function getAcidesGrasSatures(): ?float
    {
        return $this->acidesGrasSatures;
    }

    public function setAcidesGrasSatures(float $acidesGrasSatures): self
    {
        $this->acidesGrasSatures = $acidesGrasSatures;

        return $this;
    }

    public function getGlucides(): ?float
    {
        return $this->glucides;
    }

    public function setGlucides(float $glucides): self
    {
        $this->glucides = $glucides;

        return $this;
    }

    public function getSucres(): ?float
    {
        return $this->sucres;
    }

    public function setSucres(float $sucres): self
    {
        $this->sucres = $sucres;

        return $this;
    }

    public function getFibres(): ?float
    {
        return $this->fibres;
    }

    public function setFibres(float $fibres): self
    {
        $this->fibres = $fibres;

        return $this;
    }

    public function getProteines(): ?float
    {
        return $this->proteines;
    }

    public function setProteines(float $proteines): self
    {
        $this->proteines = $proteines;

        return $this;
    }

    public function getSel(): ?float
    {
        return $this->sel;
    }

    public function setSel(float $sel): self
    {
        $this->sel = $sel;

        return $this;
    }

}
