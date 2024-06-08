<?php $title = 'Accueil'; ?>
<?php require_once __DIR__ . '/layout/header.php'; ?>

<div class="container mb-4">
    <h1 class="text-center my-4">Gestion d'école</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <img class="card-img-top" src="<?php echo BASE_URL; ?>/public/img/student.jpg" alt="étudiant" title="Gestion d'étudiant" height="250" width="auto">
                <div class="card-body">
                    <h4 class="card-title">Gérer étudiant</h4>
                    <p class="card-text"> &gt; Vous pouvez gérer les étudiants de l'école ici.</p>
                    <a href="?page=liste-etudiant" class="btn btn-outline-info">Liste des étudiants</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <img class="card-img-top" src="<?php echo BASE_URL; ?>/public/img/classe.png" alt="classe" title="Gestion de classe" height="250" width="auto">
                <div class="card-body">
                    <h4 class="card-title">Gérer classe</h4>
                    <p class="card-text"> &gt; Vous pouvez gérer les classes de l'école ici.</p>
                    <a href="?page=liste-classe" class="btn btn-outline-info">Liste des classes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>