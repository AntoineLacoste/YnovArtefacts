$(document).ready(function () {
    addFieldPays();
    addFieldVille();
    addFieldDepartement();
    addFieldCommune();
    addFieldLieuDits();

    addFieldPlusEditeur();
    addFieldPlusPaysEditeur();
    addFieldPlusVilleEditeur();
    addFieldPlusDepartementEditeur();
    addFieldPlusCommuneEditeur();
    addFieldPlusLieuDitsEditeur();
});

function addFieldText(parent, name, labelStr) {
    var div = $('<div>').attr({
        class: "form-group"
    });

    var label = $('<label>').attr({
        class: "col-md-3 control-label"
    });

    var divField = $('<div>').attr({
        class: "col-sm-8 col-sm-pad"
    });

    var field = $('<input>').attr({
        type: 'text',
        id: name,
        name: name,
        class: "form-control"
    });

    label.append(labelStr);
    div.append(label);
    divField.append(field);
    div.append(divField);
    parent.after(div);
}

function addFieldPays() {
    addFieldText($("#paysEditeur"), "codePaysEditeur", "Code du pays");
    addFieldText($("#paysEditeur"), "paysFREditeur", "Pays en français");
    addFieldText($("#paysEditeur"), "paysGBEditeur", "Pays en anglais");
    addFieldText($("#paysEditeur"), "paysDEEditeur", "Pays en allemand");
    addFieldText($("#paysEditeur"), "paysESEditeur", "Pays en espagnol");
    addFieldText($("#paysEditeur"), "paysITEditeur", "Pays en italien");
}

function addFieldVille() {
    addFieldText($("#villeEditeur"), "nomVilleEditeur", "Nom de la ville");
}

function addFieldDepartement() {
    addFieldText($("#departementEditeur"), "nomDepartementEditeur", "Nom du département");
}

function addFieldCommune() {
    addFieldText($("#communeEditeur"), "nomCommuneEditeur", "Nom de la commune");
}

function addFieldLieuDits() {
    addFieldText($("#lieuDitsEditeur"), "nomLieuDitsEditeur", "Nom du lieu dits");
}

function addFieldPlusEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouvel éditeur");

    buttonAdd.click(function () {
        if ($("#appbundle_collection_paysEditeur").is(":visible")) {
            $("#appbundle_collection_paysEditeur").parent().parent().hide();
            $("#appbundle_collection_villeEditeur").parent().parent().hide();
            $("#appbundle_collection_departementEditeur").parent().parent().hide();
            $("#appbundle_collection_communeEditeur").parent().parent().hide();
            $("#appbundle_collection_lieuDitsEditeur").parent().parent().hide();
        }
        else {
            $("#appbundle_collection_paysEditeur").parent().parent().show();
            $("#appbundle_collection_villeEditeur").parent().parent().show();
            $("#appbundle_collection_departementEditeur").parent().parent().show();
            $("#appbundle_collection_communeEditeur").parent().parent().show();
            $("#appbundle_collection_lieuDitsEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_editeur").after(buttonAdd);

    $("#appbundle_collection_paysEditeur").parent().parent().hide();
    $("#appbundle_collection_villeEditeur").parent().parent().hide();
    $("#appbundle_collection_departementEditeur").parent().parent().hide();
    $("#appbundle_collection_communeEditeur").parent().parent().hide();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().hide();
}

function addFieldPlusPaysEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau pays");

    buttonAdd.click(function () {
        if ($("#codePaysEditeur").is(":visible")) {
            $("#codePaysEditeur").parent().parent().hide();
            $("#paysFREditeur").parent().parent().hide();
            $("#paysGBEditeur").parent().parent().hide();
            $("#paysDEEditeur").parent().parent().hide();
            $("#paysESEditeur").parent().parent().hide();
            $("#paysITEditeur").parent().parent().hide();
        }
        else {
            $("#codePaysEditeur").parent().parent().show();
            $("#paysFREditeur").parent().parent().show();
            $("#paysGBEditeur").parent().parent().show();
            $("#paysDEEditeur").parent().parent().show();
            $("#paysESEditeur").parent().parent().show();
            $("#paysITEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_paysEditeur").after(buttonAdd);

    $("#codePaysEditeur").parent().parent().hide();
    $("#paysFREditeur").parent().parent().hide();
    $("#paysGBEditeur").parent().parent().hide();
    $("#paysDEEditeur").parent().parent().hide();
    $("#paysESEditeur").parent().parent().hide();
    $("#paysITEditeur").parent().parent().hide();
}

function addFieldPlusVilleEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle ville");

    buttonAdd.click(function () {
        if ($("#nomVilleEditeur").is(":visible")) {
            $("#nomVilleEditeur").parent().parent().hide();
        }
        else {
            $("#nomVilleEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_villeEditeur").after(buttonAdd);

    $("#nomVilleEditeur").parent().parent().hide();
}

function addFieldPlusDepartementEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau département");

    buttonAdd.click(function () {
        if ($("#nomDepartementEditeur").is(":visible")) {
            $("#nomDepartementEditeur").parent().parent().hide();
        }
        else {
            $("#nomDepartementEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_departementEditeur").after(buttonAdd);

    $("#nomDepartementEditeur").parent().parent().hide();
}

function addFieldPlusCommuneEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle commune");

    buttonAdd.click(function () {
        if ($("#nomCommuneEditeur").is(":visible")) {
            $("#nomCommuneEditeur").parent().parent().hide();
        }
        else {
            $("#nomCommuneEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_communeEditeur").after(buttonAdd);

    $("#nomCommuneEditeur").parent().parent().hide();
}

function addFieldPlusLieuDitsEditeur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau lieu-dit");

    buttonAdd.click(function () {
        if ($("#nomLieuDitsEditeur").is(":visible")) {
            $("#nomLieuDitsEditeur").parent().parent().hide();
        }
        else {
            $("#nomLieuDitsEditeur").parent().parent().show();
        }
    });

    $("#appbundle_collection_lieuDitsEditeur").after(buttonAdd);

    $("#nomLieuDitsEditeur").parent().parent().hide();
}