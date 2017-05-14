Order = function() {
    var columns = ['pcs', 'length', 'width', 'height', 'weight', 'volume', 'uld_type', 'no_uld', 'load_priority', 'remarks'];

    function addLineItem() {
        var last = $('.lims-body > .lims-body-container:last');

        // clone last row
        var copy = last.clone(true);

        //get and set new row number
        var rowElement = $(copy).find('div.lims-body-row:first');
        var newRowID = Number(last[0].dataset.id) + 1;
        copy[0].dataset.id = newRowID;
        copy.find('div.lims-icon-box > span')[0].dataset.id = newRowID;

        //set default values
        rowElement.find('div.lims-cell > input').each(function () {
            $(this).val('');
        });

        rowElement.find('div.lims-cell > input.lims-charge-calc, div.lims-cell > input.lims-volume-calc').each(function () {
            var elem = $(this);
            elem.val(1);
            var oldVal = elem[0].dataset.row;
            var newVal = 'row' + newRowID;
            elem[0].dataset.row = newVal;
            elem.removeClass(oldVal);
            elem.addClass(newVal);
        });

        //change glypicon and action
        var glyph = last.find('div.lims-icon-box > span');
        glyph.off('click');
        glyph.on('click', function (e) {
            var id = e.target.dataset.id;
            $('.lims-body-container[data-id=\'' + id + '\']').remove();
        });
        glyph.removeClass('glyphicon-plus');
        glyph.removeClass('add-line-item');
        glyph.addClass('glyphicon-minus');
        glyph.addClass('remove-line-item');
        glyph.attr('title', 'Remove Line Item');

        //append new row
        $('.lims-body').append(copy);

    }

    function save() {
        var res = [];

        $('.lims-body-row').each(function () {
            var item = {};
            var i = 0;
            $(this).find('input').each(function () {
                item[columns[i++]] = $(this).val();
            });
            res.push(item);
        });

        //console.log(res);
        return res;
    }

    function restoreItems(data, editMode) {
        var body = $('.lims-body');
        $('.lims-body > .lims-body-container').remove();

        $.each(data, function (index, obj) {
            body.append(buildRow(obj, index + 1, editMode));
        });

        if (editMode !== undefined) {
            var last = $('.lims-body > .lims-body-container:last');
            var glyph = last.find('div.lims-icon-box > span');
            glyph.off('click');
            glyph.on('click', addLineItem);
            glyph.removeClass('glyphicon-minus');
            glyph.removeClass('remove-line-item');
            glyph.addClass('glyphicon-plus');
            glyph.addClass('add-line-item');
        }
    }

    function buildRow(data, id, editMode) {
        var container = $('<div class="col-sm-12 lims-body-container" data-id="' + id + '"></div>');
        var row = $('<div class="col-sm-11 lims-basic lims-body-row"></div>');
        var basic = '<div class="lims-basic lims-cell"></div>';

        if (editMode !== undefined) {
            var rowId = 'row' + id;

            row.append($(basic).append($('<input class="lims-charge-calc ' + rowId +
                ' pcs" type="text" value="' + data.pcs + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' length" type="text" value="' + data.length + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' width" type="text" value="' + data.width + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' height" type="text" value="' + data.height + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="weight" type="text" value="' +
                data.weight + '">')));
            row.append($(basic).append($('<input class="lims-charge-calc ' + rowId +
                ' volume" type="text" value="' + data.volume + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="uld_type" type="text" value="' +
                data.uld_type + '">')));
            row.append($(basic).append($('<input class="no_uld" type="text" value="' +
                data.no_uld + '">')));
            row.append($(basic).append($('<input class="load_priority" type="text" value="' +
                data.load_priority + '">')));
            row.append($(basic).addClass('lims-last-cell').append($('<input class="remarks" type="text" value="' +
                data.remarks + '">')));
        } else {
            row.append($(basic).text(data.pcs));
            row.append($(basic).text(data.length));
            row.append($(basic).text(data.width));
            row.append($(basic).text(data.height));
            row.append($(basic).text(data.weight));
            row.append($(basic).text(data.volume));
            row.append($(basic).text(data.uld_type));
            row.append($(basic).text(data.no_uld));
            row.append($(basic).text(data.load_priority));
            row.append($(basic).addClass('lims-last-cell').text(data.remarks));
        }

        container.append(row);

        var iconBox = $('<div class="col-sm-1 lims-basic lims-icon-box"></div>');
        if (editMode !== undefined) {
            var glyph = $('<span class="glyphicon glyphicon-minus remove-line-item" data-id="' +
                id + '" title="Remove Line Item"></span>');
            glyph.on('click', function (e) {
                var targId = e.target.dataset.id;
                $('.lims-body-container[data-id=\'' + targId + '\']').remove();
            });
            iconBox.append(glyph);
        }

        container.append(iconBox);

        return container;
    }

    return {
        addLineItem: addLineItem,
        save: save,
        restoreItems: restoreItems
    }
};

$(document).ready(function () {

    //use in detail-view scope
    if ($('.detail-view')[0] !== undefined) {
        console.log('SETUP');
        var order = new Order();

        //hidden
        $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
        $(".label:contains('Line Items')").css({visibility: 'hidden', height: 0});

        var litems = $("div[field='line_items']");
        litems.css({visibility: 'hidden', height: 0});

        var data = JSON.parse(litems.text());
        order.restoreItems(data);
    }

    $('.lims-volume-calc').change(function (e) {
        var total = 1;
        var rowId = '.' + e.target.dataset.row;

        $('input.lims-volume-calc' + rowId + ':not(.volume)').each(function () {
            total *= $(this).val();
        });

        $('input.volume' + rowId).val(total);
    });
});

