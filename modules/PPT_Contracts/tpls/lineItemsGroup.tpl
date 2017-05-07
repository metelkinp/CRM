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

    /*!* only allow horizontal textarea resize *!*/
    /*textarea {*/
        /*resize: vertical;*/
    /*}*/

    /*!* but allow textarea resize for line item description *!*/
    /*.line-items textarea {*/
        /*min-width: 300px;*/
        /*resize: both;*/
    /*}*/

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
    /* show line breaks in Description column */
    /*.line-items > tbody > tr > td:nth-child(2) {*/
        /*white-space: pre-line;*/
    /*}*/

    /* center text in columns: Cost, Price, Qty, Subtotal */
    /*.line-items > thead > tr > th:not(:nth-child(2)),	!* thead: center all except Description *!*/
    /*.line-items > tbody > tr > td:nth-child(n+3),	   !* tbody: don't center first two columns: ITC Part & Description *!*/
    /*.line-items > tfoot > tr > th:not(:nth-child(2)) input {*/
        /*text-align: center;*/
    /*}*/

    .line-items > thead > tr > th,	/* thead: center all except Description */
    .line-items > tbody > tr > td,	   /* tbody: don't center first two columns: ITC Part & Description */
    .line-items > tfoot > tr > th input {
        text-align: center;
    }

    /* uppercase ITC Part No. input */
    /*.line-items > tfoot > tr > th:first-child input {*/
        /*text-transform: uppercase;*/
    /*}*/

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

<div style="position: relative; width: 120%; margin: 0; padding: 0;" class="container">
    {*<h2>List Group With Badges</h2>*}
    {*<ul class="list-group">*}
        {*<li class="list-group-item">New <span class="badge">12</span></li>*}
        {*<li class="list-group-item">Deleted <span class="badge">5</span></li>*}
        {*<li class="list-group-item">Warnings <span class="badge">3</span></li>*}
    {*</ul>*}
    <table class="line-items editable table table-bordered">
        <thead class="panel-heading">
        <tr class="panel-heading">
            <th>Pcs.</th>
            <th>L</th>
            <th>W</th>
            <th>H</th>
            <th>Weight</th>
            <th>Volume</th>
            <th>ULD type</th>
            <th>No. ULD</th>
            <th>Load Priority</th>
            <th></th>
            {*<th><span class="glyphicon glyphicon-list-alt"></span></th>*}
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th><input class="form-control input-sm" id="pcs_input" name="pcs_input" value="1" type="text"></th>
            <th><input class="form-control input-sm" id="l_input" name="l_input" type="text"></th>
            <th><input class="form-control input-sm" id="w_input" name="w_input" type="text"></th>
            <th><input class="form-control input-sm" id="h_input" name="h_input" type="text"></th>
            <th><input class="form-control input-sm" id="weight_input" name="weight_input" type="text"></th>
            <th><input class="form-control input-sm" id="volume_input" name="volume_input" type="text"></th>
            <th><input class="form-control input-sm" id="uld_input" name="uld_input" type="text"></th>
            <th><input class="form-control input-sm" id="no_uld_input" name="no_uld_input" type="text"></th>
            <th><input class="form-control input-sm" id="loadp_input" name="loadp_input" type="text"></th>
            {*<th><input class="form-control input-sm" id="subtotal_input" name="subtotal_input" disabled="disabled" type="text"></th>*}
            <th><span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item"></span></th>
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
