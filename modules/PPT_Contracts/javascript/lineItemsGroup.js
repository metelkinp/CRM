$(document).ready(function () {
    $('.lims-volume-calc').change(function (e) {
        var total = 1;
        var rowId = '.' + e.target.dataset.row;

        $('input.lims-volume-calc' + rowId + ':not(.volume)').each(function () {
            total *= $(this).val();
        });

        $('input.volume' + rowId).val(total);
    });
});

function Order() {
    var columns = ['pcs', 'length', 'width', 'height', 'weight', 'volume', 'uld', 'no_uld', 'load_priority', 'remarks'];


    function addLineItem() {
        var last = $('.lims-body > .lims-body-container:last');

        // clone last row
        var copy = last.clone(true);

        var rowElement = $(copy).find('div.lims-body-row:first');
        var newRowID = Number(last[0].dataset.id) + 1;
        copy[0].dataset.id = newRowID;

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
        glyph.removeClass('glyphicon-plus');
        glyph.removeClass('add-line-item');
        glyph.addClass('glyphicon-minus');
        glyph.addClass('remove-line-item');

        // $(copy).children('div.lims-body-row:first').each(function () {
        //     //console.log($(this));
        //     $(this).find('div.lims-cell input.lims-charge-calc').each(function () {
        //         console.log($(this));
        //     })
        // });
        //append new row
        $('.lims-body').append(copy);


        //
        // <div class="col-sm-11 lims-basic lims-body-row">
        //         <div class="lims-basic lims-cell"><input class="lims-charge-calc row1 pcs" type="text" value="1" data-row="row1"></div>
        //         <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 length" type="text" value="1" data-row="row1"></div>
        //         <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 width" type="text" value="1" data-row="row1"></div>
        //         <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 height" type="text" value="1" data-row="row1"></div>
        //         <div class="lims-basic lims-cell"><input  type="text"></div>
        //         <div class="lims-basic lims-cell"><input class="lims-autocalc lims-charge-calc row1 volume" type="text" value="1" data-row="row1"></div>
        //         <div class="lims-basic lims-cell"><input type="text"></div>
        //         <div class="lims-basic lims-cell"><input type="text"></div>
        //         <div class="lims-basic lims-cell"><input type="text"></div>
        //         <div class="lims-basic lims-cell lims-last-cell"><input type="text"></div>
        //         </div>
        //         <div class="col-sm-1 lims-basic lims-icon-box">
        //         <span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item">
        //         </div>
        //
        //
        //
        //     $('.line-items > tbody:last').append(buildSubRow(columns, true));
        //
        //     //add remove action
        //     $('.remove-line-item:last').click(function (event) {
        //
        //         $('.line-items > tbody > tr').each(function () {
        //             var cur = $(this);
        //             if (cur.context.cells[9].firstChild == event.target) {
        //                 cur.remove();
        //                 return false;
        //             }
        //         });
        //
        //     // scroll to the bottom of the page to compensate for the new table row
        //         $('html, body').animate({
        //             scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
        //             - $(window).height() / 2
        //         }, 'fast');
        //     });
        //
        //     // clear line item inputs
        //     $('.line-items tfoot input').each(function () {
        //         $(this).val('');
        //     });
        //
        //     var inputs = $('.line-items > tfoot > tr > th:first-child input');
        //     // set default qty to 1 for convenience
        //     inputs.each(function () {
        //         $(this).val('1');
        //     });
        //     // return focus to first input field after adding line item,
        //     // specifically useful when tabbing out of qty_input
        //     inputs.focus();
    }

    function save() {
        var res = [];

        //save cells content from each row in table body
        $('.line-items > tbody > tr').each(function () {
            var i = 0;
            var item = {};
            $(this).children('td:not(:last-child)').each(function () {
                item[columns[i++]] = $(this).context.innerText;
            });
            res.push(item);
        });

        //save inputs from table footer
        $('.line-items > tfoot > tr').each(function () {
            var i = 0;
            var item = {};
            $(this).children('th:not(:last-child)').each(function () {
                item[columns[i++]] = $(this).children('input:first-child').val();
            });
            res.push(item);
        });

        //console.log(res);
        return res;
    }

    function readOnlyMode() {
        //hide footer
        $('.line-items > tfoot > tr').hide();

        //hide last element in each row
        $('.line-items > tbody > tr, .line-items > thead > tr').each(function () {
            $(this).children('th:last, td:last').hide();
        });
    }

    function restoreItems(data) {
        $.each(data, function (index, obj) {

            $('.line-items > tbody:last').append(buildSubRow(obj, false));
        });
    }

    //inner functions
    function buildSubRow(arr, fromFooter) {
        var subRow = '<tr>';

        $.each(arr, function (key, val) {
            var insertedValue = (fromFooter) ? $('#' + val + '_input').val() : val;
            subRow += ('<td>' + insertedValue + '</td>');
        });

        subRow += (fromFooter) ?
            '<td><span class="glyphicon glyphicon-minus remove-line-item" title="Remove Line Item"></span></td></tr>' :
            '<td></td></tr>';

        return subRow;
    }

    return {
        addLineItem: addLineItem,
        save: save,
        readOnlyMode: readOnlyMode,
        restoreItems: restoreItems
    }
}



