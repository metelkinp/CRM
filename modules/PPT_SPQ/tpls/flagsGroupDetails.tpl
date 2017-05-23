{literal}
    <style>
        .flags-group-container > table {
            width: 100%;
        }

        .flags-group-table label {
            font-size: 10pt;
            font-weight: bold;
            font-family: "Lato", Lato, Arial, sans-serif;
            margin: 0;
            padding-left: .7em;
        }

        .flags-group-table > tbody > tr div {
            padding: .5em;
        }

    </style>
{/literal}

{if strval($fields.capri.value)=="1"}
    {assign var="c_capri" value='checked="checked"'}
    {else}
    {assign var="c_capri" value='checked=""'}
{/if}
{if strval($fields.add_hoc.value)=="1"}
    {assign var="c_add_hoc" value='checked="checked"'}
{else}
    {assign var="c_add_hoc" value='checked=""'}
{/if}
{if strval($fields.high_dense.value)=="1"}
    {assign var="c_high_dense" value='checked="checked"'}
{else}
    {assign var="c_high_dense" value='checked=""'}
{/if}
{if strval($fields.freight_material.value)=="1"}
    {assign var="c_freight_material" value='checked="checked"'}
{else}
    {assign var="c_freight_material" value='checked=""'}
{/if}
{if strval($fields.fup.value)=="1"}
    {assign var="c_fup" value='checked="checked"'}
{else}
    {assign var="c_fup" value='checked=""'}
{/if}
{if strval($fields.lost_business.value)=="1"}
    {assign var="c_lost_business" value='checked="checked"'}
{else}
    {assign var="c_lost_business" value='checked=""'}
{/if}
{if strval($fields.proactive_call.value)=="1"}
    {assign var="c_proactive_call" value='checked="checked"'}
{else}
    {assign var="c_proactive_call" value='checked=""'}
{/if}


<div class="flags-group-container">
    <table class="flags-group-table">
        <tbody>
        <tr>
            <td>
                <div type="bool" field="capri">
                    <input type="checkbox" class="checkbox" id="capri" name="capri" value="{$fields.capri.value}" disabled="true" {$c_capri}>
                    <label>Capri</label>
                </div>
            </td>
            <td>
                <div type="bool" field="add_hoc">
                    <input type="checkbox" id="add_hoc" name="add_hoc" value="{$fields.add_hoc.value}" disabled="true" {$c_add_hoc}>
                    <label>K2</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="high_dense">
                    <input type="checkbox" id="high_dense" name="high_dense" value="{$fields.high_dense.value}" disabled="true" {$c_high_dense}>
                    <label>High Dense</label>
                </div>
            </td>
            <td>
                <div type="bool" field="freight_material">
                    <input type="checkbox" id="freight_material" name="freight_material" value="{$fields.freight_material.value}" disabled="true" {$c_freight_material}>
                    <label>F/Material</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="fup">
                    <input type="checkbox" id="fup" name="fup" value="{$fields.fup.value}" disabled="true" {$c_fup}>
                    <label>FUP</label>
                </div>
            </td>
            <td>
                <div type="bool" field="lost_business">
                    <input type="checkbox" id="lost_business" name="lost_business" value="{$fields.lost_business.value}" disabled="true" {$c_lost_business}>
                    <label>Lost Business</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="proactive_call">
                    <input type="checkbox" id="proactive_call" name="proactive_call" value="{$fields.proactive_call.value}" disabled="true" {$c_proactive_call}>
                    <label>Pro Active Call</label>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
