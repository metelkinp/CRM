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
    </style>
{/literal}

<div style="position: relative; width: 120%; margin: 0; padding: 0;" class="line-items-container">

    <table class="line-items editable table table-bordered">
        <thead class="panel-heading">
        <tr class="panel-heading">
            <th>Pcs.</th>
            <th>Length</th>
            <th>Width</th>
            <th>Height</th>
            <th>Weight</th>
            <th>Volume</th>
            <th>ULD type</th>
            <th>No. ULD</th>
            <th>Load Priority</th>
            <th></th>
            {*<th><span class="glyphicon glyphicon-pencil"></span></th>*}
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th><input class="form-control input-sm" id="pcs_input" name="pcs_input" value="1" type="text"></th>
            <th><input class="form-control input-sm" id="length_input" name="length_input" type="text"></th>
            <th><input class="form-control input-sm" id="width_input" name="width_input" type="text"></th>
            <th><input class="form-control input-sm" id="height_input" name="height_input" type="text"></th>
            <th><input class="form-control input-sm" id="weight_input" name="weight_input" type="text"></th>
            <th><input class="form-control input-sm" id="volume_input" name="volume_input" type="text"></th>
            <th><input class="form-control input-sm" id="uld_input" name="uld_input" type="text"></th>
            <th><input class="form-control input-sm" id="no_uld_input" name="no_uld_input" type="text"></th>
            <th><input class="form-control input-sm" id="load_priority_input" name="load_priority_input" type="text"></th>
            {*<th><input class="form-control input-sm" id="subtotal_input" name="subtotal_input" disabled="disabled" type="text"></th>*}
            <th><span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item"></span></th>
        </tr>
        <tr>
            <th colspan="10">
                <span class="glyphicon glyphicon-hdd save-line-items" title="Save"></span>
            </th>
            {*<th></th>*}
        </tr>
        {*<tr>*}
        {*<th colspan="9">*}
        {*<div class="row">*}
        {*<div class="col-sm-6 order-number">Order Number: 80071</div>*}
        {*<div class="col-sm-6 text-right order-total">Total: $0.00</div>*}
        {*</div>*}
        {*</th>*}
        {*</tr>*}
        </tfoot>

        <tbody>
        </tbody>
    </table>
</div>
