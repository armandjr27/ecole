<?php if (isset($_GET['id']) && $classe) : ?>

<?php $title = 'Info classe'; ?> 
<?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<div class="container" id="infoClasse">
    <div class="col-md-8 col-lg-5 mx-auto mt-5">
        <div class="card shadow">
            <div class="card-header bg-info text-light">
                <h2 class="card-title text-center">Fiche classe</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <p class="card-text">Voici les infos correspondant à la classe sélectionné :</p>
                    <table class="table table-hover">
                        <tr>
                            <th>Identifiant :</th>
                            <td><?php echo $classe->getIdClasse(); ?></td>
                        </tr>
                        <tr>
                            <th>Nom :</th>
                            <td><?php echo $classe->getNom(); ?></td>
                        </tr>
                        <tr>
                            <th>Nombre d'étudiant :</th>
                            <td><?php echo $classe->getNombreEtudiant(); ?></td>
                        </tr>
                    </table>
                </div>
                <a href="?page=liste-classe" class="btn btn-info">Vers liste classes</a>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>

<?php else : ?>
    <?php PageController::error404(); ?>
<?php endif; ?>