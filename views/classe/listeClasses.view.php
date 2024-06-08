<?php $title = 'Classe'; ?>
<?php require_once dirname(__DIR__) . '/layout/header.php'; ?>
<?php require_once dirname(__DIR__) . '/layout/navbar.php'; ?>

<?php if (isset( $_SESSION['added'])) :?>
    <div class="alert alert-success alert-dismissible fade show" style="width:400px;position:fixed;right:2%;top:18%;z-index:100;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo  $_SESSION['added']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['added']); ?>

<?php if (isset( $_SESSION['updated'])) :?>
    <div class="alert alert-info alert-dismissible fade show" style="width:410px;position:fixed;right:2%;top:18%;z-index:100;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo  $_SESSION['updated']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['updated']); ?>

<?php if (isset( $_SESSION['deleted'])) :?>
    <div class="alert alert-danger alert-dismissible fade show" style="width:400px;position:fixed;right:2%;top:18%;z-index:100;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo  $_SESSION['deleted']; ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['deleted']); ?>

<div class="container mt-5">
    <h1 class="text-center">Liste de tous les classes</h1>
    <div class="card shadow">
        <div class="card-header">
            <a href="?page=ajout-classe" class="btn btn-outline-success btn-sm shadow">Ajouter classe</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-hover table-bordered my-3" id="liste-classe">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th class="w-25">Nom</th>
                        <th>Nombre d'étudiant</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($classes as $classe) : ?>
                            <tr>
                                <td class="text-center"><?php echo $classe->getIdClasse(); ?></td>
                                <td><?php echo $classe->getNom(); ?></td>
                                <td class="text-center"><?php echo $classe->getNombreEtudiant(); ?></td>
                                <td class="text-center">
                                    <a href="?page=info-classe&amp;id=<?php echo $classe->getIdClasse(); ?>" class="btn btn-info btn-sm text-light mx-1 shadow">Info</a>
                                    <a href="?page=update-classe&amp;id=<?php echo $classe->getIdClasse(); ?>" class="btn btn-success btn-sm text-light mx-1 shadow">Modifier</a>
                                    <a href="?page=effacer-classe&amp;id=<?php echo $classe->getIdClasse(); ?>" class="btn btn-danger btn-sm text-light mx-1 shadow delete">Supprimer</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/layout/footer.php'; ?>