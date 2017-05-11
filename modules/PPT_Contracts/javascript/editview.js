$(document).ready(function () {

    var order = new Order();

    //custom save action on button 'SAVE' - saving data about flights and commodity
    var buttonsContainer = $('div.buttons');
    var saveButton = $('#SAVE');
    var fakeButton = $('<input title="Save" accesskey="a" class="button primary" value="Save" type="button">');
    fakeButton.click(function () {
            var data = JSON.stringify(order.save());
            $('#line_items').text(data);

            saveButton.click();
        }
    );
    buttonsContainer.prepend(fakeButton);
    saveButton.hide();

    //hidden body of flights search block
    $('#flight-search-body').hide();

    //hidden label of line items
    $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
    $("div[field='line_items']").css({visibility: 'hidden', height: 0});

    //hidden label of flight
    $("div[data-label='LBL_FLIGHT']").css({visibility: 'hidden', height: 0});
    $("div[field='flight']").css({visibility: 'hidden', height: 0});

    // add line item to table
    $('.add-line-item').click(function (event) {
        order.addLineItem();

        // scroll to the bottom of the page to compensate for the new table row
        $('html, body').animate({
            scrollTop: $('.line-items > tfoot > tr:last-child').offset().top
            - $(window).height() / 2
        }, 'fast');
    });

    //search flights
    $('.flight-search-icon').click(function (event) {
        var container = $('#flight-search-body');

        container.html('');
        container.hide();

        $('body').css('cursor', 'progress');
        $('.flight-search-icon').css('cursor', 'progress');

        //TODO : troubles with date on neo4j server
        var date = new Date($('#flight_date').val());
        date.setHours(date.getHours() + 1);

        var data = {
            origin: $("#origin").val(),
            destination: $("#dest").val(),
            from: date.getTime()
        };

        //console.log(data);

        $.ajax({
            method: 'GET',
            url: "http://localhost:3030/services/ppt/flights/find",
            data: data,
            crossDomain: true,
            success: function (data, status, jqxhr) {
                displayResult(data, container);
            },
            error: function (jqxhr, status, trace) {
                displayResult({}, container, 'Server Error');
            }
        });
    });

    function displayResult(data, container, err) {
        $('body').css('cursor', 'default');
        $('.flight-search-icon').css('cursor', 'pointer');

        container.show();

        var elem;
        var flightBuilder = new Flight();

        if (err !== undefined) {
            elem = $('<div class="col-sm-12" style="text-align: center; font-size: 14pt; color: red"></div>');
            elem.text(err);
            container.append(elem);
        } else {
            if (data.length === 0 || data.length === undefined) {
                elem = '<div class="col-sm-12" style="text-align: center; font-size: 14pt">No Flights Found</div>';
                container.append(elem);
            } else {

                $.each(data, function (i, value) {
                    container.append(flightBuilder.buildFlight(value, i));
                });

                // elem = '<div class="col-sm-12" style="text-align: center; font-size: 14pt">' +
                //     data.length + ' Flights Found</div>';
                // container.append(elem);
            }
        }
    }
});
