$(document).ready(function () {
    "use strict";
    var order = new Order();

    //hidden
    $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
    $(".label:contains('Line Items')").css({visibility: 'hidden', height: 0});

    var litems = $("div[field='line_items']");
    litems.css({visibility: 'hidden', height: 0});

    var data = JSON.parse(litems.text());
    order.restoreItems(data);
    order.readOnlyMode();
});
