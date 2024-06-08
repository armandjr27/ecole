<?php
class Etudiant
{
    private $idEtudiant;
    private $nom;
    private $prenom;
    private $classe_id;
    private $classe;

    public function __construct($idEtudiant, $nom, $prenom, $classe_id, $classe)
    {
        $this->idEtudiant = $idEtudiant;
        $this->nom        = $nom;
        $this->prenom     = $prenom;
        $this->classe_id  = $classe_id;
        $this->classe     = $classe;
    }

    /**
     * Get the value of idEtudiant
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set the value of idEtudiant
     */
    public function setIdEtudiant($idEtudiant): self
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of classe_id
     */
    public function getClasseId()
    {
        return $this->classe_id;
    }

    /**
     * Set the value of classe_id
     */
    public function setClasseId($classe_id): self
    {
        $this->classe_id = $classe_id;

        return $this;
    }

    /**
     * Get the value of classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     */
    public function setClasse($classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}