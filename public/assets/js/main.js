/**
** Tous les fonctions utiles pour l'application
**/
$.extend(true, $.fn.dataTable.defaults, {
    language: {
        url: '//localhost/ecole/public/assets/json/fr-FR.json',
    },
    // save state of the table
    stateSave: true,
    // choice of pagination
    pagingType: 'numbers',  //numbers, simple, full, full_numbers, first_last_numbers, simple_numbers
    // Length of rows
    lengthMenu: [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, 'All']
    ],
    layout: {
        bottomEnd: {
            paging: {
                numbers: 7
            }
        }
    },
});

$(document).ready(function () {
    $('#liste-classe').dataTable();
    $('#liste-etudiant').dataTable();

    let id;

    function info() {
        $('.info').click(function () {
    
            $('#info-id-etudiant').text($(this).attr('data-id-etudiant'));
            $('#info-prenom-etudiant').text($(this).attr('data-prenom-etudiant'));
            $('#info-nom-etudiant').text($(this).attr('data-nom-etudiant'));
            $('#info-classe-etudiant').text($(this).attr('data-classe-etudiant'));
    
            $('#infoModal').modal('show');
        });
    }
    
    function modifier() {
        $('.modifier').click(function () {
            id = $(this).attr('data-id-etudiant');
            alert(id)
    
            $('#prenom').val($(this).attr('data-prenom-etudiant'));
            $('#nom').val($(this).attr('data-nom-etudiant'));
            $('#classe').val($(this).attr('data-classe-etudiant'));
    
            $('#formModal').modal('show');
        });
    }
    
    function supprimer() {
        $('.supprimer').click(function () {
            id = $(this).attr('data-id-etudiant');
            alert(id)
    
            $('#deleted-etudiant').html("");
    
            $('#info-suppression-etudiant').html(`${$(this).attr('data-nom-etudiant')} ${$(this).attr('data-prenom-etudiant')}`);
    
            $('#confirmModal').modal('show');
        });
    }

    $('#ajout').click(function () {
        id = null;
        $('#prenom').val('');
        $('#nom').val('');
        $('#classe').val(Math.round(Math.random() * 5) + 1);
    });

    info();

    modifier();

    supprimer();

    $('#delete-etudiant').click(function (e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "index.php?page=delete-from-ajax",
            //data: { id },
            success: function () {
                if(id) {
                    $('#confirmModal').modal('hide');
                    $('#deleted-etudiant').html('L\'étudiant a bien été supprimer !').show().fadeOut(4500);
                    //$(`tr#tr-etudiant-${id}`).remove();
                    $(`#id-etudiant-${id}`).remove()
                    $(`#nom-etudiant-${id}`).remove()
                    $(`#prenom-etudiant-${id}`).remove()
                    $(`#classe-etudiant-${id}`).remove()
                    alert($(`#tr-etudiant-${id}`).text());
                } else {
                    alert('no id')
                }

            },
            error: function () {
                $('#confirmModal').modal('hide');
                console.log("Un est erreur c'est produit");
            }
        });
    });

    $('#save').click(function (e) {
        e.preventDefault();

        const data = {
            prenom: $('#prenom').val(),
            nom   : $('#nom').val(),
            classe: $('#classe').val(),
        };

        const nomClasse = $(`#classe option[value="${data.classe}"]`).text();

        if (id) {
            data.id = id;
        }

        if (data.prenom && data.nom && data.classe) {

            $.ajax({
                type   : "POST",
                url    : "index.php?page=save-from-ajax",
                data   : data,
                success: function (response) {

                    $('#formModal').modal('hide');

                    if (id) {

                        $(`#info-${data.id}`).attr({
                            'data-prenom-etudiant': data.prenom,
                            'data-nom-etudiant': data.nom,
                            'data-classe-etudiant': nomClasse,
                        });

                        $(`#modifier-${data.id}`).attr({
                            'data-prenom-etudiant': data.prenom,
                            'data-nom-etudiant': data.nom,
                            'data-classe-etudiant': data.classe,
                        });

                        $(`#supprimer-${data.id}`).attr({
                            'data-prenom-etudiant': data.prenom,
                            'data-nom-etudiant': data.nom,
                        });

                        $(`#prenom-etudiant-${data.id}`).text(data.prenom);
                        $(`#nom-etudiant-${data.id}`).text(data.nom);
                        $(`#classe-etudiant-${data.id}`).text(nomClasse);

                        $('#edited-etudiant').html('Les infos de l\'étudiant a bien été mise à jour !').show().fadeOut(4500);
                    } else {

                        const tRow = `
                            <tr id="tr-etudiant-${response}>">
                                <td id="id-etudiant-${response}>" class="text-center">${response}</td>
                                <td id="prenom-etudiant-${response}>">${data.prenom}</td>
                                <td id="nom-etudiant-${response}>">${data.nom}</td>
                                <td id="classe-etudiant-${response}>"
                                class="text-center">${nomClasse}</td>
                                <td class="text-center">
                                    <button 
                                        type="button" 
                                        id="info-${response}" 
                                        class="btn btn-info btn-sm text-light mx-1 shadow info" 
                                        data-id-etudiant="${response}" 
                                        data-prenom-etudiant="${data.prenom}" 
                                        data-nom-etudiant="${data.nom}" 
                                        data-classe-etudiant="${nomClasse}" 
                                        data-toggle="modal">
                                        Info
                                    </button>
                                    <button 
                                        type="button" 
                                        id="modifier-${response}" 
                                        class="btn btn-success btn-sm text-light mx-1 shadow modifier" 
                                        data-id-etudiant="${response}" 
                                        data-prenom-etudiant="${data.prenom}" 
                                        data-nom-etudiant="${data.nom}" 
                                        data-classe-etudiant="${data.classe}" 
                                        data-toggle="modal">
                                        Modifier
                                    </button>
                                    <button 
                                        type="button" 
                                        id="supprimer-${response}" 
                                        class="btn btn-danger btn-sm text-light mx-1 shadow supprimer" 
                                        data-id-etudiant="${response}" 
                                        data-prenom-etudiant="${data.prenom}" 
                                        data-nom-etudiant="${data.nom}" 
                                        data-toggle="modal">
                                        Supprimer
                                    </but>
                                </td>
                            </tr>`;

                        $('#tbody-etudiant').prepend(tRow);
                        $('#added-etudiant').html('Le nouvel étudiant a bien été ajouté !').show().fadeOut(4500);

                        info();
                        modifier();
                        supprimer();
                    }
                },
            });
        }
    });
});
