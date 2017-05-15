//class for order details management
Order = function() {
    var columns = ['pcs', 'length', 'width', 'height', 'weight', 'volume', 'uld_type', 'no_uld', 'load_priority', 'remarks'];

    function addLineItem() {
        var last = $('.lims-body > .lims-body-container:last');

        // clone last row
        var copy = last.clone(true);

        //get and set new row number
        var rowElement = $(copy).find('div.lims-body-row:first');
        var newRowID = Number(last[0].dataset.id) + 1;
        copy[0].dataset.id = newRowID;
        copy.find('div.lims-icon-box > span')[0].dataset.id = newRowID;

        //set default values
        rowElement.find('div.lims-cell > input').each(function () {
            $(this).val('');
        });

        rowElement.find('div.lims-cell > input.lims-charge-calc, div.lims-cell > input.lims-volume-calc').each(function () {
            var elem = $(this);
            elem.val(1);
            var oldVal = elem[0].dataset.row;
            var newVal = 'row' + newRowID;
            elem[0].dataset.row = newVal;
            elem.removeClass(oldVal);
            elem.addClass(newVal);
        });

        //change glypicon and action
        var glyph = last.find('div.lims-icon-box > span');
        glyph.off('click');
        glyph.on('click', function (e) {
            var id = e.target.dataset.id;
            $('.lims-body-container[data-id=\'' + id + '\']').remove();
            calculateChargeableWeight();
        });
        glyph.removeClass('glyphicon-plus');
        glyph.removeClass('add-line-item');
        glyph.addClass('glyphicon-minus');
        glyph.addClass('remove-line-item');
        glyph.attr('title', 'Remove Line Item');

        //append new row
        $('.lims-body').append(copy);

    }

    function save() {
        var res = {};

        var lineItems = [];
        $('.lims-body-row').each(function () {
            var item = {};
            var i = 0;
            $(this).find('input').each(function () {
                item[columns[i++]] = $(this).val();
            });
            lineItems.push(item);
        });

        res.lineItems = lineItems;
        res.chargeableWeight = $('.charge-weight').text();
        //console.log(res);
        return res;
    }

    function restoreItems(data, editMode) {
        var body = $('.lims-body');
        $('.lims-body > .lims-body-container').remove();

        $.each(data.lineItems, function (index, obj) {
            body.append(buildRow(obj, index + 1, editMode));
        });

        if (editMode !== undefined) {
            var last = $('.lims-body > .lims-body-container:last');
            var glyph = last.find('div.lims-icon-box > span');
            glyph.off('click');
            glyph.on('click', function () {
                addLineItem();
                calculateChargeableWeight();
            });
            glyph.removeClass('glyphicon-minus');
            glyph.removeClass('remove-line-item');
            glyph.addClass('glyphicon-plus');
            glyph.addClass('add-line-item');
        }

        $('.charge-weight').text(data.chargeableWeight);
    }

    function buildRow(data, id, editMode) {
        var container = $('<div class="col-sm-12 lims-body-container" data-id="' + id + '"></div>');
        var row = $('<div class="col-sm-11 lims-basic lims-body-row"></div>');
        var basic = '<div class="lims-basic lims-cell"></div>';

        if (editMode !== undefined) {
            var rowId = 'row' + id;

            row.append($(basic).append($('<input class="lims-charge-calc ' + rowId +
                ' pcs" type="text" value="' + data.pcs + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' length" type="text" value="' + data.length + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' width" type="text" value="' + data.width + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="lims-volume-calc ' + rowId +
                ' height" type="text" value="' + data.height + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="weight" type="text" value="' +
                data.weight + '">')));
            row.append($(basic).append($('<input class="lims-charge-calc ' + rowId +
                ' volume" type="text" value="' + data.volume + '" data-row="' + rowId + '">')));
            row.append($(basic).append($('<input class="uld_type" type="text" value="' +
                data.uld_type + '">')));
            row.append($(basic).append($('<input class="no_uld" type="text" value="' +
                data.no_uld + '">')));
            row.append($(basic).append($('<input class="load_priority" type="text" value="' +
                data.load_priority + '">')));
            row.append($(basic).addClass('lims-last-cell').append($('<input class="remarks" type="text" value="' +
                data.remarks + '">')));
        } else {
            row.append($(basic).text(data.pcs));
            row.append($(basic).text(data.length));
            row.append($(basic).text(data.width));
            row.append($(basic).text(data.height));
            row.append($(basic).text(data.weight));
            row.append($(basic).text(data.volume));
            row.append($(basic).text(data.uld_type));
            row.append($(basic).text(data.no_uld));
            row.append($(basic).text(data.load_priority));
            row.append($(basic).addClass('lims-last-cell').text(data.remarks));
        }

        container.append(row);

        var iconBox = $('<div class="col-sm-1 lims-basic lims-icon-box"></div>');
        if (editMode !== undefined) {
            var glyph = $('<span class="glyphicon glyphicon-minus remove-line-item" data-id="' +
                id + '" title="Remove Line Item"></span>');
            glyph.on('click', function (e) {
                var targId = e.target.dataset.id;
                $('.lims-charge-calc').change();
                $('.lims-body-container[data-id=\'' + targId + '\']').remove();
                calculateChargeableWeight();
            });
            iconBox.append(glyph);
        }

        container.append(iconBox);

        return container;
    }

    function calculateChargeableWeight() {
        console.log('FIRE');

        var total = 0;

        $('.lims-body-row').each(function () {
            var rowValue = 1;
            $(this).find('input.lims-charge-calc').each(function () {
                rowValue *= $(this).val();
            });
            total += rowValue;
        });

        $('.charge-weight').text(total * 166.667);
    }

    return {
        addLineItem: addLineItem,
        save: save,
        restoreItems: restoreItems,
        calculateChargeableWeight: calculateChargeableWeight
    }
};

