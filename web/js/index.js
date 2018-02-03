$(document).ready(function () {
    addFieldVilleEdition();
    addFieldPaysEditeur();
    addFieldVilleEditeur();
    addFieldDepartementEditeur();
    addFieldCommuneEditeur();
    addFieldLieuDitsEditeur();
    addFieldEditeur();

    addEditeurButton();
    addFieldPlusVilleEdition();
    addFieldPlusEditeur();
    addFieldPlusPaysEditeur();
    addFieldPlusVilleEditeur();
    addFieldPlusDepartementEditeur();
    addFieldPlusCommuneEditeur();
    addFieldPlusLieuDitsEditeur();

    hideAll();
    $("#appbundle_collection_TypeBib").change(displayField);
});

function addFieldPaysEditeur() {
    addFieldText($("#paysEditeur"), "codePaysEditeur", "Code du pays");
    addFieldText($("#paysEditeur"), "paysFREditeur", "Pays en français");
    addFieldText($("#paysEditeur"), "paysGBEditeur", "Pays en anglais");
    addFieldText($("#paysEditeur"), "paysDEEditeur", "Pays en allemand");
    addFieldText($("#paysEditeur"), "paysESEditeur", "Pays en espagnol");
    addFieldText($("#paysEditeur"), "paysITEditeur", "Pays en italien");

    addHr($("#appbundle_collection_editeur"), "hrPaysEditeurDebut");
    addHr($("#codePaysEditeur"), "hrPaysEditeurFin");

    addButtonAjax($("#codePaysEditeur"), "addPaysEditeur", "Ajouter le pays", addPaysEditeur);
}

function addFieldVilleEditeur() {
    addFieldText($("#villeEditeur"), "nomVilleEditeur", "Nom de la ville");

    addHr($("#addPays"), "hrVilleEditeurDebut");
    addHr($("#nomVilleEditeur"), "hrVilleEditeurFin");

    addButtonAjax($("#nomVilleEditeur"), "addVilleEditeur", "Ajouter la ville", addVilleEditeur);
}


function addFieldVilleEdition() {
    addFieldText($("#villeEdition"), "nomVilleEdition", "Nom de la ville");

    addHr($("#appbundle_collection_titreRef"), "hrVilleEditionDebut");
    addHr($("#nomVilleEdition"), "hrVilleEditionFin");

    addButtonAjax($("#nomVilleEdition"), "addVilleEdition", "Ajouter la ville", addVilleEdition);
}

function addFieldDepartementEditeur() {
    addFieldText($("#departementEditeur"), "nomDepartementEditeur", "Nom du département");

    addHr($("#nomVilleEditeur"), "hrDepartementEditeurDebut");
    addHr($("#nomDepartementEditeur"), "hrDepartementEditeurFin");

    addButtonAjax($("#nomDepartementEditeur"), "addDepartementEditeur", "Ajouter le département", addDepartementEditeur);
}

function addFieldCommuneEditeur() {
    addFieldText($("#communeEditeur"), "nomCommuneEditeur", "Nom de la commune");

    addHr($("#nomDepartementEditeur"), "hrCommuneEditeurDebut");
    addHr($("#nomCommuneEditeur"), "hrCommuneEditeurFin");

    addButtonAjax($("#nomCommuneEditeur"), "addCommuneEditeur", "Ajouter la commune", addCommuneEditeur);
}

function addFieldLieuDitsEditeur() {
    addFieldText($("#lieuDitsEditeur"), "nomLieuDitsEditeur", "Nom du lieu dits");

    addHr($("#appbundle_collection_communeEditeur"), "hrLieuDitsEditeurDebut");

    addButtonAjax($("#nomLieuDitsEditeur"), "addLieuDitsEditeur", "Ajouter le lieu-dit", addLieuDitsEditeur);
}

function addFieldEditeur() {
    addFieldText($("#editeur"), "nomEditeur", "Nom de l'éditeur");

    addButtonAjax($("#addLieuDitsEditeur"), "addEditeur", "Ajouter l'éditeur", addEditeur);
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