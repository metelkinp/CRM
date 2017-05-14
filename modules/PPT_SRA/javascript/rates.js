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
            res[label] = $(this).find('input:last').val();
        });

        return res;
    }

    return {
        addRate: addRate,
        save: save
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
            //order.restoreItems(JSON.parse(oldData), true);
        } else {
            // add line item to table
            $('.add-rate').click(function (event) {
                rates.addRate();
            });
        }

        //custom save action on button 'SAVE' - saving data about flights and commodity
        var buttonsContainer = $('div.buttons');
        var saveButton = $('#SAVE');
        var fakeButton = $('<input title="Save" accesskey="a" class="button primary" value="Save" type="button">');
        fakeButton.click(function () {
                var data = JSON.stringify(rates.save());
                $('#rates').text(data);

                saveButton.click();
            }
        );
        buttonsContainer.prepend(fakeButton);
        saveButton.each(function () {
            $(this).hide();
        });

    } else {
        //detail mode


    }
});