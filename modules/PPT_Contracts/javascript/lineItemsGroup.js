var Order = function() {
    this.addLineItem = function() {
        // build new table row from line item inputs
        var newRow = '<tr>'+
            '<td>'+$('#pcs_input').val()+'</td>'+
            '<td>'+$('#l_input').val()+'</td>'+
            '<td>'+$('#w_input').val()+'</td>'+
            '<td>'+$('#h_input').val()+'</td>'+
            '<td>'+$('#weight_input').val()+'</td>'+
            '<td>'+$('#volume_input').val()+'</td>'+
            '<td>'+$('#uld_input').val()+'</td>'+
            '<td>'+$('#no_uld_input').val()+'</td>'+
            '<td>'+$('#loadp_input').val()+'</td>'+
            '<td><span class="glyphicon glyphicon-remove remove-line-item" title="Remove Line Item"></span></td>'+
            '</tr>';

        // add the new row to the table
        $('.line-items > tbody:last').append(newRow);

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
            $('html, body').animate({ scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
            - $(window).height()/2 }, 'fast');
        });

        // clear line item inputs
        $('.line-items tfoot input').each(function() {
            $(this).val('');
        });

        // set default qty to 1 for convenience
        $('.line-items > tfoot > tr > th:first-child input').each(function() {
            $(this).val('1');
        });

        // return focus to first input field after adding line item,
        // specifically useful when tabbing out of qty_input
        $('.line-items > tfoot > tr > th:first-child input').focus();

        // recalculate total
       // this.updateTotal();
    };
};

Order = new Order();

// helper to keep count of dynamic line items on page
function LineItem() {
    if (typeof LineItem.count == 'undefined') {
        LineItem.count = 0;
    } else {
        LineItem.count++;
    }
}

$(function() {
    // add line item to table
    $('.add-line-item').click(function (event) {
        console.log(event.pageY);
        Order.addLineItem();

        // scroll to the bottom of the page to compensate for the new table row
        $('html, body').animate({ scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
        - $(window).height()/2 }, 'fast');
    });
});