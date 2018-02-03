function addVilleEditeur() {
    $.ajax({
        url: window.location + "ville/add",
        type: 'POST',
        data: {
            nom: $("#nomVilleEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idVille
            });

            opt.append(response.nom);

            $("#appbundle_collection_villeEdition").append(opt);

            opt = $('<option>').attr({
                value: response.idVille
            });

            opt.append(response.nom);

            $("#appbundle_collection_villeEditeur").append(opt);
            $("#appbundle_collection_villeEditeur").val(response.idVille);

            villeEditeurFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addVilleEdition() {
    console.log($("#nomVilleEdition").val());
    $.ajax({
        url: window.location + "ville/add",
        type: 'POST',
        data: {
            nom: $("#nomVilleEdition").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idVille
            });

            opt.append(response.nom);

            $("#appbundle_collection_villeEdition").append(opt);
            $("#appbundle_collection_villeEdition").val(response.idVille);

            opt = $('<option>').attr({
                value: response.idVille
            });

            opt.append(response.nom);

            $("#appbundle_collection_villeEditeur").append(opt);

            villeEditionFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addPaysEditeur() {
    $.ajax({
        url: window.location + "pays/add",
        type: 'POST',
        data: {
            codePays: $("#codePaysEditeur").val(),
            paysFr: $("#paysFREditeur").val(),
            paysGb: $("#paysGBEditeur").val(),
            paysDe: $("#paysDEEditeur").val(),
            paysIt: $("#paysITEditeur").val(),
            paysEs: $("#paysESEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idPays
            });

            opt.append(response.paysFr);

            $("#appbundle_collection_paysEditeur").append(opt);
            $("#appbundle_collection_paysEditeur").val(response.idPays);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addEditeur() {
    $.ajax({
        url: window.location + "editeur/add",
        type: 'POST',
        data: {
            pays: $("#appbundle_collection_paysEditeur").val(),
            commune: $("#appbundle_collection_communeEditeur").val(),
            lieuDits: $("#appbundle_collection_lieuDitsEditeur").val(),
            coordonnees: "",
            departement: $("#appbundle_collection_departementEditeur").val(),
            nom: $("#nomEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idEditeur
            });

            opt.append(response.nom);

            $("#appbundle_collection_editeur").append(opt);
            $("#appbundle_collection_editeur").val(response.idEditeur);

            editeurFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addCommuneEditeur() {
    $.ajax({
        url: window.location + "commune/add",
        type: 'POST',
        data: {
            nom: $("#nomCommuneEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idCommune
            });

            opt.append(response.nom);

            $("#appbundle_collection_communeEditeur").append(opt);
            $("#appbundle_collection_communeEditeur").val(response.idCommune);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addCollection() {
    $.ajax({
        url: window.location + "collection/add",
        type: 'POST',
        data: {
            nom: $("#nomCollection").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idCollection
            });

            opt.append(response.nom);

            $("#appbundle_collection_collection").append(opt);
            $("#appbundle_collection_collection").val(response.idCollection);


        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addPeriodique() {
    $.ajax({
        url: window.location + "periodique/add",
        type: 'POST',
        data: {
            nom: $("#nomPeriodique").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idPeriodique
            });

            opt.append(response.nom);

            $("#appbundle_collection_periodique").append(opt);
            $("#appbundle_collection_periodique").val(response.idPeriodique);

        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addLieuDitsEditeur() {
    $.ajax({
        url: window.location + "lieuDits/add",
        type: 'POST',
        data: {
            nom: $("#nomLieuDitsEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idLieuDits
            });

            opt.append(response.nom);

            $("#appbundle_collection_lieuDitsEditeur").append(opt);
            $("#appbundle_collection_lieuDitsEditeur").val(response.idLieuDits);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addDepartementEditeur() {
    $.ajax({
        url: window.location + "departement/add",
        type: 'POST',
        data: {
            nom: $("#nomDepartementEditeur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idDepartement
            });

            opt.append(response.nom);

            $("#appbundle_collection_departementEditeur").append(opt);
            $("#appbundle_collection_departementEditeur").val(response.idDepartement);
        },
        error: function (err) {
            console.log(err);
        }
    });
}