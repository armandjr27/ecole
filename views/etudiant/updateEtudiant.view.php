<?php if (isset($_GET['id']) && $etudiant) : ?>
<?php $title = 'Modifier étudiant'; ?> 
<?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<div class="container" id="modifierEtudiant">
    <div class="col-md-8 col-lg-5 mx-auto mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-light">
                <h2 class="card-title text-center">Modifier l'étudiant</h2>
            </div>
            <div class="card-body">
                <form method="post" action="?page=save-etudiant">
                    <input type="hidden" name="idEtudiant" value="<?php echo $etudiant->getIdEtudiant(); ?>">
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prenom" required value="<?php echo $etudiant->getPrenom(); ?>">
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required value="<?php echo $etudiant->getNom(); ?>">
                    </div>
                    <div class="form-group">
                        <label for="classe">Classe</label>
                        <select name="classe" id="classe" class="form-control">
                            <option value="<?php echo $etudiant->getClasseId(); ?>"><?php echo $etudiant->getClasse(); ?></option>
                            <?php foreach($classes as $classe) :?>
                                <option value="<?php echo $classe->getIdClasse(); ?>"><?php echo $classe->getNom(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success text-light my-3" id="edit">Modifier étudiant</button>
                </form>
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
