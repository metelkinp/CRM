function Flight() {
   // var timeUnit = tu;

    function buildFlight(flightData, num) {
        var flightCard = $('<div class="flight-card br-4"></div>');

        flightCard.append(buildCardHeader(flightData, num));
        flightCard.append(buildCardBody(flightData, num));

        return flightCard;
    }

    function buildCardHeader(data, num) {
        var navBar = $('<nav class="navbar navbar-inverse br-4" style="min-height: 10px;"></nav>');
        var nbContent = $('<div class="container-fluid" style="padding-left: 0; padding-right: 0"></div>');
        var brandElement = $('<div title="Click to select flight" class="navbar-brand fche-nav-brand" style="border-right: solid 1px lightgray;"></div>').text('#' + (num + 1));
        brandElement.data('flight', data);

        var tabs = $('<ul class="nav navbar-nav"></ul>');

        brandElement.click(function () {
            hideOtherElements(brandElement);

            var data = JSON.stringify(brandElement.data().flight);
            $('#flight').text(data);
        });

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

        nbContent.append(brandElement);
        nbContent.append(tabs);
        navBar.append(nbContent);
        return $('<div class="flight-card-header br-4"></div>').append(navBar);
    }

    function buildCardBody(data, num) {
        var flightBodyContainer =$('<div class="tab-content flight-card-body br-4" style="padding: .2em"></div>');

        $.each(data.segments, function (i, value) {
            var flightItem = i == 0 ?
                $('<div role="tabpanel" class="flight-card-body tab-pane active br-4" id="flight_' + num + '_' + i + '"></div>') :
                $('<div role="tabpanel" class="flight-card-body tab-pane br-4" id="flight_' + num + '_' + i + '"></div>');

            flightItem.append(buildFlightItemElement(value.origin, value.departDate, false));
            flightItem.append(buildMiddleElement());
            flightItem.append(buildFlightItemElement(value.destination, value.arrivDate, true));
            flightItem.append(buildTransportTypeElement(value.acType));

            flightBodyContainer.append(flightItem);
        });

        return flightBodyContainer;
    }

    function buildFlightItemElement(airport, date, reverse) {
        var exContainer = $('<div style="display: inline-block"></div>');
        var inContainer = $('<div style="display: block"></div>');
        var dateInfoBlock = $('<div class="fc-body-element"></div>');
        var dateInfoInnerBlock = $('<div style="display: block; padding: .5em"></div>');
        var airportBlock = $('<div class="fc-body-element fcbe-padding"></div>');

        inContainer.append(dateInfoBlock);
        if (reverse)
            inContainer.prepend(airportBlock);
        else
            inContainer.append(airportBlock);

        dateInfoInnerBlock.append($('<div style="text-align: center"></div>').append($('<span></span>').text(MyTimeUnit.getTime(date))));
        dateInfoInnerBlock.append($('<div style="font-size: 12pt"></div>').text(MyTimeUnit.getDate(date)));
        dateInfoBlock.append(dateInfoInnerBlock);

        airportBlock.append($('<span></span>)').text(airport));

        exContainer.append(inContainer);
        return exContainer;
    }

    function buildMiddleElement() {
        var container = $('<div style="display: inline-block"></div>')
        var fromElement = $('<div class="fc-body-element fcbe-padding">o</div>');
        var middleLine = $('<div class="fc-body-element fcbe-padding">----------</div>');
        var toElement = $('<div class="fc-body-element fcbe-padding">' + "\>" + '</div>');

        container.append(fromElement);
        container.append(middleLine);
        container.append(toElement);
        return container;
    }

    function buildTransportTypeElement(typeInfo) {
        var container = $('<div style="display: inline-block"></div>');
        var innerContainer = $('<div style="display: block"></div>');
        var typeElement = $('<div class="fc-body-element fcbe-padding"></div>');
        var imgElement = $('<div class="fc-body-element fcbe-padding"></div>');

        var img = typeInfo === 'RFS' ?
            $('<img src="modules/PPT_Contracts/javascript/img/transport.svg" width="28px" height="28px">') :
            $('<img src="modules/PPT_Contracts/javascript/img/black-plane.svg" width="28px" height="28px">');

        typeElement.append($('<span></span>').text(typeInfo));
        imgElement.append(img);

        innerContainer.append(imgElement);
        innerContainer.append(typeElement);
        container.append(innerContainer);
        return container;
    }

    function hideOtherElements(target) {
        $('div.flight-card').each(function () {
            var cur = $(this);
            if (cur.find('.fche-nav-brand')[0].innerText !== target.text())
                cur.hide();
        })
    }

    return {
        buildFlight : buildFlight
    }
}



