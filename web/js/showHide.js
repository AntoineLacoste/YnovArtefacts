function editeurFieldHide() {
    $("#appbundle_collection_paysEditeur").parent().parent().hide();
    $("#appbundle_collection_villeEditeur").parent().parent().hide();
    $("#appbundle_collection_departementEditeur").parent().parent().hide();
    $("#appbundle_collection_communeEditeur").parent().parent().hide();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().hide();

    paysFieldHide();
    villeEditeurFieldHide();
    departementFieldHide();
    communeFieldHide();
    lieuDitsFieldHide();

    $("#hrEditeur1").hide();
    $("#hrEditeur2").hide();
}

function editeurFieldShow() {
    $("#appbundle_collection_paysEditeur").parent().parent().show();
    $("#appbundle_collection_villeEditeur").parent().parent().show();
    $("#appbundle_collection_departementEditeur").parent().parent().show();
    $("#appbundle_collection_communeEditeur").parent().parent().show();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().show();

    $("#hrEditeur1").show();
    $("#hrEditeur2").show();
}

function paysFieldHide() {
    $("#codePaysEditeur").parent().parent().hide();
    $("#paysFREditeur").parent().parent().hide();
    $("#paysGBEditeur").parent().parent().hide();
    $("#paysDEEditeur").parent().parent().hide();
    $("#paysESEditeur").parent().parent().hide();
    $("#paysITEditeur").parent().parent().hide();

    $("#hrPaysEditeurDebut").hide();
    $("#hrPaysEditeurFin").hide();
}

function paysFieldShow() {
    $("#codePaysEditeur").parent().parent().show();
    $("#paysFREditeur").parent().parent().show();
    $("#paysGBEditeur").parent().parent().show();
    $("#paysDEEditeur").parent().parent().show();
    $("#paysESEditeur").parent().parent().show();
    $("#paysITEditeur").parent().parent().show();

    $("#hrPaysEditeurDebut").show();

    if (!$("#hrVilleEditeurDebut").is(":visible")) {
        $("#hrPaysEditeurFin").show();
    }

    $("#addPaysEditeur").show();
}

function villeEditeurFieldHide() {
    $("#nomVilleEditeur").parent().parent().hide();

    $("#hrVilleEditeurDebut").hide();
    $("#hrVilleEditeurFin").hide();

    $("#addVilleEditeur").show();
}

function villeEditeurFieldShow() {
    $("#nomVilleEditeur").parent().parent().show();

    if (!$("#hrPaysFin").is(":visible")) {
        $("#hrVilleEditeurDebut").show();
    }

    if (!$("#hrDepartementDebut").is(":visible")) {
        $("#hrVilleEditeurFin").show();
    }

    $("#addVilleEditeur").show();
}

function villeEditionFieldHide() {
    $("#nomVilleEdition").parent().parent().hide();

    $("#hrVilleEditionDebut").hide();
    $("#hrVilleEditionFin").hide();

    $("#addVilleEdition").hide();
}

function villeEditionFieldShow() {
    $("#nomVilleEdition").parent().parent().show();

    $("#hrVilleEditionDebut").show();
    $("#hrVilleEditionFin").show();

    $("#addVilleEdition").show();
}

function departementFieldHide() {
    $("#nomDepartementEditeur").parent().parent().hide();

    $("#hrDepartementEditeurDebut").hide();
    $("#hrDepartementEditeurFin").hide();

    $("#addDepartementEditeur").hide();
}

function departementFieldShow() {
    $("#nomDepartementEditeur").parent().parent().show();

    if (!$("#hrVilleEditeurFin").is(":visible")) {
        $("#hrDepartementEditeurDebut").show();
    }

    if (!$("#hrCommuneEditeurDebut").is(":visible")) {
        $("#hrDepartementEditeurFin").show();
    }

    $("#addDepartementEditeur").show();
}

function communeFieldHide() {
    $("#nomCommuneEditeur").parent().parent().hide();

    $("#hrCommuneEditeurDebut").hide();
    $("#hrCommuneEditeurFin").hide();

    $("#addCommuneEditeur").hide();
}

function communeFieldShow() {
    $("#nomCommuneEditeur").parent().parent().show();

    if (! $("#hrDepartementFin").is(":visible")) {
        $("#hrCommuneDebut").show();
    }

    if (! $("#hrLieuDitsEditeurDebut").is(":visible")) {
        $("#hrCommuneEditeurFin").show();
    }

    $("#addCommuneEditeur").show();
}

function lieuDitsFieldHide() {
    $("#nomLieuDitsEditeur").parent().parent().hide();

    $("#hrLieuDitsEditeurDebut").hide();
    $("#hrLieuDitsEditeurFin").hide();

    $("#addLieuDitsEditeur").hide();
}

function lieuDitsFieldShow() {
    $("#nomLieuDitsEditeur").parent().parent().show();

    if (!$("#hrCommuneEditeurFin").is(":visible")) {
        $("#hrLieuDitsEditeurDebut").show();
    }

    $("#addLieuDitsEditeur").show();
}