var authorsPersee = [];
var bookPersee = {}

function persee() {
    var title = $("#book_title").val();
    $.ajax({
        url: "http://data.persee.fr/sparql?default-graph-uri=http%3A%2F%2Fdata.persee.fr&query=PREFIX+rdfs%3A+%3Chttp%3A%2F%2Fwww.w3.org%2F2000%2F01%2Frdf-schema%23%3E%0D%0APREFIX+dcterms%3A+%3Chttp%3A%2F%2Fpurl.org%2Fdc%2Fterms%2F%3E%0D%0APREFIX+n2%3A+%3Chttp%3A%2F%2Fpurl.org%2Fontology%2Fbibo%2F%3E%0D%0ASELECT+DISTINCT+%3FBook_1+%3Ftitle_34%0D%0AWHERE+%7B+%3FBook_1+a+n2%3ABook+.%0D%0A++++++++%7B+%3FBook_1+dcterms%3Atitle+%3Ftitle_34+.%0D%0A++++++++++%3Ftitle_34+rdfs%3Alabel+%3Fconstr_label+.%0D%0A++++++++++FILTER+%28+REGEX%28str%28%3Fconstr_label%29%2C+%22" + title + "%22%2C+%27i%27%29+%29+%7D%0D%0A++++++++UNION+%7B+%3FBook_1+dcterms%3Atitle+%3Ftitle_34+.%0D%0A++++++++++++++++FILTER+%28+REGEX%28str%28%3Ftitle_34%29%2C+%22" + title + "%22%2C+%27i%27%29+%29+%7D+%7D%0D%0ALIMIT+200&format=application%2Fsparql-results%2Bjson&timeout=0&debug=on",
        success: function (response) {
            var ul = $("#book_results");
            ul.html("");
            for (var i = 0; i < response.results.bindings.length; i++) {
                console.log(response.results.bindings[i].Book_1.value);
                var li = $('<li>').attr({
                    class: "form-group"
                });

                li.append(response.results.bindings[i].title_34.value);

                var buttonChooseBook = $('<div>').attr({
                    class: "btn btn-info",
                    style: "margin-left: 10px;",
                    url: response.results.bindings[i].Book_1.value
                });

                buttonChooseBook.append("Pré-remplir avec ce livre");

                buttonChooseBook.click(function () {
                    perseeByBook($(this).attr("url"));
                });

                li.append(buttonChooseBook);
                ul.append(li);
            }
        },
        error: function (error) {
            console.log(error);
        }
    })
};

function perseeByBook(url) {
    $.ajax({
        url: url,
        success: function (rdfXml) {
            authorsPersee = [];
            var title = $(rdfXml).find($.escapeSelector("dcterms:title")).text();
            var dateEdition = $(rdfXml).find($.escapeSelector("persee:dateOfPrintPublication")).text();

            var req = [];
            for (var j = 0; j < $(rdfXml).find($.escapeSelector("marcrel:aut")).length; j++) {
                req.push(ajaxAuthor($($(rdfXml).find($.escapeSelector("marcrel:aut"))[j]).attr("rdf:resource")));
            }

            $.when.apply($, req).done(function () {
                console.log(title);
                console.log(dateEdition);
                console.log(authorsPersee);
                bookPersee = {
                    title: title,
                    dateEdition: dateEdition,
                    authors: authorsPersee
                };
                console.log(bookPersee);
                $("#appbundle_collection_titreRef").val(title);
                $("#appbundle_collection_dateEdition_year").val(dateEdition);
                $("#appbundle_collection_dateEdition").val(dateEdition);

                $(".auteurGroup").each(function (i, e) {
                    if (i > 1) {
                        $(e).remove();
                    }
                });

                for (var k = 1; k < authorsPersee.length; k++) {
                    addAuteurGroup();
                }

                for (k = 0; k < authorsPersee.length; k++) {
                    if (checkSelectHasValue("appbundle_collection_auteur", authorsPersee[k].firstName + authorsPersee[k].lastName)) {
                        $("#auteurs" + (k + 1)).val(authorsPersee[k].firstName + authorsPersee[k].lastName);
                    }
                }
            });
        },
        error: function (error) {
            console.log(error);
        }
    })
}

function ajaxAuthor(url) {
    return $.ajax({
        url: url,
        success: function (response) {
            var author = rdfToAuthor(response);
            authorsPersee.push(author);
        },
        error: function (error) {
            console.log(error);
        }
    })
}

function rdfToAuthor(rdfXml) {
    var firstName = $(rdfXml).find($.escapeSelector("foaf:givenName")).text();
    var lastName = $(rdfXml).find($.escapeSelector("foaf:familyName")).text();
    var birthDate = $(rdfXml).find($.escapeSelector("schema:birthDate")).text();
    var deathDate = $(rdfXml).find($.escapeSelector("schema:deathDate")).text();

    return {
        firstName: firstName,
        lastName: lastName,
        birthDate: birthDate,
        deathDate: deathDate
    };
}