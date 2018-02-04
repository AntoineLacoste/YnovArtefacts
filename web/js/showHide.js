function editeurFieldHide() {
    $("#appbundle_collection_paysEditeur").parent().parent().hide();
    $("#appbundle_collection_villeEditeur").parent().parent().hide();
    $("#appbundle_collection_departementEditeur").parent().parent().hide();
    $("#appbundle_collection_communeEditeur").parent().parent().hide();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().hide();
    $("#nomEditeur").parent().parent().hide();

    paysFieldHide();
    villeEditeurFieldHide();
    departementFieldHide();
    communeFieldHide();
    lieuDitsFieldHide();

    $("#hrEditeur1").hide();
    $("#hrEditeur2").hide();

    $("#addEditeur").hide();
}

function auteurFieldHide(auteurNumber) {
    $("#auteur" + auteurNumber + " #nomAuteur").parent().parent().hide();
    $("#auteur" + auteurNumber + " #prenomAuteur").parent().parent().hide();
    $("#auteur" + auteurNumber + " #noteAuteur").parent().parent().hide();
    $("#auteur" + auteurNumber + " #dateVieAuteur").parent().parent().hide();

    $("#auteur" + auteurNumber + " #directeurAuteur").hide();
    $("#auteur" + auteurNumber + " #organismeAuteur").hide();
    $("#auteur" + auteurNumber + " #nationaliteAuteur").hide();
    $("#auteur" + auteurNumber + " #addAuteur").hide();

    organismeFieldHide(auteurNumber);
    nationaliteFieldHide(auteurNumber);
    directeurFieldHide(auteurNumber);
}

function auteurFieldShow(auteurNumber) {
    $("#auteur" + auteurNumber + " #nomAuteur").parent().parent().show();
    $("#auteur" + auteurNumber + " #prenomAuteur").parent().parent().show();
    $("#auteur" + auteurNumber + " #noteAuteur").parent().parent().show();
    $("#auteur" + auteurNumber + " #dateVieAuteur").parent().parent().show();

    $("#auteur" + auteurNumber + " #directeurAuteur").show();
    $("#auteur" + auteurNumber + " #organismeAuteur").show();
    $("#auteur" + auteurNumber + " #nationaliteAuteur").show();
    $("#auteur" + auteurNumber + " #addAuteur").show();
}

function editeurFieldShow() {
    $("#appbundle_collection_paysEditeur").parent().parent().show();
    $("#appbundle_collection_villeEditeur").parent().parent().show();
    $("#appbundle_collection_departementEditeur").parent().parent().show();
    $("#appbundle_collection_communeEditeur").parent().parent().show();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().show();
    $("#nomEditeur").parent().parent().show();

    $("#hrEditeur1").show();
    if (!$("#hrCollection1").is(":visible")) {
        $("#hrEditeur2").show();
    }

    $("#addEditeur").show();
}

function paysFieldHide() {
    $("#codePaysEditeur").parent().parent().hide();
    $("#paysFREditeur").parent().parent().hide();
    $("#paysGBEditeur").parent().parent().hide();
    $("#paysDEEditeur").parent().parent().hide();
    $("#paysESEditeur").parent().parent().hide();
    $("#paysITEditeur").parent().parent().hide();

    $("#hrPaysEditeur1").hide();
    $("#hrPaysEditeur2").hide();
}

function paysFieldShow() {
    $("#codePaysEditeur").parent().parent().show();
    $("#paysFREditeur").parent().parent().show();
    $("#paysGBEditeur").parent().parent().show();
    $("#paysDEEditeur").parent().parent().show();
    $("#paysESEditeur").parent().parent().show();
    $("#paysITEditeur").parent().parent().show();

    $("#hrPaysEditeur1").show();

    if (!$("#hrVilleEditeur1").is(":visible")) {
        $("#hrPaysEditeur2").show();
    }

    $("#addPaysEditeur").show();
}

function villeEditeurFieldHide() {
    $("#nomVilleEditeur").parent().parent().hide();

    $("#hrVilleEditeur1").hide();
    $("#hrVilleEditeur2").hide();

    $("#addVilleEditeur").show();
}

