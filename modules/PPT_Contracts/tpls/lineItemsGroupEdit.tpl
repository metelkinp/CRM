{literal}
    <style>
        /* make thead and tfoot cells darker */
        .table th {
            background: #A4A0A1;
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
        .line-items > tbody > tr > td:first-child {
            white-space: nowrap;
        }

        .line-items > thead > tr > th {
            font-size: 10pt;
        }

        .line-items > thead > tr > th, /* thead: center all except Description */
        .line-items > tbody > tr > td, /* tbody: don't center first two columns: ITC Part & Description */
        .line-items > tfoot > tr > th input {
            text-align: center;
        }

        .line-items > tfoot > tr > th:not(:last-child) {
            padding: 2px;
        }

        /* make action icons slightly bigger */
        /*.line-items.editable > thead > tr > th:last-child,*/
        .line-items.editable > tbody > tr > td:last-child,
        .line-items.editable > tfoot > tr > th:last-child {
            font-size: 13pt;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

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
            padding: .5em 0 .3em 0;
            width: 9%;
            border-right: 1px solid;
        }

        .lims-last-cell {
            min-width: 17%;
            float: right;
        }

        .lims-cell > input {
            padding: 0 2px 0 2px;
            min-width: 100%;
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
        <div class="col-sm-12 lims-body-container" data-id="1">
            <div class="col-sm-11 lims-basic lims-body-row">
                <div class="lims-basic lims-cell"><input class="lims-charge-calc row1 pcs" type="text" value="1"
                                                         data-row="row1"></div>
                <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 length" type="text" value="1"
                                                         data-row="row1"></div>
                <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 width" type="text" value="1"
                                                         data-row="row1"></div>
                <div class="lims-basic lims-cell"><input class="lims-volume-calc row1 height" type="text" value="1"
                                                         data-row="row1"></div>
                <div class="lims-basic lims-cell"><input type="text"></div>
                <div class="lims-basic lims-cell"><input class="lims-autocalc lims-charge-calc row1 volume" type="text"
                                                         value="1" data-row="row1"></div>
                <div class="lims-basic lims-cell"><input type="text"></div>
                <div class="lims-basic lims-cell"><input type="text"></div>
                <div class="lims-basic lims-cell"><input type="text"></div>
                <div class="lims-basic lims-cell lims-last-cell"><input type="text"></div>
            </div>
            <div class="col-sm-1 lims-basic lims-icon-box">
            <span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item">
            </div>
        </div>
    </div>
    <div class="col-sm-12 lims-basic lims-footer b">
        <div class="col-sm-11 lims-basic lims-footer-row">
            <div class="lims-basic" style="display: inline-block">
                <span style="text-align: right">CMDT</span>
            </div>
            <div class="lims-basic lims-last-cell">
            </div>
        </div>
    </div>


    {*<table class="line-items editable table table-bordered">*}
    {*<thead class="panel-heading">*}
    {*<tr class="panel-heading">*}
    {*<th>Pcs.</th>*}
    {*<th>Length</th>*}
    {*<th>Width</th>*}
    {*<th>Height</th>*}
    {*<th>Weight</th>*}
    {*<th>Volume</th>*}
    {*<th>ULD type</th>*}
    {*<th>No. ULD</th>*}
    {*<th>Load Priority</th>*}
    {*<th></th>*}
    {*<th><span class="glyphicon glyphicon-pencil"></span></th>*}
    {*</tr>*}
    {*</thead>*}

    {*<tfoot>*}
    {*<tr>*}
    {*<th><input class="form-control input-sm" id="pcs_input" name="pcs_input" value="1" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="length_input" name="length_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="width_input" name="width_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="height_input" name="height_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="weight_input" name="weight_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="volume_input" name="volume_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="uld_input" name="uld_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="no_uld_input" name="no_uld_input" type="text"></th>*}
    {*<th><input class="form-control input-sm" id="load_priority_input" name="load_priority_input" type="text">*}
    {*</th>*}
    {*<th><input class="form-control input-sm" id="subtotal_input" name="subtotal_input" disabled="disabled" type="text"></th>*}
    {*<th><span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item"></span></th>*}
    {*</tr>*}
    {*<tr>*}
    {*<th colspan="8">*}
    {*<div class="col-sm-12 label">Chargeable Weight:</div>*}
    {*</th>*}
    {*<th>*}
    {*<input class="input-sm" id="charg_weight_input" type="text">*}
    {*</th>*}
    {*</tr>*}
    {*<tr>*}
    {*<th colspan="9">*}
    {*<div class="row">*}
    {*<div class="col-sm-6 order-number">Order Number: 80071</div>*}
    {*<div class="col-sm-6 text-right order-total">Total: $0.00</div>*}
    {*</div>*}
    {*</th>*}
    {*</tr>*}
    {*</tfoot>*}

    {*<tbody>*}
    {*</tbody>*}
    {*</table>*}
</div>
