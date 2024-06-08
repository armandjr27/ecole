<?php
require_once 'models/ClasseService.class.php';
require_once 'Controllers.class.php';

class ClasseController extends Controllers
{
    private $classeService;

    public function __construct() 
    {
        $this->classeService = new ClasseService();
    }

    public function show($view, $data = [])
    {
        $classe  = isset($data['classe']) ? $data['classe'] : '';
        $classes = isset($data['classes']) ? $data['classes'] : '';

        require_once 'views/classe/' . $view . '.view.php';
    }

    public function afficherClasse()
    {
        $idClasse = $this->test_input(isset($_GET['id']) ? $_GET['id'] : 0);

        $this->show('infoClasse', ['classe' => $this->classeService->getClasse($idClasse)]);
    }

    public function affichageClasses()
    {
        $this->show('listeClasses', ['classes' => $this->classeService->getClasses()]);
    }

    public function afficherAjoutClasse()
    {
        $this->show('ajoutClasse');
    }

    public function afficherUpdateClasse()
    {
        $idClasse = $this->test_input(isset($_GET['id']) ? $_GET['id'] : 0);

        $this->show('updateClasse', ['classe' => $this->classeService->getClasse($idClasse)]);
    }

    public function sauvegarderClasse($id = null)
    {
        $nom = $this->test_input($_POST['nom']);

        if ($id)
        {
            $idClasse = $this->test_input($id);

            $this->classeService->updateClasse($nom, $idClasse);

            $_SESSION['updated'] = " Les infos de la classe a bien été mise à jour !";
        }
        else
        {
            $this->classeService->insertClasse($nom);

            $_SESSION['added'] = " La nouvelle classe a bien été ajouté !";
        }

        header('location:http://localhost/ecole/?page=liste-classe', 302);
    }
    
    public function supprimerClasse($id)
    {
        $idClasse = $this->test_input($id);

        $this->classeService->deleteClasse($idClasse);

        $_SESSION['deleted'] = " La classe a bien été supprimer !";

        header('location:http://localhost/ecole/?page=liste-classe', 302);
    }
}