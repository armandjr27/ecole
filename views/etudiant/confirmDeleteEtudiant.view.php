<!-- The Modal -->
<div class="modal fade" id="confirmModal">
  <div class="modal-dialog modal-dialog-centered p-4">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-danger">
        <h4 class="modal-title text-light">Confirmation</h4>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p class="mt-3 text-center">Voulez-vous vraiment supprimer <span class="font-weight-bold" id="info-suppression-etudiant"></span> du registre de l'école?</p>
      </div>
      <div class="d-flex justify-content-around py-3">
        <button type="submit" class="btn btn-danger" id="delete-etudiant">Confirmer</button>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Annuler</button>
      </div>
    </div>
  </div>
</div>