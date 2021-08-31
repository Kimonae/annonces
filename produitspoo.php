<?php


class produits {

    private $id;
    private $titre;
    private $photo;
    private $description;
    private $categorie;
    private $prix;
    private $datepublication;
    private $lieu;







public function __construct($id, $titre, $photo, $description, $categorie, $prix, $datepublication, $lieu)
{

            $this->id = $id;
            $this->titre = $titre;
            $this->photo = $photo;
            $this->description = $description;
            $this->categorie = $categorie;
            $this->prix = $prix;
            $this->datepublication = $datepublication;
            $this->lieu = $lieu;
}



public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
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

public function getPhoto(): ?string
{
    return $this->photo;
}

public function setPhoto(string $photo): self
{
    $this->photo = $photo;

    return $this;
}


public function getDescription(): ?string
{
    return $this->description;
}

public function setDescription(string $description): self
{
    $this->description = $description;

    return $this;
}


public function getCategorie(): ?string
{
    return $this->categorie;
}

public function setCategorie(string $categorie): self
{
    $this->categorie = $categorie;

    return $this;
}


public function getPrix(): ?int
{
    return $this->prix;
}

public function setPrix(int $prix): self
{
    $this->prix = $prix;

    return $this;
}


public function getDatepiblication(): ?string
{
    return $this->datepublication;
}

public function setDatepiblication(string $datepublication): self
{
    $this->datepiblication = $datepublication;

    return $this;
}

public function getLieu(): ?string
{
    return $this->lieu;
}

public function setLieu(int $lieu): self
{
    $this->lieu = $lieu;

    return $this;
}

}