<?php /* Smarty version 2.6.29, created on 2017-05-15 10:34:27
         compiled from modules/PPT_Contracts/tpls/lineItemsGroupEdit.tpl */ ?>
<?php echo '
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
            /*min-width:  145px;*/
            /*max-width: 145px;*/
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
'; ?>


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
                <div class="lims-basic lims-cell"><input class="weight" type="text"></div>
                <div class="lims-basic lims-cell"><input class="lims-charge-calc row1 volume" type="text"
                                                         value="1" data-row="row1"></div>
                <div class="lims-basic lims-cell"><input class="uld_type" type="text"></div>
                <div class="lims-basic lims-cell"><input class="no_uld" type="text"></div>
                <div class="lims-basic lims-cell"><input class="load_priority" type="text"></div>
                <div class="lims-basic lims-cell lims-last-cell"><input class="remarks" type="text"></div>
            </div>
            <div class="col-sm-1 lims-basic lims-icon-box">
            <span class="glyphicon glyphicon-plus add-line-item" title="Add Line Item" data-id="1">
            </div>
        </div>
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