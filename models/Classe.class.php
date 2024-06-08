<?php
Class Classe
{
    private $idClasse;
    private $nom;
    private $nombreEtudiant;
    
    public function __construct($idClasse, $nom, $nombreEtudiant)
    {
        $this->idClasse       = $idClasse;
        $this->nom            = $nom;
        $this->nombreEtudiant = $nombreEtudiant;
    }

    /**
     * Get the value of idClasse
     */
    public function getIdClasse()
    {
        return $this->idClasse;
    }

    /**
     * Set the value of idClasse
     */
    public function setIdClasse($idClasse): self
    {
        $this->idClasse = $idClasse;

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
     * Get the value of nombreEtudiant
     */
    public function getNombreEtudiant()
    {
        return $this->nombreEtudiant;
    }

    /**
     * Set the value of nombreEtudiant
     */
    public function setNombreEtudiant($nombreEtudiant): self
    {
        $this->nombreEtudiant = $nombreEtudiant;

        return $this;
    }
}