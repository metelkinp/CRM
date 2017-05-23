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

<div class="flags-group-container">
    <table class="flags-group-table">
        <tbody>
        <tr>
            <td>
                <div type="bool" field="capri">
                    <input type="hidden" name="capri" value="0">
                    <input type="checkbox" id="capri" name="capri" value="1" checked="checked">
                    <label>Capri</label>
                </div>
            </td>
            <td>
                <div type="bool" field="add_hoc">
                    <input type="hidden" name="add_hoc" value="1">
                    <input type="checkbox" id="add_hoc" name="add_hoc" value="0">
                    <label>K2</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="high_dense">
                    <input type="hidden" name="high_dense" value="1">
                    <input type="checkbox" id="high_dense" name="high_dense" value="0">
                    <label>High Dense</label>
                </div>
            </td>
            <td>
                <div type="bool" field="freight_material">
                    <input type="hidden" name="freight_material" value="1">
                    <input type="checkbox" id="freight_material" name="freight_material" value="0">
                    <label>F/Material</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="fup">
                    <input type="hidden" name="fup" value="1">
                    <input type="checkbox" id="fup" name="fup" value="0">
                    <label>FUP</label>
                </div>
            </td>
            <td>
                <div type="bool" field="lost_business">
                    <input type="hidden" name="lost_business" value="1">
                    <input type="checkbox" id="lost_business" name="lost_business" value="0">
                    <label>Lost Business</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div type="bool" field="proactive_call">
                    <input type="hidden" name="proactive_call" value="1">
                    <input type="checkbox" id="proactive_call" name="proactive_call" value="0">
                    <label>Pro Active Call</label>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>