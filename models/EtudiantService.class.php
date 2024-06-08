<?php
require_once 'models/DBConnection.class.php';
require_once 'models/Etudiant.class.php';

class EtudiantService extends DBConnection
{
    public function getEtudiant($id)
    {
        $request = $this->getPdo()->prepare(
            'SELECT e.idEtudiant AS idEtudiant, e.nom AS nom, e.prenom AS prenom, c.idClasse AS classe_id, c.nom AS classe
             FROM etudiants AS e
             INNER JOIN classes AS c ON c.idClasse = e.classe_id
             WHERE idEtudiant = ?');
        $request->execute([$id]);
        $etudiantData = $request->fetch(PDO::FETCH_ASSOC);

        if (!$etudiantData) return;

        $etudiantObjet = new Etudiant($etudiantData['idEtudiant'], $etudiantData['nom'],$etudiantData['prenom'], $etudiantData['classe_id'], $etudiantData['classe']);

        return $etudiantObjet;
    }
    
    public function getEtudiants()
    {
        $request = $this->getPdo()->query(
            'SELECT e.idEtudiant AS idEtudiant, e.nom AS nom, e.prenom AS prenom, c.idClasse AS classe_id, c.nom AS classe
             FROM etudiants AS e
             INNER JOIN classes AS c ON c.idClasse = e.classe_id ');
        $request->execute();
        $listeEtudiantData = $request->fetchAll(PDO::FETCH_ASSOC);
        $listeObjetEtudiant = [];

        foreach ($listeEtudiantData as $etudiant) 
        {
            $listeObjetEtudiant[] = new Etudiant($etudiant['idEtudiant'], $etudiant['nom'],$etudiant['prenom'], $etudiant['classe_id'], $etudiant['classe']);
        }

        return $listeObjetEtudiant;
    }

    public function insertEtudiant($nom, $prenom, $classe) : int
    {
        $request = $this->getPdo()->prepare('INSERT INTO etudiants (nom, prenom, classe_id) VALUES (?, ?, ?)');
        $request->execute([$nom, $prenom, $classe]);
        return $this->getPdo()->lastInsertId();
    }

    public function updateEtudiant($nom, $prenom, $classe, $idEtudiant)
    {
        $request = $this->getPdo()->prepare('UPDATE etudiants SET nom = ?, prenom = ?, classe_id = ? WHERE idEtudiant = ?');
        $request->execute([$nom, $prenom, $classe, $idEtudiant]);
    }

    public function deleteEtudiant($idEtudiant)
    {
        $request = $this->getPdo()->prepare('DELETE FROM etudiants WHERE idEtudiant = ?');
        $request->execute([$idEtudiant]);
    }

}