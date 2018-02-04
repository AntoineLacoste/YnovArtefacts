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
    addFieldTypeOrganisme();
    addFieldNationalite();
    addFieldAuteur();

    auteurFieldHide(1);
    addPlusBiblio();

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
    addFieldPlusPaysEditeur();
}

function addFieldVilleEditeur() {
    addFieldText($("#villeEditeur"), "nomVilleEditeur", "Nom de la ville");

    addButtonAjax($("#nomVilleEditeur"), "addVilleEditeur", "Ajouter la ville", addVilleEditeur);
    addFieldPlusVilleEditeur();
}


function addFieldVilleEdition() {
    addFieldText($("#villeEdition"), "nomVilleEdition", "Nom de la ville");
    addButtonAjax($("#nomVilleEdition"), "addVilleEdition", "Ajouter la ville", addVilleEdition);

    addFieldPlusVilleEdition();
}

function addFieldDepartementEditeur() {
    addFieldText($("#departementEditeur"), "nomDepartementEditeur", "Nom du département");

    addButtonAjax($("#nomDepartementEditeur"), "addDepartementEditeur", "Ajouter le département", addDepartementEditeur);
    addFieldPlusDepartementEditeur();
}

function addFieldCommuneEditeur() {
    addFieldText($("#communeEditeur"), "nomCommuneEditeur", "Nom de la commune");

    addButtonAjax($("#nomCommuneEditeur"), "addCommuneEditeur", "Ajouter la commune", addCommuneEditeur);
    addFieldPlusCommuneEditeur();
}

function addFieldLieuDitsEditeur() {
    addFieldText($("#lieuDitsEditeur"), "nomLieuDitsEditeur", "Nom du lieu dits");

    addButtonAjax($("#nomLieuDitsEditeur"), "addLieuDitsEditeur", "Ajouter le lieu-dit", addLieuDitsEditeur);
    addFieldPlusLieuDitsEditeur();
}

function addFieldEditeur() {
    addFieldText($("#editeur"), "nomEditeur", "Nom de l'éditeur");
    addEditeurButton();
    addFieldPlusEditeur();
}

function addFieldCollection() {
    addFieldText($("#collection"), "nomCollection", "Nom de la collection");
    addButtonAjax($("#nomCollection"), "addCollection", "Ajouter la collection", addCollection);

    addFieldPlusCollection();
}

function addFieldPeriodique() {
    addFieldText($("#periodique"), "nomPeriodique", "Nom du périodique");
    addButtonAjax($("#nomPeriodique"), "addPeriodique", "Ajouter le périodique", addPeriodique);
    addFieldPlusPeriodique();
}

function addFieldTypeOrganisme() {
    addFieldText($("#typeOrganismeAuteur"), "descriptionTypeOrganismeAuteur", "Description du type");
    addButtonAjax($("#descriptionTypeOrganismeAuteur"), "addOrganismeAuteur", "Ajouter le type d'organisme", addTypeOrganisme);

    addFieldPlusTypeOrganisme();
}

function addFieldOrganisme() {
    addFieldText($("#hrTypeOrganisme2Auteur"), "nomOrganismeAuteur", "Nom de l'organisme");
    addButtonAjax($("#nomOrganismeAuteur"), "addOrganismeAuteur", "Ajouter l'organisme", addOrganisme);
    addFieldPlusOrganisme();
}

function addFieldNationalite() {
    addFieldText($("#nationaliteAuteur"), "codeNationaliteAuteur", "Code de la nationalité");
    addFieldText($("#nationaliteAuteur"), "nomNationaliteAuteur", "Nom de la nationalite");
    addButtonAjax($("#codeNationaliteAuteur"), "addNationaliteAuteur", "Ajouter la nationalite", addNationalite);

    addFieldPlusNationalite();
}

function addFieldAuteur() {
    addFieldText($("#auteur1 #auteur"), "dateVieAuteur", "Date de vie de l'auteur");
    addFieldText($("#auteur1 #auteur"), "noteAuteur", "Note sur l'auteur");
    addFieldText($("#auteur1 #auteur"), "prenomAuteur", "Prenom de l'auteur");
    addFieldText($("#auteur1 #auteur"), "nomAuteur", "Nom de l'auteur");
    addAuteurButton();
    addFieldPlusAuteur();
    addFieldPlusAuteurBiblio();
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

function addFieldPlusAuteur() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouvel auteur");

    buttonAdd.click(function () {
        var auteurNumber = $(this).parent().parent().parent().attr("id").slice(-1);
        if ($("#auteur" + auteurNumber + " #nomAuteur").is(":visible")) {
            auteurFieldHide(auteurNumber);
        }
        else {
            auteurFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_auteur").after(buttonAdd);

    auteurFieldHide(1);
}

function addFieldPlusAuteurBiblio() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-info",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouvel auteur au document");

    buttonAdd.click(addAuteurGroup);

    $("#auteurHeader").append(buttonAdd);
}

function addPlusBiblio() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-info",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Valider le document");

    buttonAdd.click(addBibliographie);

    $("#migrationHeader").append(buttonAdd);
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
        var auteurNumber = $(this).parent().parent().parent().attr("id").slice(-1);
        if ($("#auteur" + auteurNumber + " #nomOrganismeAuteur").is(":visible")) {
            organismeFieldHide(auteurNumber);
        }
        else {
            organismeFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_organisme").after(buttonAdd);

    organismeFieldHide(1);
}

function addFieldPlusTypeOrganisme() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter un nouveau type d'organisme");

    buttonAdd.click(function () {
        var auteurNumber = $(this).parent().parent().parent().attr("id").slice(-1);
        if ($("#auteur" + auteurNumber + " #descriptionTypeOrganismeAuteur").is(":visible")) {
            typeOrganismeFieldHide(auteurNumber);
        }
        else {
            typeOrganismeFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_typeOrganisme").after(buttonAdd);

    typeOrganismeFieldHide(1);
}

function addFieldPlusNationalite() {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-success",
        style: "margin-left: 10px;"
    });

    buttonAdd.append("Ajouter une nouvelle nationalite");

    buttonAdd.click(function () {
        var auteurNumber = $(this).parent().parent().parent().attr("id").slice(-1);
        if ($("#auteur" + auteurNumber + " #nomNationaliteAuteur").is(":visible")) {
            nationaliteFieldHide(auteurNumber);
        }
        else {
            nationaliteFieldShow(auteurNumber);
        }
    });

    $("#appbundle_collection_nationalite").after(buttonAdd);

    nationaliteFieldHide(1);
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