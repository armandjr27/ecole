<?php $title = 'Etudiant'; ?>
<?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<div id="added-etudiant"class="alert alert-success alert-dismissible fade show" style="display:none;width:380px;position:fixed;right:2%;top:18%;z-index:100;"></div>

<div id="edited-etudiant" class="alert alert-info alert-dismissible fade show" style="display:none;width:410px;position:fixed;right:2%;top:18%;z-index:100;"></div>

<div id="deleted-etudiant" class="alert alert-danger alert-dismissible fade show" style="display:none;width:350px;position:fixed;right:2%;top:18%;z-index:100;"></div>

<div class="container">
    <h1 class="text-center">Liste de tous les étudiants</h1>
    <div class="card shadow">
        <div class="card-header">
            <button type="button" class="btn btn-outline-success btn-sm shadow" data-toggle="modal" data-target="#formModal" id="ajout">Ajouter étudiant</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered my-3" id="liste-etudiant">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th class="w-25">Prenom</th>
                        <th class="w-25">Nom</th>
                        <th>Classe</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="tbody-etudiant">
                        <?php foreach ($etudiants as $etudiant) : ?>
                            <tr id="tr-etudiant-<?php echo $etudiant->getIdEtudiant();?>">
                                <td 
                                    id="id-etudiant-<?php echo $etudiant->getIdEtudiant();?>"
                                    class="text-center">
                                    <?php echo $etudiant->getIdEtudiant(); ?>
                                </td>
                                <td 
                                    id="prenom-etudiant-<?php echo $etudiant->getIdEtudiant();?>">
                                    <?php echo $etudiant->getPrenom(); ?>
                                </td>
                                <td 
                                    id="nom-etudiant-<?php echo $etudiant->getIdEtudiant();?>">
                                    <?php echo $etudiant->getNom(); ?>
                                </td>
                                <td 
                                    id="classe-etudiant-<?php echo $etudiant->getIdEtudiant();?>"
                                    class="text-center">
                                    <?php echo $etudiant->getClasse(); ?>
                                </td>
                                <td class="text-center">
                                    <button 
                                        type="button" 
                                        id="info-<?php echo $etudiant->getIdEtudiant(); ?>" 
                                        class="btn btn-info btn-sm text-light mx-1 shadow info" 
                                        data-id-etudiant="<?php echo $etudiant->getIdEtudiant(); ?>" 
                                        data-prenom-etudiant="<?php echo $etudiant->getPrenom(); ?>" 
                                        data-nom-etudiant="<?php echo $etudiant->getNom(); ?>" 
                                        data-classe-etudiant="<?php echo $etudiant->getClasse(); ?>" 
                                        data-toggle="modal">
                                        Info
                                    </button>
                                    <button 
                                        type="button" id="modifier-<?php echo $etudiant->getIdEtudiant(); ?>" 
                                        class="btn btn-success btn-sm text-light mx-1 shadow modifier" 
                                        data-id-etudiant="<?php echo $etudiant->getIdEtudiant(); ?>"
                                        data-prenom-etudiant="<?php echo $etudiant->getPrenom(); ?>" 
                                        data-nom-etudiant="<?php echo $etudiant->getNom(); ?>" 
                                        data-classe-etudiant="<?php echo $etudiant->getClasseId(); ?>" 
                                        data-toggle="modal">
                                        Modifier
                                    </button>
                                    <button 
                                        type="button" 
                                        id="supprimer-<?php echo $etudiant->getIdEtudiant(); ?>"
                                        class="btn btn-danger btn-sm text-light mx-1 shadow supprimer" 
                                        data-id-etudiant="<?php echo $etudiant->getIdEtudiant(); ?>" 
                                        data-prenom-etudiant="<?php echo $etudiant->getPrenom(); ?>" 
                                        data-nom-etudiant="<?php echo $etudiant->getNom(); ?>" 
                                        data-toggle="modal">
                                        Supprimer
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/infoModalEtudiant.view.php'; ?>
<?php require_once __DIR__ . '/saveFormModalEtudiant.view.php'; ?>
<?php require_once __DIR__ . '/confirmDeleteEtudiant.view.php'; ?>
<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>