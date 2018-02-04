$(document).ready(function () {
    addFieldVilleEdition();
    addFieldPaysEditeur();
    addFieldVilleEditeur();
    addFieldDepartementEditeur();
    addFieldCommuneEditeur();
    addFieldLieuDitsEditeur();
    addFieldEditeur();
    addFieldCollection();
    addFieldPeriodique();
    addFieldOrganisme();
    addFieldNationalite();

    auteur1FieldHide();
    addEditeurButton();
    addFieldPlusOrganisme();
    addFieldPlusNationalite();
    addFieldPlusVilleEdition();
    addFieldPlusCollection();
    addFieldPlusPeriodique();
    addFieldPlusEditeur();
    addFieldPlusPaysEditeur();
    addFieldPlusVilleEditeur();
    addFieldPlusDepartementEditeur();
    addFieldPlusCommuneEditeur();
    addFieldPlusLieuDitsEditeur();

    hideAll();
    $("#appbundle_collection_TypeBib").change(displayFields);
    displayFields();
});

function addFieldPaysEditeur() {
    addFieldText($("#paysEditeur"), "codePaysEditeur", "Code du pays");
    addFieldText($("#paysEditeur"), "paysFREditeur", "Pays en français");
    addFieldText($("#paysEditeur"), "paysGBEditeur", "Pays en anglais");
    addFieldText($("#paysEditeur"), "paysDEEditeur", "Pays en allemand");
    addFieldText($("#paysEditeur"), "paysESEditeur", "Pays en espagnol");
    addFieldText($("#paysEditeur"), "paysITEditeur", "Pays en italien");

    addButtonAjax($("#codePaysEditeur"), "addPaysEditeur", "Ajouter le pays", addPaysEditeur);
}

function addFieldVilleEditeur() {
    addFieldText($("#villeEditeur"), "nomVilleEditeur", "Nom de la ville");

    addButtonAjax($("#nomVilleEditeur"), "addVilleEditeur", "Ajouter la ville", addVilleEditeur);
}


function addFieldVilleEdition() {
    addFieldText($("#villeEdition"), "nomVilleEdition", "Nom de la ville");

    addButtonAjax($("#nomVilleEdition"), "addVilleEdition", "Ajouter la ville", addVilleEdition);
}

function addFieldDepartementEditeur() {
    addFieldText($("#departementEditeur"), "nomDepartementEditeur", "Nom du département");

    addButtonAjax($("#nomDepartementEditeur"), "addDepartementEditeur", "Ajouter le département", addDepartementEditeur);
}

function addFieldCommuneEditeur() {
    addFieldText($("#communeEditeur"), "nomCommuneEditeur", "Nom de la commune");

    addButtonAjax($("#nomCommuneEditeur"), "addCommuneEditeur", "Ajouter la commune", addCommuneEditeur);
}

function addFieldLieuDitsEditeur() {
    addFieldText($("#lieuDitsEditeur"), "nomLieuDitsEditeur", "Nom du lieu dits");

    addButtonAjax($("#nomLieuDitsEditeur"), "addLieuDitsEditeur", "Ajouter le lieu-dit", addLieuDitsEditeur);
}

function addFieldEditeur() {
    addFieldText($("#editeur"), "nomEditeur", "Nom de l'éditeur");
}

function addFieldCollection() {
    addFieldText($("#collection"), "nomCollection", "Nom de la collection");
    addButtonAjax($("#nomCollection"), "addCollection", "Ajouter la collection", addCollection);
}

function addFieldPeriodique() {
    addFieldText($("#periodique"), "nomPeriodique", "Nom du périodique");
    addButtonAjax($("#nomPeriodique"), "addPeriodique", "Ajouter le périodique", addPeriodique);
}

function addFieldOrganisme() {
    addFieldText($("#typeOrganismeAuteur1"), "nomOrganismeAuteur1", "Nom de l'organisme");
    addButtonAjax($("#nomOrganismeAuteur1"), "addOrganismeAuteur1", "Ajouter l'organisme", addPeriodique);
}

