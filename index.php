<?php
session_start();

require_once 'controllers/PageController.class.php';
require_once 'controllers/EtudiantController.class.php';
require_once 'controllers/ClasseController.class.php';

$view = new PageController();
$etudiantController = new EtudiantController();
$classeController = new ClasseController();

if (isset($_GET['page'])) 
{
    $page = strtolower($_GET['page']);

    switch ($page) 
    {
        case 'accueil':
            $view->show($page);
            break;

            /**
             * GESTION D'ETUDIANT
             * Tous les CRUD
             */
        case 'liste-etudiant':
            $etudiantController->affichageEtudiants();
            break;

        case 'info-etudiant':
            $etudiantController->afficherEtudiant();
            break;

        case 'ajout-etudiant':
            $etudiantController->afficherAjoutEtudiant();
            break;

        case 'update-etudiant':
            $etudiantController->afficherUpdateEtudiant();
            break;

        case 'save-etudiant':
            if (!isset($_POST['idEtudiant'])) 
            {
                $etudiantController->sauvegarderEtudiant();
            } else 
            {
                $etudiantController->sauvegarderEtudiant($_POST['idEtudiant']);
            }
            break;

        case 'effacer-etudiant':
            if (isset($_GET['id'])) 
            {
                $etudiantController->supprimerEtudiant($_GET['id']);
            } else 
            {
                $view->error404();
            }
            break;

            /**
             * GESTION DE CLASSE
             * Tous les CRUD
             */
        case 'liste-classe':
            $classeController->affichageClasses();
            break;

        case 'info-classe':
            $classeController->afficherClasse();
            break;

        case 'ajout-classe':
            $classeController->afficherAjoutClasse();
            break;

        case 'update-classe':
            $classeController->afficherUpdateClasse();
            break;

        case 'save-classe':
            if (!isset($_POST['idClasse'])) 
            {
                $classeController->sauvegarderClasse();
            } else 
            {
                $classeController->sauvegarderClasse($_POST['idClasse']);
            }
            break;

        case 'effacer-classe':
            if (isset($_GET['id'])) {
                $classeController->supprimerClasse($_GET['id']);
            } else {
                $view->error404();
            }
            break;

            /**
             * Gestion d'école avec ajax
             */

        case 'save-from-ajax':
            if (!isset($_POST['id'])) {
                echo $etudiantController->sauvegarderEtudiant();
            } else {
                $etudiantController->sauvegarderEtudiant($_POST['id']);
            }
            break;

        case 'delete-from-ajax':
            $etudiantController->supprimerEtudiant($_POST['id']);
            break;

        default:
            $view->error404();
            break;
    }
} 
else 
{
    $view->home();
}