function villeEditeurFieldShow() {
    $("#nomVilleEditeur").parent().parent().show();

    if (!$("#hrPaysEditeur2").is(":visible")) {
        $("#hrVilleEditeur1").show();
    }

    if (!$("#hrDepartementEditeur1").is(":visible")) {
        $("#hrVilleEditeur2").show();
    }

    $("#addVilleEditeur").show();
}

function villeEditionFieldHide() {
    $("#nomVilleEdition").parent().parent().hide();

    $("#hrVilleEdition1").hide();
    $("#hrVilleEdition2").hide();

    $("#addVilleEdition").hide();
}

function villeEditionFieldShow() {
    $("#nomVilleEdition").parent().parent().show();

    $("#hrVilleEdition1").show();
    $("#hrVilleEdition2").show();

    $("#addVilleEdition").show();
}

function departementFieldHide() {
    $("#nomDepartementEditeur").parent().parent().hide();

    $("#hrDepartementEditeur1").hide();
    $("#hrDepartementEditeur2").hide();

    $("#addDepartementEditeur").hide();
}

function departementFieldShow() {
    $("#nomDepartementEditeur").parent().parent().show();

    if (!$("#hrVilleEditeur2").is(":visible")) {
        $("#hrDepartementEditeur1").show();
    }

    if (!$("#hrCommuneEditeur1").is(":visible")) {
        $("#hrDepartementEditeur2").show();
    }

    $("#addDepartementEditeur").show();
}

function collectionFieldHide() {
    $("#nomCollection").parent().parent().hide();

    $("#hrCollection1").hide();
    $("#hrCollection2").hide();

    $("#addCollection").hide();
}

function collectionFieldShow() {
    $("#nomCollection").parent().parent().show();

    if (!$("#hrEditeur2").is(":visible")) {
        $("#hrCollection1").show();
    }
    $("#hrCollection2").show();

    $("#addCollection").show();
}

function periodiqueFieldHide() {
    $("#nomPeriodique").parent().parent().hide();

    $("#hrPeriodique1").hide();

    $("#addPeriodique").hide();
}

function periodiqueFieldShow() {
    $("#nomPeriodique").parent().parent().show();

    $("#hrPeriodique1").show();

    $("#addPeriodique").show();
}

function communeFieldHide() {
    $("#nomCommuneEditeur").parent().parent().hide();

    $("#hrCommuneEditeur1").hide();
    $("#hrCommuneEditeur2").hide();

    $("#addCommuneEditeur").hide();
}

function communeFieldShow() {
    $("#nomCommuneEditeur").parent().parent().show();

    if (!$("#hrDepartementEditeur2").is(":visible")) {
        $("#hrCommuneEditeur1").show();
    }

    if (!$("#hrLieuDitsEditeur1").is(":visible")) {
        $("#hrCommuneEditeur2").show();
    }

    $("#addCommuneEditeur").show();
}

function lieuDitsFieldHide() {
    $("#nomLieuDitsEditeur").parent().parent().hide();

    $("#hrLieuDitsEditeur1").hide();
    $("#hrLieuDitsEditeur2").hide();

    $("#addLieuDitsEditeur").hide();
}

function lieuDitsFieldShow() {
    $("#nomLieuDitsEditeur").parent().parent().show();

    if (!$("#hrCommuneEditeur2").is(":visible")) {
        $("#hrLieuDitsEditeur1").show();
    }

    $("#addLieuDitsEditeur").show();
}

function hideAll() {
    $("#appbundle_collection_tome").parent().parent().hide();
    $("#appbundle_collection_editeur").parent().parent().hide();
    $("#appbundle_collection_collection").parent().parent().hide();
    $("#appbundle_collection_num_collection").parent().parent().hide();
    $("#appbundle_collection_pagination").parent().parent().hide();
    $("#appbundle_collection_periodique").parent().parent().hide();
    $("#appbundle_collection_volume").parent().parent().hide();
}

