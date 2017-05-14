{literal}
    <style>
        .ex-line-items-container {
            border-collapse: collapse;
        }

        .b div {
            border-color: #736f6f;
        }

        .lims-basic {
            margin: 0;
            padding: 0;
            min-height: 30px;
        }

        .lims-header-row {
            background: #A4A0A1;
            min-width: 1000px;
            border-radius: 5px 5px 0 0;
            border-left: 1px solid;
        }

        .lims-body-row {
            border-left: 1px solid;
            border-top: 1px solid;
            min-width: 1000px;
            border-collapse: collapse;
        }

        .lims-footer-row {
            background: #A4A0A1;
            border: 1px solid;
            min-width: 1000px;
            border-collapse: collapse;
            border-radius: 0 0 5px 5px;
        }

        .lims-cell {
            text-align: center;
            font-size: 10pt;
            font-family: Lato, Lato, Arial, sans-serif;
            display: inline-block;
            float: left;
            padding: .5em 0 .3em 0;
            min-width: 95px;
            max-width: 95px;
            border-right: 1px solid;
        }

        .lims-last-cell {
            min-width: calc(100% - 855px);
            max-width: calc(100% - 855px);
            float: right;
        }

        .lims-cell > input {
            padding: 0 2px 0 2px;
            min-width: 100%;
            max-width: 100%;
            min-height: 25px;
            max-height: 25px;
            background: white;
            border: 0;
            text-align: center;
        }

        .lims-icon-box {
            padding: .7em;
        }

        .add-line-item {
            color: #04a904;
        }

        .remove-line-item {
            color : red;
        }

        .lims-footer-cell {
            display: inline-block;
            min-width: 855px;
            max-width: 855px;
            text-align: left;
            padding: .5em;
            font-size: 10pt;
            font-weight: bold;
            text-align: right;
        }

        .charge-weight {
            text-align: center;
            padding: .5em;
            font-weight: bold;
            font-size: 10pt;
        }

    </style>
{/literal}

<div style="position: relative; width: 100%; margin: 0; padding: 0;" class="ex-line-items-container">
    <div class="col-sm-12 lims-basic lims-header b">
        <div class="col-sm-11 lims-basic lims-header-row">
            <div class="lims-basic lims-cell">Pcs.</div>
            <div class="lims-basic lims-cell">Length</div>
            <div class="lims-basic lims-cell">Width</div>
            <div class="lims-basic lims-cell">Height</div>
            <div class="lims-basic lims-cell">Weight</div>
            <div class="lims-basic lims-cell">Volume</div>
            <div class="lims-basic lims-cell">ULD type</div>
            <div class="lims-basic lims-cell">No. ULD</div>
            <div class="lims-basic lims-cell">Load Priority</div>
            <div class="lims-basic lims-cell lims-last-cell" style="border-top-right-radius: 5px">Remarks</div>
        </div>
        <div class="col-sm-1 lims-basic"></div>
    </div>
    <div class="col-sm-12 lims-basic lims-body b">
    </div>
    <div class="col-sm-12 lims-basic lims-footer b">
        <div class="col-sm-11 lims-basic lims-footer-row">
            <div class="lims-basic lims-footer-cell">
                Chargeable Weight:
            </div>
            <div class="lims-basic lims-last-cell charge-weight">
                166.667
            </div>
        </div>
    </div>
</div>
