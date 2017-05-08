$(document).ready(function () {
    Order = new Order();

    //hidden
    $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
    $(".label:contains('Line Items')").css({visibility: 'hidden', height: 0});

    var litems = $("div[field='line_items']");
    litems.css({visibility: 'hidden', height: 0});

    var data = JSON.parse(litems.text());
    Order.restoreItems(data);
    Order.readOnlyMode();
});
