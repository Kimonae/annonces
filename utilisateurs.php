<?php


class users
{

    private $id;

    private $login;

    private $password;

    private $admail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }


    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }


    public function getUsername(): string
    {
        return (string) $this->login;
    }




    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAdmail(): string
    {
        return $this->$admail;
    }

    public function setAdmail(string $admail): self
    {
        $this->admail = $admail;

        return $this;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UtilisateursInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