function addFieldNationalite() {
    addFieldText($("#nationaliteAuteur1"), "codeNationaliteAuteur1", "Code de la nationalité");
    addFieldText($("#nationaliteAuteur1"), "nomNationaliteAuteur1", "Nom de la nationalite");
    addButtonAjax($("#codeNationaliteAuteur1"), "addNationaliteAuteur1", "Ajouter la nationalite", addPeriodique);
}

function addFieldPlusEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouvel éditeur");

    buttonAdd.click(function () {
        if ($("#appbundle_collection_paysEditeur").is(":visible")) {
            editeurFieldHide();
        }
        else {
            editeurFieldShow();
        }
    });

    $("#appbundle_collection_editeur").after(buttonAdd);

    editeurFieldHide();
}

function addFieldPlusCollection() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle collection");

    buttonAdd.click(function () {
        if ($("#nomCollection").is(":visible")) {
            collectionFieldHide();
        }
        else {
            collectionFieldShow();
        }
    });

    $("#appbundle_collection_collection").after(buttonAdd);

    collectionFieldHide();
}

function addFieldPlusOrganisme() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouvel organisme");

    buttonAdd.click(function () {
        var auteurNumber = $(this).parent().parent().attr("id").slice(-1);
        if ($("#nomOrganismeAuteur" + auteurNumber).is(":visible")) {
            organismeFieldHide(auteurNumber);
        }
        else {
            organismeFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_organisme").after(buttonAdd);

    organismeFieldHide();
}

function addFieldPlusNationalite() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle nationalite");

    buttonAdd.click(function () {
        var auteurNumber = $(this).parent().parent().attr("id").slice(-1);
        if ($("#nomNationaliteAuteur" + auteurNumber).is(":visible")) {
            nationaliteFieldHide(auteurNumber);
        }
        else {
            nationaliteFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_nationalite").after(buttonAdd);

    nationaliteFieldHide();
}

function addFieldPlusPeriodique() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau périodique");

    buttonAdd.click(function () {
        if ($("#nomPeriodique").is(":visible")) {
            periodiqueFieldHide();
        }
        else {
            periodiqueFieldShow();
        }
    });

    $("#appbundle_collection_periodique").after(buttonAdd);

    periodiqueFieldHide();
}

function addFieldPlusPaysEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau pays");

    buttonAdd.click(function () {
        if ($("#codePaysEditeur").is(":visible")) {
            paysFieldHide();
        }
        else {
            paysFieldShow();
        }
    });

    $("#appbundle_collection_paysEditeur").after(buttonAdd);

    paysFieldHide();
}

function addFieldPlusVilleEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle ville");

    buttonAdd.click(function () {
        if ($("#nomVilleEditeur").is(":visible")) {
            villeEditeurFieldHide();
        }
        else {
            villeEditeurFieldShow();
        }
    });

    $("#appbundle_collection_villeEditeur").after(buttonAdd);

    villeEditeurFieldHide();
}

function addFieldPlusVilleEdition() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle ville");

    buttonAdd.click(function () {
        if ($("#nomVilleEdition").is(":visible")) {
            villeEditionFieldHide();
        }
        else {
            villeEditionFieldShow();
        }
    });

    $("#appbundle_collection_villeEdition").after(buttonAdd);

    villeEditionFieldHide();
}

function addFieldPlusDepartementEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau département");

    buttonAdd.click(function () {
        if ($("#nomDepartementEditeur").is(":visible")) {
            departementFieldHide();
        }
        else {
            departementFieldShow();
        }
    });

    $("#appbundle_collection_departementEditeur").after(buttonAdd);

    departementFieldHide();
}

function addFieldPlusCommuneEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle commune");

    buttonAdd.click(function () {
        if ($("#nomCommuneEditeur").is(":visible")) {
            communeFieldHide();
        }
        else {
            communeFieldShow();
        }
    });

    $("#appbundle_collection_communeEditeur").after(buttonAdd);

    communeFieldHide();
}

function addFieldPlusLieuDitsEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau lieu-dit");

    buttonAdd.click(function () {
        if ($("#nomLieuDitsEditeur").is(":visible")) {
            lieuDitsFieldHide();
        }
        else {
            lieuDitsFieldShow();
        }
    });

    $("#appbundle_collection_lieuDitsEditeur").after(buttonAdd);

    lieuDitsFieldHide();
}