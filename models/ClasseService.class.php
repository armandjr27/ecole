<?php
require_once 'models/DBConnection.class.php';
require_once 'models/Classe.class.php';

class ClasseService extends DBConnection
{
    private function _getNombreEtudiant($id)
    {
        $request = $this->getPdo()->prepare(
            'SELECT COUNT(*) AS nombreEtudiant 
            FROM classes AS c 
            INNER JOIN etudiants AS e ON e.classe_id = c.idClasse
            WHERE c.idClasse = ?
            GROUP BY c.nom');
        $request->execute([$id]);
        $classeData = $request->fetch(PDO::FETCH_ASSOC);

        return isset($classeData['nombreEtudiant']) ? $classeData['nombreEtudiant'] : 0;
    }

    public function getClasse($id)
    {
        $request = $this->getPdo()->prepare('SELECT * FROM classes WHERE idClasse = ? ORDER BY idClasse DESC');
        $request->execute([$id]);
        $classeData = $request->fetch(PDO::FETCH_ASSOC);

        if (!$classeData) return;

        $classeObjet = new Classe($classeData['idClasse'], $classeData['nom'], $this->_getNombreEtudiant($classeData['idClasse']));

        return  $classeObjet;
    }

    public function getClasses()
    {
        $request = $this->getPdo()->query('SELECT * FROM classes ORDER BY idClasse DESC');
        $request->execute();
        $listeClasseData = $request->fetchAll(PDO::FETCH_ASSOC);

        $listeClasseObjet = [];
        
        foreach ($listeClasseData as $classe) 
        {
            $listeClasseObjet[] = new Classe($classe['idClasse'], $classe['nom'], $this->_getNombreEtudiant($classe['idClasse']));
        }

        return  $listeClasseObjet;
    }

    public function insertClasse($nom)
    {
        $request = $this->getPdo()->prepare('INSERT INTO classes (nom) VALUES (?)');
        $request->execute([$nom]);
    }

    public function updateClasse($nom, $idClasse)
    {
        $request = $this->getPdo()->prepare('UPDATE classes SET nom = ? WHERE idClasse = ?');
        $request->execute([$nom, $idClasse]);
    }

    public function deleteClasse($idClasse)
    {
        $request = $this->getPdo()->prepare('DELETE From classes WHERE idClasse = ?');
        $request->execute([$idClasse]);
    }
}