function displayFields() {
    var typeBib = $("#appbundle_collection_TypeBib").val();

    hideAll();
    switch (typeBib) {
        case "1":
            $("#appbundle_collection_tome").parent().parent().show();
            $("#appbundle_collection_editeur").parent().parent().show();
            $("#appbundle_collection_collection").parent().parent().show();
            $("#appbundle_collection_num_collection").parent().parent().show();
            break;
        case "2":
            $("#appbundle_collection_tome").parent().parent().show();
            $("#appbundle_collection_pagination").parent().parent().show();
            $("#appbundle_collection_editeur").parent().parent().show();
            $("#appbundle_collection_collection").parent().parent().show();
            $("#appbundle_collection_num_collection").parent().parent().show();
            break;
        case "3":
            $("#appbundle_collection_editeur").parent().parent().show();
            break;
        case "4":
            break;
        case "5":
            $("#appbundle_collection_editeur").parent().parent().show();
            $("#appbundle_collection_collection").parent().parent().show();
            $("#appbundle_collection_num_collection").parent().parent().show();
            break;
        case "6":
            $("#appbundle_collection_pagination").parent().parent().show();
            $("#appbundle_collection_editeur").parent().parent().show();
            $("#appbundle_collection_collection").parent().parent().show();
            $("#appbundle_collection_num_collection").parent().parent().show();
            break;
        case "7":
            $("#appbundle_collection_tome").parent().parent().show();
            $("#appbundle_collection_pagination").parent().parent().show();
            break;
        case "8":
            $("#appbundle_collection_volume").parent().parent().show();
            $("#appbundle_collection_periodique").parent().parent().show();
            break;
        case "9":
            $("#appbundle_collection_volume").parent().parent().show();
            break;
        case "10":
            $("#appbundle_collection_volume").parent().parent().show();
            break;
    }
}

function directeurFieldHide(auteurNumber) {
    $("#auteur" + auteurNumber + " #hrDirecteur1Auteur").hide();
    $("#auteur" + auteurNumber + " #hrDirecteur2Auteur").hide();
}

function organismeFieldHide(auteurNumber) {
    $("#auteur" + auteurNumber + " #typeOrganismeAuteur").hide();
    $("#auteur" + auteurNumber + " #nomOrganismeAuteur").parent().parent().hide();

    $("#auteur" + auteurNumber + " #hrOrganisme1Auteur").hide();
    $("#auteur" + auteurNumber + " #hrOrganisme2Auteur").hide();
}

function organismeFieldShow(auteurNumber) {
    $("#auteur" + auteurNumber + " #typeOrganismeAuteur").show();
    $("#auteur" + auteurNumber + " #nomOrganismeAuteur").parent().parent().show();

    $("#auteur" + auteurNumber + " #hrOrganisme1Auteur").show();
    if (!$("#auteur" + auteurNumber + " #hrNationalite1Auteur").is(":visible")) {
        $("#auteur" + auteurNumber + " #hrOrganisme2Auteur").show();
    }
}

function typeOrganismeFieldHide(auteurNumber) {
    $("#auteur" + auteurNumber + " #descriptionTypeOrganismeAuteur").parent().parent().hide();

    $("#auteur" + auteurNumber + " #hrTypeOrganisme1Auteur").hide();
    $("#auteur" + auteurNumber + " #hrTypeOrganisme2Auteur").hide();
}

function typeOrganismeFieldShow(auteurNumber) {
    $("#auteur" + auteurNumber + " #descriptionTypeOrganismeAuteur").parent().parent().show();
    $("#auteur" + auteurNumber + " #nomOrganismeAuteur").parent().parent().show();

    $("#auteur" + auteurNumber + " #hrTypeOrganisme1Auteur").show();
    $("#auteur" + auteurNumber + " #hrTypeOrganisme2Auteur").show();
}

function nationaliteFieldHide(auteurNumber) {
    $("#auteur" + auteurNumber + " #nomNationaliteAuteur").parent().parent().hide();
    $("#auteur" + auteurNumber + " #codeNationaliteAuteur").parent().parent().hide();

    $("#auteur" + auteurNumber + " #hrNationalite1Auteur").hide();
    $("#auteur" + auteurNumber + " #hrNationalite2Auteur").hide();
}

function nationaliteFieldShow(auteurNumber) {
    $("#auteur" + auteurNumber + " #nomNationaliteAuteur").parent().parent().show();
    $("#auteur" + auteurNumber + " #codeNationaliteAuteur").parent().parent().show();

    if (!$("#auteur" + auteurNumber + " #hrOrganisme2Auteur").is(":visible")) {
        $("#auteur" + auteurNumber + " #hrNationalite1Auteur").show();
    }
    $("#auteur" + auteurNumber + " #hrNationalite2Auteur").show();
}