//class for flight search functionality
Flight = function () {
    var timeUnit = new MyTimeUnit();

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

        dateInfoInnerBlock.append($('<div style="text-align: center"></div>').append($('<span></span>').text(timeUnit.getTime(date))));
        dateInfoInnerBlock.append($('<div style="font-size: 12pt"></div>').text(timeUnit.getDate(date)));
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

    function MyTimeUnit() {

        function getDateTime(d) {
            var date = new Date(d);
            var _date = MyTimeUnit.getDate(date);
            var _time = MyTimeUnit.getTime(date);
            return _date + ' ' + _time;
        }

        function getDate (d) {
            var date = new Date(d);
            var day = date.getDate();
            day = day < 10 ? '0' + day : day;
            var month = date.getMonth() + 1;
            month = month < 10 ? '0' + month : month;
            return month + '/' + day + '/' + date.getFullYear();
        }

        function getTime(d) {
            var date = new Date(d);
            var hour = date.getHours();
            hour = hour < 10 ? '0' + hour : hour;
            var minutes = date.getMinutes();
            minutes = minutes < 10 ? '0' + minutes : minutes;
            return hour + ':' + minutes;
        }

        return {
            getDateTime: getDateTime,
            getDate: getDate,
            getTime: getTime
        }
    }

    return {
        buildFlight : buildFlight
    }
};


//main functionality
$(document).ready(function () {
    var order = new Order();
    var flightBuilder = new Flight();

    if ($('#EditView')[0] !== undefined) {
        //edit mode

        //expanding basic crm row
        var row = $('.ex-line-items-container').parent();
        row.removeClass('col-sm-8');
        row.addClass('col-sm-10');

        //restore data
        var oldData = $('#line_items').text();
        if (oldData !== undefined && oldData !== '') {
            order.restoreItems(JSON.parse(oldData), true);
        } else {
            // add line item to table
            $('.add-line-item').click(function (event) {
                order.addLineItem();
                order.calculateChargeableWeight();
            });
        }

        //chargeable weight calculation
        $('.lims-charge-calc').change(function() {
            order.calculateChargeableWeight()
        });

        //volume calculation
        $('.lims-volume-calc').change(function (e) {
            var total = 1;
            var rowId = '.' + e.target.dataset.row;

            $('input.lims-volume-calc' + rowId + ':not(.volume)').each(function () {
                total *= $(this).val();
            });

            var volumeField = $('input.volume' + rowId);
            volumeField.val(total);
            volumeField.change();
        });

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
                }
            }
        }


    } else {
        //detail view

        //hidden labels of items
        $("div[data-label='LBL_LINE_ITEMS']").css({visibility: 'hidden', height: 0});
        $(".label:contains('Line Items')").css({visibility: 'hidden', height: 0});

        var litems = $("div[field='line_items']");
        litems.css({visibility: 'hidden', height: 0});

        //restore order items
        var data = JSON.parse(litems.text());
        order.restoreItems(data);

        //hidden labels of flight
        $("div[field='flight']").parent().parent().css({visibility: 'hidden', height: 0});

        var flightData = $('#flight').text();

        //restore flight info
        if (flightData !== undefined && flightData !== '') {
            $('.flights-container').append(flightBuilder.buildFlight(JSON.parse(flightData), 0));
            $('.fche-nav-brand').hide();
        }

    }
});




