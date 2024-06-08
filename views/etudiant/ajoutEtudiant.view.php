<?php $title = 'Ajouter étudiant'; ?> 
<?php require_once dirname(__DIR__) . '/layout/header.php';?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<div class="container" id="ajoutEtudiant">
    <div class="col-md-8 col-lg-5 mx-auto mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-light">
                <h2 class="card-title text-center">Ajouter un étudiant</h2>
            </div>
            <div class="card-body">
                <form method="post" action="?page=save-etudiant">
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="classe">Classe</label>
                        <select name="classe" id="classe" class="form-control">
                            <?php foreach($classes as $classe) :?>
                                <option value="<?php echo $classe->getIdClasse(); ?>"><?php echo $classe->getNom(); ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="ajout">Sauver étudiant</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>