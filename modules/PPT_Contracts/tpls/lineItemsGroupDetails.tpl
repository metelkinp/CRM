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

<div style="position: relative; width: 100%; margin: 0; padding: 0;" class="line-items-container">



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
        </tr>
        </thead>

        <tfoot>
        </tfoot>

        <tbody>
        </tbody>
    </table>
</div>

