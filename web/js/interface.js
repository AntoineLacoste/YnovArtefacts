function addFieldText(parent, name, labelStr) {
    var div = $('<div>').attr({
        class: "form-group form-inline"
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

function addEditeurButton() {
    var div = $('<div>').attr({
        class: "form-group",
        id: "addEditeur"
    });

    var label = $('<label>').attr({
        class: "col-md-6 control-label"
    });

    var divField = $('<div>').attr({
        class: "col-sm-8 col-sm-pad"
    });

    var buttonAdd = $('<div>').attr({
        class: "btn btn-primary",
        style: "margin-left: 10px; margin-top: 10px;"
    });

    buttonAdd.append("Ajouter l'éditeur");
    buttonAdd.append(label);

    buttonAdd.click(addEditeur);

    divField.append(label);
    divField.append(buttonAdd);
    div.append(divField);

    $("#nomLieuDitsEditeur").parent().parent().after(div);


    editeurFieldHide();
}

function addAuteurButton() {
    var div = $('<div>').attr({
        class: "form-group",
        id: "addAuteur"
    });

    var label = $('<label>').attr({
        class: "col-md-6 control-label"
    });

    var divField = $('<div>').attr({
        class: "col-sm-8 col-sm-pad"
    });

    var buttonAdd = $('<div>').attr({
        class: "btn btn-primary",
        style: "margin-left: 10px; margin-top: 10px;"
    });

    buttonAdd.append("Ajouter l'auteur");
    buttonAdd.append(label);

    buttonAdd.click(addAuteur);

    divField.append(label);
    divField.append(buttonAdd);
    div.append(divField);

    $("#addNationaliteAuteur").parent().parent().after(div);


    editeurFieldHide();
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
}

function addButtonAjaxAuteur(parent, name, label, callback) {
    var buttonAdd = $('<div>').attr({
        class: "btn btn-primary",
        style: "margin-left: 10px; margin-top: 10px;",
        id: name
    });

    buttonAdd.append(label);

    buttonAdd.click(callback);

    parent.after(buttonAdd);
}

function addHr(parent, name) {
    var field = $('<hr>').attr({
        id: name
    });

    parent.after(field);
    field.hide();
}

function addHrBefore(parent, name) {
    var field = $('<hr>').attr({
        id: name
    });

    parent.before(field);
    field.hide();
}

function addAuteurGroup() {
    var currentAuteurGroup = $(".auteurGroup").last();
    var nextAuteurGroup = currentAuteurGroup.clone(true, true);
    var currentAuteurGroupId = parseInt(currentAuteurGroup.attr("id").slice(-1));
    var nextAuteurGroupId = "auteur" + (currentAuteurGroupId + 1);

    nextAuteurGroup.attr("id", nextAuteurGroupId);
    currentAuteurGroup.after(nextAuteurGroup);
}
