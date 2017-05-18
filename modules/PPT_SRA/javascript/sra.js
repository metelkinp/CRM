Rates = function () {

    function addRate() {
        var last = $('.rates-body > .rates-body-container:last');

        //clone last row
        var copy = last.clone(true);

        //get and set new row number
        var rowElement = $(copy).find('div.rates-body-row:first');
        var newRowID = Number(last[0].dataset.id) + 1;
        copy[0].dataset.id = newRowID;
        copy.find('div.rates-icon-box > span')[0].dataset.id = newRowID;

        //set default value
        rowElement.find('div.rates-cell > input').each(function () {
            $(this).val('');
        });

        //change glyph and action
        var glyph = last.find('div.rates-icon-box > span');
        glyph.off('click');
        glyph.removeClass('glyphicon-plus');
        glyph.removeClass('add-rate');
        glyph.addClass('glyphicon-minus');
        glyph.addClass('remove-rate');
        glyph.attr('title', 'Remove Rate');
        glyph.on('click', function (e) {
            var id = e.target.dataset.id;
            $('.rates-body-container[data-id=\'' + id + '\']').remove();
        });

        $('.rates-body').append(copy);
    }

    function save() {
        var res = {};

        $('.rates-body-row').each(function () {
            var label = $(this).find('input:first').val();
            res[label] = Number($(this).find('input:last').val());
        });

        return res;
    }

    function restoreRates(data, editMode) {
        var body = $('.rates-body');
        $('.rates-body > .rates-body-container').remove();

        var i = 0;
        $.each(data, function (key, value) {
            body.append(buildRow(key, value, i++, editMode));
        });

        if (editMode !== undefined) {
            var last = $('.rates-body > .rates-body-container:last');
            var glyph = last.find('div.rates-icon-box > span');
            glyph.off('click');
            glyph.on('click', function () {
                addRate();
            });
            glyph.removeClass('glyphicon-minus');
            glyph.removeClass('remove-rate');
            glyph.addClass('glyphicon-plus');
            glyph.addClass('add-rate');
        }
    }

    function buildRow(w, r, id, mode) {
        var container = $('<div class="col-sm-12 rates-body-container" data-id="' + id + '"></div>');
        var row = mode !== undefined ? $('<div class="col-sm-10 rates-body-row"></div>') :
            $('<div class="col-sm-12 rates-body-row"></div>');
        var basicWeightCell = '<div class="col-sm-6 rates-cell" style="border-left: 1px solid"></div>';
        var basicRateCell = '<div class="col-sm-6 rates-cell"></div>';

        if (mode !== undefined) {
            row.append($(basicWeightCell).append($('<input type="text">').val(w)));
            row.append($(basicRateCell).append($('<input type="text">').val(r)));
        } else {
            row.append($(basicWeightCell).text(w));
            row.append($(basicRateCell).text(r));
        }

        container.append(row);

        if (mode !== undefined) {
            var iconBox = $('<div class="col-sm-2 rates-icon-box"></div>');
            var glyph = $('<span class="glyphicon glyphicon-minus remove-rate" data-id="' +
                id + '" title="Remove Rate"></span>');
            glyph.on('click', function (e) {
                var targId = e.target.dataset.id;
                $('.rates-body-container[data-id=\'' + targId + '\']').remove();
            });
            iconBox.append(glyph);
            container.append(iconBox);
        }

        return container;
    }

    return {
        addRate: addRate,
        save: save,
        restoreRates: restoreRates
    }

};


$(document).ready(function () {
    var rates = new Rates();

    if ($('#EditView')[0] !== undefined) {
        //edit mode

        //hidden rates
        $("div[data-label='LBL_RATES']").parent().css({visibility: 'hidden', height: 0});

        //restore data
        var oldData = $('#rates').text();
        if (oldData !== undefined && oldData !== '') {
            rates.restoreRates(JSON.parse(oldData), true);
        } else {
            // add line item to table
            $('.add-rate').click(function (event) {
                rates.addRate();
            });
        }

        //custom save action on button 'SAVE' - saving data about rates
        var buttonsContainer = $('div.buttons');
        var saveButton = $('#SAVE');
        var fakeButton = $('<input title="Save" accesskey="a" class="button primary" value="Save" type="button">');
        fakeButton.click(function () {
                var data = rates.save();
                $('#rates').text(JSON.stringify(data));
                var count = Object.keys(data).length;
                $('#rates_count').val(count + ' levels');

                saveButton.click();
            }
        );
        buttonsContainer.prepend(fakeButton);
        saveButton.each(function () {
            $(this).hide();
        });

    } else {
        //detail mode

        //hidden rates
        $("div[field='rates']").parent().parent().hide();

        //change parent row classes
        var parent = $('.rates-ex-container').parent().parent();
        parent.removeClass('col-sm-10');
        parent.addClass('col-sm-4');

        //restore data
        var oldData = $('#rates').text();
        if (oldData !== undefined && oldData !== '') {
            rates.restoreRates(JSON.parse(oldData));
        }


    }
});