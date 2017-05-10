function Flight() {
   // var timeUnit = tu;

    function buildFlight(flightData, editMode) {
        var flightCard = $('<div class="flight-card"></div>');

        flightCard.append(buildCardHeader(flightData));
        flightCard.append(buildCardBody(flightData));

        return flightCard;
    }

    function buildCardHeader(data) {
        var navBar = $('<nav class="navbar navbar-inverse" style="min-height: 10px"></nav>');
        var nbContent = $('<div class="container-fluid" style="padding-left: 0; padding-right: 0"></div>');
        var tabs = $('<ul class="nav navbar-nav"></ul>');

        $.each(data.segments, function (i, value) {
            var anchore =  $('<a data-toggle="tab" role="tab" href="#' + 'flight' + (i+1) + '">' + value.flightCode + '</a>');
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

    function buildCardBody(data) {
        var flightBodyContainer =$('<div class="tab-content flight-card-body"></div>');

        $.each(data.segments, function (i, value) {
            var flightItem = i == 0 ?
                $('<div role="tabpanel" class="tab-pane active" id="flight' + (i+1) + '">' + value.flightCode + '</div>') :
                $('<div role="tabpanel" class="tab-pane" id="flight' + (i+1) + '">' + value.flightCode + '</div>');

            flightBodyContainer.append(flightItem);
        });

        return flightBodyContainer;
    }

    return {
        buildFlight : buildFlight
    }
}



