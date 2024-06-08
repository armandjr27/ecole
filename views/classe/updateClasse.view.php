<?php if (isset($_GET['id']) && $classe) : ?>
    
    <?php $title = 'Modifier classe'; ?> 
    <?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
    <?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>
    
    <div class="container" id="modifierClasse">
        <div class="col-md-8 col-lg-5 mx-auto mt-5">
            <div class="card shadow">
                <div class="card-header bg-dark text-light">
                    <h2 class="card-title text-center">Modifier la classe</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="?page=save-classe">
                        <input type="hidden" name="idClasse" value="<?php echo $classe->getIdClasse(); ?>">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la classe" required value="<?php echo $classe->getNom(); ?>">
                        </div>
                        <button type="submit" class="btn btn-success text-light my-3">Modifier classe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>
    
<?php else : ?>
    <?php PageController::error404(); ?>
<?php endif; ?>
    