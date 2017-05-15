{literal}
    <style>

        .b div {
            border-color: #736f6f;
        }

        .rates-ex-container {
            position: relative;
            width: 100%;
            margin: 0;
            padding: 0;
            border-collapse: collapse;
        }

        .rates-header-row {
            background: #A4A0A1;
            border-radius: 5px 5px 0 0;
            border-left: 1px solid;
            border-bottom: 1px solid;
        }

        .rates-body-row {
            border-bottom: 1px solid;
        }

        .rates-cell {
            text-align: center;
            font-size: 11pt;
            font-family: Lato, Lato, Arial, sans-serif;
            padding: .5em 0 .3em 0;
            min-height: 30px;
            border-right: 1px solid;
        }

        .rates-cell > input {
            padding: 0 2px 0 2px;
            min-width: 100%;
            max-width: 100%;
            min-height: 25px;
            max-height: 25px;
            background: white;
            border: 0;
            text-align: center;
        }

        .rates-icon-box {
            padding: .7em;
        }

        .add-rate {
            color: #04a904;
        }

        .remove-rate {
            color: red;
        }

    </style>
{/literal}

<div class="col-sm-12 rates-ex-container b">
    <div class="col-sm-12 rates-header">
        <div class="col-sm-12 rates-header-row">
            <div class="col-sm-6 rates-cell">Weight</div>
            <div class="col-sm-6 rates-cell" style="border-top-right-radius: 5px">Rate</div>
        </div>
    </div>
    <div class="col-sm-12 rates-body">
    </div>
</div>
