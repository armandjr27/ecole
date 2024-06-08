<?php $title = 'Ajouter classe'; ?> 
<?php require_once dirname(__DIR__) . '/layout/header.php';?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<div class="container" id="ajoutClasse">
    <div class="col-md-8 col-lg-5 mx-auto mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-light">
                <h2 class="card-title text-center">Ajouter une classe</h2>
            </div>
            <div class="card-body">
                <form method="post" action="?page=save-classe">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la classe" required>
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Sauver étudiant</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>