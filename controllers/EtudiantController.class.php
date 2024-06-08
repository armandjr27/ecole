<?php
require_once 'models/EtudiantService.class.php';
require_once 'models/ClasseService.class.php';
require_once 'Controllers.class.php';
class EtudiantController extends Controllers
{
    private $etudiantService;

    private $classeService;

    public function __construct()
    {
        $this->etudiantService = new EtudiantService();
        $this->classeService   = new ClasseService();
    }
    
    public function show($view, $data)
    {
        $etudiant  = isset($data['etudiant']) ? $data['etudiant'] : '';
        $etudiants = isset($data['etudiants']) ? $data['etudiants'] : '';
        $classes   = isset($data['classes']) ? $data['classes'] : '';

        require_once 'views/etudiant/' . $view . '.view.php';
    }
    public function afficherEtudiant()
    {
        $idEtudiant = $this->test_input(isset($_GET['id']) ? $_GET['id'] : 0);

        $this->show('infoEtudiant', ['etudiant' => $this->etudiantService->getEtudiant($idEtudiant)]);
    }

    public function affichageEtudiants()
    {
        $data = [
            'etudiants' => $this->etudiantService->getEtudiants(),
            'classes'   => $this->classeService->getClasses(),
        ];
        
        $this->show('listeEtudiants', $data);
    }

    public function afficherAjoutEtudiant()
    {
        $this->show('ajoutEtudiant', ['classes' => $this->classeService->getClasses()]);
    }

    public function afficherUpdateEtudiant()
    {
        $idEtudiant = $this->test_input(isset($_GET['id']) ? $_GET['id'] : 0);

        $data = [
            'etudiant' => $this->etudiantService->getEtudiant($idEtudiant),
            'classes'  => $this->classeService->getClasses(),
        ];

        $this->show('updateEtudiant', $data);
    }

    public function sauvegarderEtudiant($id = null)
    {
        $nom    = $this->test_input($_POST['nom']);
        $prenom = $this->test_input($_POST['prenom']);
        $classe = $this->test_input($_POST['classe']);

        if ($id)
        {
            $idEtudiant = $this->test_input($id);

            $this->etudiantService->updateEtudiant($nom, $prenom, $classe, $idEtudiant);

            //$_SESSION['updated'] = " Les infos de l'étudiant a bien été mise à jour !";
        }
        else
        {
            //$_SESSION['added'] = " Le nouvel étudiant a bien été ajouté !";
            
            return $this->etudiantService->insertEtudiant($nom, $prenom, $classe);
        }

        //header('location:http://localhost/ecole/?page=liste-etudiant', 302);
    }
    
    public function supprimerEtudiant($id)
    {
        $idEtudiant = $this->test_input($id);

        $this->etudiantService->deleteEtudiant($idEtudiant);

        //$_SESSION['deleted'] = " L'étudiant a bien été supprimer !";

        //header('location:http://localhost/ecole/?page=liste-etudiant', 302);
    }
}
