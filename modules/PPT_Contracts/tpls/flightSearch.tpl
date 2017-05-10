{literal}
    <style>

        .f {
            margin: 0;
            padding: 0;
        }

        .flights-container {
            position: relative;
            width: 100%;
            /*align-content: center;*/
        }

        .flight-search-header {
            background: #F3F1F1;
            border: solid 1px lightgrey;
            margin-bottom: 0;
        }

        .flight-search-body {
            max-height: 20vh;
            overflow-y: auto;
            margin-top: 0;
        }

        .flight-search-body-borders {
            border: solid 1px lightgrey;
            border-top: 0;
        }

        .fml {
            margin-left: 0;
        }

        .flight-search-block {
            text-align: center;
            font-size: 14pt;
            vertical-align: baseline;
            line-height: 60px;
        }

        .flight-card {
            margin : 0 0 1.5em 0;
            border-radius: 4px;
            background: #fff;
            padding: 1.5em;
            display: block;
        }

        .flight-card-header {
            margin-bottom: .5em;
            border-radius: 4px;
            display: block;
        }

        .flight-card-body {
            background-color: #eee;
            border-radius: 4px;
            padding: .5em 0;
            display: block;
        }




    </style>
{/literal}

<div class="f flights-container row">
    <div class="row col-sm-12 fml flight-search-header" id="flight-search-header">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <div class="col-sm-11">
                <div class="col-sm-6 label" style="text-align: right">
                    Date:
                </div>
                <div class="col-sm-6">
                    <span class="dateTime" style="margin-left: 5px">
                            <input class="date_input" style="margin: 5px" autocomplete="off" type="text" name="flight_date" id="flight_date"
                                   title tabindex size="11" maxlength="10">
                            <img src="themes/SuiteP/images/jscalendar.gif" alt="Enter Date"
                                 style="position: relative; top: 6px" border="0" id="flight_date_trigger">
                    </span>
                        {literal}
                        <script type="text/javascript">
                            Calendar.setup({{/literal}
                                inputField: "flight_date",
                                ifFormat: "{$CALENDAR_DATEFORMAT}",
                                showsTime: false,
                                button: "flight_date_trigger",
                                singleClick: true,
                                startWeekDay: 0,
                                step: 1,
                                weekNumbers: false
                                {literal}
                            });
                        </script>
                        {/literal}
                </div>
            </div>
            <div class="col-sm-1 flight-search-block">
                <span class="glyphicon glyphicon-search flight-search-icon" style="cursor: pointer" title="Search Flights"></span>
            </div>
        </div>
    </div>
    <div class="row col-sm-12 fml flight-search-body flight-search-body-borders" id="flight-search-body">

    </div>
</div>
