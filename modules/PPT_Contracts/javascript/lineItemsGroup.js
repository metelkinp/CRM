var columns = ['pcs', 'length', 'width', 'height', 'weight', 'volume', 'uld', 'no_uld', 'load_priority'];
Order = function () {};

Order.addLineItem = function () {

    // add the new row to the table
    $('.line-items > tbody:last').append(buildSubRow(columns, true));

    //add remove action
    $('.remove-line-item:last').click(function (event) {

        $('.line-items > tbody > tr').each(function () {
            var cur = $(this);
            if (cur.context.cells[9].firstChild == event.target) {
                cur.remove();
                return false;
            }
        });

        // scroll to the bottom of the page to compensate for the new table row
        $('html, body').animate({
            scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
            - $(window).height() / 2
        }, 'fast');
    });

    // clear line item inputs
    $('.line-items tfoot input').each(function () {
        $(this).val('');
    });

    // set default qty to 1 for convenience
    $('.line-items > tfoot > tr > th:first-child input').each(function () {
        $(this).val('1');
    });
    // return focus to first input field after adding line item,
    // specifically useful when tabbing out of qty_input
    $('.line-items > tfoot > tr > th:first-child input').focus();

};

Order.save = function () {
    $('.line-items > tbody:last').append(buildSubRow(columns, true));

    this.readOnlyMode();

    $('.line-items > tfoot > tr:last').show();

    $('.line-items > tfoot > tr > th').attr('colspan', 9);

    //TODO: need something else for edit-mode
    $('.save-line-items').removeClass('glyphicon-hdd').addClass('glyphicon-pencil');

    var res = [];

    $('.line-items > tbody > tr').each(function () {
        var i = 0;
        var item = {};
        $(this).children('td:not(:last-child)').each(function () {
            item[columns[i++]] = $(this).context.innerText;
        });
        res.push(item);
    });

    //console.log(res);
    return res;
};

Order.readOnlyMode = function () {
    //hide footer
    $('.line-items > tfoot > tr').hide();

    //hide last element in each row
    $('.line-items > tbody > tr, .line-items > thead > tr').each(function () {
        $(this).children('th:last, td:last').hide();
    });

};

Order.restoreItems = function (data) {
    $.each(data, function (index, obj) {

        $('.line-items > tbody:last').append(buildSubRow(obj, false));
    });
};

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


//
//Order = new Order();

// helper to keep count of dynamic line items on page
function LineItem() {
    if (typeof LineItem.count == 'undefined') {
        LineItem.count = 0;
    } else {
        LineItem.count++;
    }
}
