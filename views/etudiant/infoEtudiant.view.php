<?php if (isset($_GET['id']) && $etudiant) : ?>
    <?php $title = 'Info étudiant'; ?> 
    <?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
    <?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

    <div class="container" id="infoEtudiant">
        <div class="col-md-8 col-lg-5 mx-auto mt-5">
            <div class="card shadow">
                <div class="card-header bg-info text-light">
                    <h2 class="card-title text-center">Fiche étudiant</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p class="card-text">Voici les infos correspondant à l'étudiant sélectionné :</p>
                        <table class="table table-hover">
                            <tr>
                                <th>Numéro Matricule :</th>
                                <td><?php echo $etudiant->getIdEtudiant(); ?></td>
                            </tr>
                            <tr>
                                <th>Prénom :</th>
                                <td><?php echo $etudiant->getPrenom(); ?></td>
                            </tr>
                            <tr>
                                <th>Nom :</th>
                                <td><?php echo $etudiant->getNom(); ?></td>
                            </tr>
                            <tr>
                                <th>Classe :</th>
                                <td><?php echo $etudiant->getClasse(); ?></td>
                            </tr>
                        </table>
                    </div>
                    <a href="?page=liste-etudiant" class="btn btn-info">Vers liste des étudiants</a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>

<?php else : ?>
    <?php
        PageController::error404();
    ?>
<?php endif; ?>