{literal}
    <style>
        /* make thead and tfoot cells darker */
        .table th {
            background: #F3F1F1;
        }

        /* undo Bootstrap's 2px thead border */
        .table-bordered > thead > tr > th,
        .table-bordered > thead > tr > td {
            border-bottom-width: 1px;
        }

        /* align text vertically in all cells */
        .line-items th,
        .line-items td {
            vertical-align: middle !important;
        }

        /* don't wrap headers or ITC Part No. column */
        .line-items > thead > tr > th,
        .line-items > tbody > tr > td {
            white-space: nowrap;
        }

        .line-items > thead > tr > th {
            font-size: 10pt;
        }

        .line-items > thead > tr > th {
            text-align: center;
        }

        /* make action icons slightly bigger */
        /*.line-items.editable > thead > tr > th:last-child,*/
        .line-items.editable > tbody > tr > td:last-child {
            font-size: 13pt;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
{/literal}

<div style="position: relative; width: 120%; margin: 0; padding: 0;" class="flights-container">

    <table class="line-items editable table table-bordered">
        <thead class="panel-heading">
        <tr class="panel-heading">
            <th>Origin</th>
            <th>Destination</th>
            <th>Flight Date</th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td><input class="form-control input-sm" id="origin_input" name="origin_input" type="text"></td>
            <td><input class="form-control input-sm" id="destination_input" name="destination_input" type="text"></td>
            <td>
                <div class="edit-view-field" type="date" field="flight_date">
                    <span class="dateTime">
                        <input class="date_input" autocomplete="off" type="text" name="flight_date" id="flight_date" title tabindex size="11" maxlength="10">
                        <img src="themes/SuiteP/images/jscalendar.gif" alt="Enter Date" style="position: relative; top: 6px" border="0" id="flight_date_trigger">
                    </span>
                    {literal}
                    <script type="text/javascript">
                        Calendar.setup({{/literal}
                            inputField : "flight_date",
                            ifFormat : "{$CALENDAR_DATEFORMAT}",
                            showsTime : false,
                            button : "flight_date_trigger",
                            singleClick : true,
                            startWeekDay: 0,
                            step : 1,
                            weekNumbers:false
                            {literal}
                        });
                    </script>
                    {/literal}
                </div>
            </td>
            <td><span class="glyphicon glyphicon-search find-flights" title="Search Flights"></span></td>
        </tr>
        </tbody>

        <tfoot>
        </tfoot>
    </table>
</div>
