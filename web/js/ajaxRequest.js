function addVilleEditeur() {
    $("#modalTitle").html("Ajouter la ville");
    $("#modalContent").html("Etes-vous sur d'ajouter la ville " + $("#nomVilleEditeur").val() + " ?");

    $("#addButton").click(addVilleEditeurAjax);

    $("#modalButton").click();
}

function addVilleEditeurAjax() {
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

            $("#cancelButton").click();
            villeEditeurFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addVilleEdition() {
    $("#modalTitle").html("Ajouter la ville");
    $("#modalContent").html("Etes-vous sur d'ajouter la ville " + $("#nomVilleEdition").val() + " ?");

    $("#addButton").click(addVilleEditionAjax);

    $("#modalButton").click();
}

function addVilleEditionAjax() {
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

            $("#cancelButton").click();
            villeEditionFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addPaysEditeur() {
    $("#modalTitle").html("Ajouter le pays");
    $("#modalContent").html("Etes-vous sur d'ajouter le pays " + $("#paysFREditeur").val() + " ?");

    $("#addButton").click(addPaysEditeurAjax);

    $("#modalButton").click();
}

function addPaysEditeurAjax() {
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

            $("#cancelButton").click();
            paysFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addEditeur() {
    $("#modalTitle").html("Ajouter l'éditeur");
    $("#modalContent").html("Etes-vous sur d'ajouter l'éditeur " + $("#nomEditeur").val() + " ?");

    $("#addButton").click(addEditeurAjax);

    $("#modalButton").click();
}

function addEditeurAjax() {
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

            $("#cancelButton").click();
            editeurFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addCommuneEditeur() {
    $("#modalTitle").html("Ajouter la commune");
    $("#modalContent").html("Etes-vous sur d'ajouter la commune " + $("#nomCommuneEditeur").val() + " ?");

    $("#addButton").click(addCommuneEditeurAjax);

    $("#modalButton").click();
}

function addCommuneEditeurAjax() {
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

            $("#cancelButton").click();
            communeFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addCollection() {
    $("#modalTitle").html("Ajouter la collection");
    $("#modalContent").html("Etes-vous sur d'ajouter la collection " + $("#nomCollection").val() + " ?");

    $("#addButton").click(addCollectionAjax);

    $("#modalButton").click();
}

function addCollectionAjax() {
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

            $("#cancelButton").click();
            collectionFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addOrganisme(event) {
    var auteurNumber = $(event.target).parent().parent().parent().attr("id").slice(-1);
    $("#modalTitle").html("Ajouter l'organisme");
    $("#modalContent").html("Etes-vous sur d'ajouter l'organisme " + $("#auteur" + auteurNumber + " #nomOrganismeAuteur").val() + " ?");

    $("#addButton").click(addOrganismeAjax);
    $("#addButton").attr("data", auteurNumber);

    $("#modalButton").click();
}

function addOrganismeAjax() {
    var auteurNumber = $("#addButton").attr("data");
    $.ajax({
        url: window.location + "organisme/add",
        type: 'POST',
        data: {
            nom: $("#auteur" + auteurNumber + " #nomOrganismeAuteur").val(),
            typeOrganisme: $("#auteur" + auteurNumber + " #typeOrganismeAuteur" + " select").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idOrganisme
            });

            opt.append(response.nom + " (" + response.typeOrganisme.description + ")");

            $("#appbundle_collection_organisme").append(opt);
            $("#appbundle_collection_organisme").val(response.idOrganisme);

            $("#cancelButton").click();
            organismeFieldHide(auteurNumber);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addNationalite(event) {
    var auteurNumber = $(event.target).parent().parent().parent().attr("id").slice(-1);
    $("#modalTitle").html("Ajouter la nationalite");
    $("#modalContent").html("Etes-vous sur d'ajouter la nationalité " + $("#auteur" + auteurNumber + " #nomNationaliteAuteur").val() + " ?");

    $("#addButton").click(addNationaliteAjax);
    $("#addButton").attr("data", auteurNumber);

    $("#modalButton").click();
}

function addNationaliteAjax() {
    var auteurNumber = $("#addButton").attr("data");
    $.ajax({
        url: window.location + "nationalite/add",
        type: 'POST',
        data: {
            nom: $("#auteur" + auteurNumber + " #nomNationaliteAuteur").val(),
            abv: $("#auteur" + auteurNumber + " #codeNationaliteAuteur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idNationalite
            });

            opt.append(response.nom + " (" + response.abv + ")");

            $("#appbundle_collection_nationalite").append(opt);
            $("#appbundle_collection_nationalite").val(response.idNationalite);

            $("#cancelButton").click();
            nationaliteFieldHide(auteurNumber);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addTypeOrganisme(event) {
    var auteurNumber = $(event.target).parent().parent().parent().attr("id").slice(-1);
    $("#modalTitle").html("Ajouter le type d'organisme");
    $("#modalContent").html("Etes-vous sur d'ajouter le type d'organisme " + $("#auteur" + auteurNumber + " #descriptionTypeOrganismeAuteur").val() + " ?");

    $("#addButton").click(addTypeOrganismeAjax);
    $("#addButton").attr("data", auteurNumber);

    $("#modalButton").click();
}

function addTypeOrganismeAjax() {
    var auteurNumber = $("#addButton").attr("data");

    $.ajax({
        url: window.location + "typeOrganisme/add",
        type: 'POST',
        data: {
            description: $("#auteur" + auteurNumber + " #descriptionTypeOrganismeAuteur").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idTypeOrganisme
            });

            opt.append(response.description);

            $("#appbundle_collection_typeOrganisme").append(opt);
            $("#appbundle_collection_typeOrganisme").val(response.idTypeOrganisme);

            $("#cancelButton").click();
            typeOrganismeFieldHide(auteurNumber);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addBibliographie() {
    $("#modalTitle").html("Ajouter le document");
    $("#modalContent").html("Etes-vous sur d'ajouter le document " + $("#appbundle_collection_titreRef").val() + " ?");

    $("#addButton").click(addBibliographieAjax);

    $("#modalButton").click();
}

function addBibliographieAjax() {
    var data = setBibliographieData();
    $.ajax({
        url: window.location + "bibliographie/add",
        type: 'POST',
        data: data,
        success: function (response) {
            console.log(response);
            location.reload();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function setBibliographieData() {
    var data = {};

    data.idBibliographie = $("#idBibliographie").val();
    data.titre = $("#appbundle_collection_titreRef").val();
    data.abvSiteMarchand = $("#appbundle_collection_abvSiteMarchande").val();
    data.tome = $("#appbundle_collection_tome").val();
    data.volume = $("#appbundle_collection_volume").val();
    data.numCollection = $("#appbundle_collection_num_collection").val()
    data.collection = $("#appbundle_collection_collection").val();
    data.pagination = $("#appbundle_collection_pagination").val();

    var yearDate = $("#appbundle_collection_dateEdition_year").val();
    var monthDate = $("#appbundle_collection_dateEdition_month").val();
    var dayDate = $("#appbundle_collection_dateEdition_day").val();

    data.dateEdition = dayDate + "-" + monthDate + "-" + yearDate;
    data.ISSN = $("#appbundle_collection_issn").val();
    data.ISBN = $("#appbundle_collection_isbn").val();
    data.typeBib = $("#appbundle_collection_TypeBib").val();
    data.villeEdition = $("#appbundle_collection_villeEdition").val();
    data.editeur = $("#appbundle_collection_editeur").val();
    data.periodique = $("#appbundle_collection_periodique").val();

    var auteurs = [];
    $("#auteurs > div").each(function (index, div) {
        auteurs.push($("#" + $(div).attr("id") + " #appbundle_collection_auteur").val());
    });

    data.auteurs = auteurs;
    return data;
}

function addAuteur(event) {
    var auteurNumber = $(event.target).parent().parent().parent().attr("id").slice(-1);
    $("#modalTitle").html("Ajouter l'auteur");
    $("#modalContent").html("Etes-vous sur d'ajouter l'auteur " + $("#auteur" + auteurNumber + " #nomAuteur").val() + " " + $("#auteur" + auteurNumber + " #prenomAuteur").val() + " ?");

    $("#addButton").click(addAuteurAjax);
    $("#addButton").attr("data", auteurNumber);

    $("#modalButton").click();
}

function addAuteurAjax() {
    var auteurNumber = $("#addButton").attr("data");
    $.ajax({
        url: window.location + "personne/add",
        type: 'POST',
        data: {
            nom: $("#auteur" + auteurNumber + " #nomAuteur").val(),
            prenom: $("#auteur" + auteurNumber + " #prenomAuteur").val(),
            dateVie: $("#auteur" + auteurNumber + " #dateVieAuteur").val(),
            note: $("#auteur" + auteurNumber + " #noteAuteur").val(),
            directeur: $("#auteur" + auteurNumber + " #appbundle_collection_directeur").val(),
            organisme: $("#auteur" + auteurNumber + " #appbundle_collection_organisme").val(),
            nationalite: $("#auteur" + auteurNumber + " #appbundle_collection_nationalite").val()
        },
        success: function (response) {
            console.log(response);
            var opt = $('<option>').attr({
                value: response.idPersonne
            });

            opt.append(response.nom + " " + response.prenom + " (" + response.Nationalite.abv + ")");

            $("#auteur" + auteurNumber + " #appbundle_collection_auteur").append(opt);
            $("#auteur" + auteurNumber + " #appbundle_collection_auteur").val(response.idPersonne);

            $("#cancelButton").click();
            auteurFieldHide(auteurNumber);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addPeriodique() {
    $("#modalTitle").html("Ajouter le periodique");
    $("#modalContent").html("Etes-vous sur d'ajouter le periodique " + $("#nomPeriodique").val() + " ?");

    $("#addButton").click(addPeriodiqueAjax);

    $("#modalButton").click();
}

function addPeriodiqueAjax() {
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

            $("#cancelButton").click();
            periodiqueFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addLieuDitsEditeur() {
    $("#modalTitle").html("Ajouter le lieu-dits");
    $("#modalContent").html("Etes-vous sur d'ajouter le lieu-dits " + $("#nomLieuDitsEditeur").val() + " ?");

    $("#addButton").click(addLieuDitsEditeurAjax);

    $("#modalButton").click();
}

function addLieuDitsEditeurAjax() {
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

            $("#cancelButton").click();
            lieuDitsFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addDepartementEditeur() {
    $("#modalTitle").html("Ajouter le département");
    $("#modalContent").html("Etes-vous sur d'ajouter le departement " + $("#nomDepartementEditeur").val() + " ?");

    $("#addButton").click(addDepartementEditeurAjax);

    $("#modalButton").click();
}

function addDepartementEditeurAjax() {
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

            $("#cancelButton").click();
            departementFieldHide();
        },
        error: function (err) {
            console.log(err);
        }
    });
}