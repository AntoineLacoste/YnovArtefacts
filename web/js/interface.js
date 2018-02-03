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