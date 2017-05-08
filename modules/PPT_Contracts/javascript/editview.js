$(document).ready(function () {

    //if changed origin/destination
    var origin = $('#origin');
    origin.change(function () {
        $('#origin_input').val(origin.val());
    });

    var destination = $('#dest');
    destination.change(function () {
        $('#destination_input').val(destination.val());
    });

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

        $('#line_items').text(data);
    });
    
    //search flights
    $('.find-flights').click(function () {

        //TODO : troubles with date on neo4j server
        var date = new Date($('#flight_date').val());
        date.setHours(date.getHours() + 1);

        var data = {
            origin: $("#origin_input").val(),
            destination: $("#destination_input").val(),
            from:  date.getTime()
        };

        console.log(data);

        $.ajax({
            method: 'GET',
            url: "http://localhost:3030/services/ppt/flights/find",
            data: data,
            crossDomain : true,
            success: function (data, status, jqxhr) {
                // console.log('success');
                // console.log(data);

                displayResult(data);
            },
            error: function (jqxhr, status, trace) {
                alert(status + ": " + trace);
            }
        })
    });

    function displayResult(data) {
        var targetElement = $('.search-result');

        targetElement.html('');

        if (data.length === 0 || data.length === undefined) {
            var str = '<tr><td colspan="4" style="text-align: center; font-size: 14pt">No Flights Found</td></tr>'

            targetElement.append(str);
        } else {

            var str = '<tr><td colspan="4" style="text-align: center; font-size: 14pt">Found: ' +
                data.length + ' flights</td></tr>';

            targetElement.append(str);

            // $.each(data, function (index, value) {
            //
            // })
        }
    }
});
