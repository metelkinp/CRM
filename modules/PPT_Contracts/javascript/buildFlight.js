function Flight() {
   // var timeUnit = tu;

    function buildFlight(flightData, num) {
        var flightCard = $('<div class="flight-card"></div>');

        flightCard.append(buildCardHeader(flightData, num));
        flightCard.append(buildCardBody(flightData, num));

        return flightCard;
    }

    function buildCardHeader(data, num) {
        var navBar = $('<nav class="navbar navbar-inverse" style="min-height: 10px; border-radius: 4px"></nav>');
        var nbContent = $('<div class="container-fluid" style="padding-left: 0; padding-right: 0"></div>');
        var tabs = $('<ul class="nav navbar-nav"></ul>');

        $.each(data.segments, function (i, value) {
            var anchore =  $('<a data-toggle="tab" role="tab" href="#' + 'flight_' + num + '_' + i + '">' + value.flightCode + '</a>');
            var listItem = i == 0 ?
                $('<li role="presentation" class="active" style="border-right: solid 1px lightgray;"></li>') :
                $('<li role="presentation" style="border-right: solid 1px lightgray;"></li>');

            anchore.click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

            listItem.append(anchore);

            tabs.append(listItem);
        });

        nbContent.append(tabs);
        navBar.append(nbContent);
        return $('<div class="flight-card-header"></div>').append(navBar);
    }

    function buildCardBody(data, num) {
        var flightBodyContainer =$('<div class="tab-content flight-card-body"></div>');

        $.each(data.segments, function (i, value) {
            var flightItem = i == 0 ?
                $('<div role="tabpanel" class="flight-card-body tab-pane active" id="flight_' + num + '_' + i + '"></div>') :
                $('<div role="tabpanel" class="flight-card-boby tab-pane" id="flight_' + num + '_' + i + '"></div>');

            flightItem.append(buildFlightItemElement(value.origin, value.departDate, false));
            flightItem.append(buildMiddleElement());
            flightItem.append(buildFlightItemElement(value.destination, value.arrivDate, true));

            flightBodyContainer.append(flightItem);
        });

        return flightBodyContainer;
    }

    function buildFlightItemElement(airport, date, reverse) {
        var exContainer = $('<div style="display: inline-block"></div>');
        var inContainer = $('<div style="display: block"></div>');
        var dateInfoBlock = $('<div style="display: inline-block"></div>');
        var airportBlock = $('<div style="display: inline-block;"></div>');

        inContainer.append(dateInfoBlock);
        if (reverse)
            inContainer.prepend(airportBlock);
        else
            inContainer.append(airportBlock);

        dateInfoBlock.append($('<div></div>').text(MyTimeUnit.getTime(date)));
        dateInfoBlock.append($('<div></div>').text(MyTimeUnit.getDate(date)));

        airportBlock.text(airport);

        exContainer.append(inContainer);
        return exContainer;
    }

    function buildMiddleElement() {
        return $('<div style="display: inline-block">o ------ ></div>');
    }

    return {
        buildFlight : buildFlight
    }
}



