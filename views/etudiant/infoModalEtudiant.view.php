<!-- The Modal -->
<div class="modal fade" id="infoModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title text-light">Fiche étudiant</h4>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p class="card-text">Voici les infos correspondant à l'étudiant sélectionné :</p>
        <table class="table table-striped">
          <tr>
            <th>Numéro Matricule :</th>
            <td id="info-id-etudiant"></td>
          </tr>
          <tr>
            <th>Prénom :</th>
            <td id="info-prenom-etudiant"></td>
          </tr>
          <tr>
            <th>Nom :</th>
            <td id="info-nom-etudiant"></td>
          </tr>
          <tr>
            <th>Classe :</th>
            <td id="info-classe-etudiant"></td>
          </tr>
        </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Fermer</button>
      </div>

    </div>
  </div>
</div>