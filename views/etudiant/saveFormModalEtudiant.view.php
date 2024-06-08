<!-- The Modal -->
<div class="modal fade" id="formModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-success">
                <h4 class="modal-title text-light">Formulaire pour étudiant</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" name="idEtudiant" id="idEtudiant">
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
                            <?php foreach ($classes as $classe) : ?>
                                <option value="<?php echo $classe->getIdClasse(); ?>"><?php echo $classe->getNom(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end py-3">
                        <button type="submit" class="btn btn-success mr-2" id="save">Sauver étudiant</button>
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>