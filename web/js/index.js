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

function addVille() {
    $.ajax({
        url: window.location + "/pays/add",
        type: 'POST',
        data: {
            nom: $("nomVilleEditeur").val()
        },
        success: function (response) {
            console.log(response);
        },
        error: function (err) {
            console.log(err);
        }
    });
}

function addCollection() {
    $.ajax({
        url: window.location + "/collection/add",
        type: 'POST',
        data: {
            nom: $("nomCollectionEditeur").val()
        }
    });
}

function addCommune() {
    $.ajax({
        url: window.location + "/commune/add",
        type: 'POST',
        data: {
            nom: $("nomCommuneEditeur").val()
        }
    });
}

function addLieuDits() {
    $.ajax({
        url: window.location + "/lieuDits/add",
        type: 'POST',
        data: {
            nom: $("nomLieuDitsEditeur").val()
        }
    });
}

function addDepartement() {
    $.ajax({
        url: window.location + "/departement/add",
        type: 'POST',
        data: {
            nom: $("nomDepartementEditeur").val()
        }
    });
}

function addButtonAjax(parent, name, label, callback) {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-primary",
        style: "margin-left: 10px; margin-top: 10px;",
        id: name
    });

    buttonAdd.append(label);

    buttonAdd.click(callback);

    parent.after(buttonAdd);
    console.log(parent);
    // buttonAdd.hide();
}

function addFieldPays() {
    addFieldText($("#paysEditeur"), "codePaysEditeur", "Code du pays");
    addFieldText($("#paysEditeur"), "paysFREditeur", "Pays en français");
    addFieldText($("#paysEditeur"), "paysGBEditeur", "Pays en anglais");
    addFieldText($("#paysEditeur"), "paysDEEditeur", "Pays en allemand");
    addFieldText($("#paysEditeur"), "paysESEditeur", "Pays en espagnol");
    addFieldText($("#paysEditeur"), "paysITEditeur", "Pays en italien");

    addHr($("#appbundle_collection_editeur"), "hrPaysDebut");
    addHr($("#codePaysEditeur"), "hrPaysFin");

    addButtonAjax($("#codePaysEditeur"), "addPays", "Ajouter le pays", addVille());
}

function addHr(parent, name) {
    var field = $('<hr>').attr({
        id: name,
    });

    parent.after(field);
    field.hide();
}

function addFieldVille() {
    addFieldText($("#villeEditeur"), "nomVilleEditeur", "Nom de la ville");

    addHr($("#codePaysEditeur"), "hrVilleDebut");
    addHr($("#nomVilleEditeur"), "hrVilleFin");
}

function addFieldDepartement() {
    addFieldText($("#departementEditeur"), "nomDepartementEditeur", "Nom du département");

    addHr($("#villeEditeur"), "hrDepartementDebut");
    addHr($("#nomDepartementEditeur"), "hrDepartementFin");
}

function addFieldCommune() {
    addFieldText($("#communeEditeur"), "nomCommuneEditeur", "Nom de la commune");

    addHr($("#departementEditeur"), "hrCommuneDebut");
    addHr($("#nomCommuneEditeur"), "hrCommuneFin");
}

function addFieldLieuDits() {
    addFieldText($("#lieuDitsEditeur"), "nomLieuDitsEditeur", "Nom du lieu dits");

    addHr($("#communeEditeur"), "hrLieuDitsDebut");
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
            villeFieldHide();
        }
        else {
            villeFieldShow();
        }
    });

    $("#appbundle_collection_villeEditeur").after(buttonAdd);

    villeFieldHide();
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

function editeurFieldHide() {
    $("#appbundle_collection_paysEditeur").parent().parent().hide();
    $("#appbundle_collection_villeEditeur").parent().parent().hide();
    $("#appbundle_collection_departementEditeur").parent().parent().hide();
    $("#appbundle_collection_communeEditeur").parent().parent().hide();
    $("#appbundle_collection_lieuDitsEditeur").parent().parent().hide();

    paysFieldHide();
    villeFieldHide();
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

    $("#hrPaysDebut").hide();
    $("#hrPaysFin").hide();
}

function paysFieldShow() {
    $("#codePaysEditeur").parent().parent().show();
    $("#paysFREditeur").parent().parent().show();
    $("#paysGBEditeur").parent().parent().show();
    $("#paysDEEditeur").parent().parent().show();
    $("#paysESEditeur").parent().parent().show();
    $("#paysITEditeur").parent().parent().show();

    $("#hrPaysDebut").show();

    if (!$("#hrVilleDebut").is(":visible")) {
        $("#hrPaysFin").show();
    }

    $("#addPays").show();
}

function villeFieldHide() {
    $("#nomVilleEditeur").parent().parent().hide();

    $("#hrVilleDebut").hide();
    $("#hrVilleFin").hide();
}

function villeFieldShow() {
    $("#nomVilleEditeur").parent().parent().show();

    if (!$("#hrPaysFin").is(":visible")) {
        $("#hrVilleDebut").show();
    }

    if (!$("#hrDepartementDebut").is(":visible")) {
        $("#hrVilleFin").show();
    }
}

function departementFieldHide() {
    $("#nomDepartementEditeur").parent().parent().hide();

    $("#hrDepartementDebut").hide();
    $("#hrDepartementFin").hide();
}

function departementFieldShow() {
    $("#nomDepartementEditeur").parent().parent().show();

    if (!$("#hrVilleFin").is(":visible")) {
        $("#hrDepartementDebut").show();
    }

    if (!$("#hrCommuneDebut").is(":visible")) {
        $("#hrDepartementFin").show();
    }
}

function communeFieldHide() {
    $("#nomCommuneEditeur").parent().parent().hide();

    $("#hrCommuneDebut").hide();
    $("#hrCommuneFin").hide();
}

function communeFieldShow() {
    $("#nomCommuneEditeur").parent().parent().show();

    if (!$("#hrDepartementFin").is(":visible")) {
        $("#hrCommuneDebut").show();
    }

    if (!$("#hrLieuDitsDebut").is(":visible")) {
        $("#hrCommuneFin").show();
    }
}

function lieuDitsFieldHide() {
    $("#nomLieuDitsEditeur").parent().parent().hide();

    $("#hrLieuDitsDebut").hide();
    $("#hrLieuDitsFin").hide();
}

function lieuDitsFieldShow() {
    $("#nomLieuDitsEditeur").parent().parent().show();

    if (!$("#hrCommuneFin").is(":visible")) {
        $("#hrLieuDitsDebut").show();
    }
}