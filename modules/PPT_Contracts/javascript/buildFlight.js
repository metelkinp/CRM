Flight = function () {
};

Flight.buildFlight = function (flightData, editMode) {
    var container = $("<div style='position: relative; width: 100%; display: inline-block;'></div>");
    var segmentsContainer = $("<div style='position: relative; width: 87%; display: inline-block;'></div>");

    container.append(segmentsContainer);

    buildSegments(flightData, editMode, segmentsContainer);

    return container;
};

function buildSegments(f, em, scont) {
    var segments = f.segments;

    $.each(segments, function (i, segment) {
        scont.append(buildOneSegment(segment));
    });
}

function buildOneSegment(segment) {
    var segmentBlock = $("<table style='position: relative; width: 30%; display: inline-block; " +
        "margin: 5px; border: 1px solid lightgray; border-radius: 3px; background-color: lightgrey'></table>");

    var titleBlock = $("<thead></thead>");
    var tiRow = $("<tr></tr>");
    tiRow.append($("<th></th>").text(segment.origin));
    tiRow.append($("<th></th>").text('->'));
    tiRow.append($("<th></th>").text(segment.destination));
    titleBlock.append(tiRow);

    segmentBlock.append(titleBlock);

    var bodyBlock = $("<tbody></tbody>");
    var fNo = $("<tr></tr>");
    fNo.append($("<th style='text-align: left'></th>").text('Flight No.:'));
    fNo.append($("<th></th>"));
    fNo.append($("<td style='text-align: center'></td>").text(segment.flightCode));
    bodyBlock.append(fNo);
    var acType = $("<tr></tr>");
    acType.append($("<th style='text-align: left'></th>").text('Aircraft Type:'));
    acType.append($("<th></th>"));
    acType.append($("<td style='text-align: center'></td>").text(segment.acType));
    bodyBlock.append(acType);
    var dprt = $("<tr></tr>");
    dprt.append($("<th style='text-align: left'></th>").text('Depart:'));
    dprt.append($("<th></th>"));
    dprt.append($("<td style='text-align: center'></td>").text(MyTimeUnit.getDateTime(new Date(segment.departDate))));
    bodyBlock.append(dprt);
    var arv = $("<tr></tr>");
    arv.append($("<th style='text-align: left'></th>").text('Arrival:'));
    arv.append($("<th></th>"));
    arv.append($("<td style='text-align: center'></td>").text(MyTimeUnit.getDateTime(new Date(segment.arrivDate))));
    bodyBlock.append(arv);

    segmentBlock.append(bodyBlock);

    return segmentBlock;
};



