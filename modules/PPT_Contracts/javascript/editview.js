$(document).ready(function () {
    Order = new Order();

    //hidden
    $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
    $("div[field='line_items']").css({visibility: 'hidden', height: 0});

    // add line item to table
    $('.add-line-item').click(function (event) {
        Order.addLineItem();

        // scroll to the bottom of the page to compensate for the new table row
        $('html, body').animate({ scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
        - $(window).height()/2 }, 'fast');
    });

    //save values
    $('.save-line-items').click(function () {
        var data = JSON.stringify(Order.save());

       // console.log(data);
        $('#line_items').text(data);
    });

});
