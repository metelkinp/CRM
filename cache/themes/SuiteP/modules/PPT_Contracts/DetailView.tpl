

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PPT_Contracts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PPT_Contracts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=PPT_Contracts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>                    {/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">


<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='LBL_PANEL_MAIN' module='PPT_Contracts'}
</a>


<a id="xstab0" href="#" class="visible-xs first-tab-xs dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='LBL_PANEL_MAIN' module='PPT_Contracts'}
</a>
<ul id="first-tab-menu-xs" class="dropdown-menu">
<li role="presentation">
<a id="tab1" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-1');">
{sugar_translate label='LBL_PANEL_MAIN' module='PPT_Contracts'}
</a>
</li>
<li role="presentation">
<a id="tab2" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-2');">
{sugar_translate label='LBL_PANEL_LINE_ITEMS' module='PPT_Contracts'}
</a>
</li>
<li role="presentation">
<a id="tab3" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-3');">
{sugar_translate label='LBL_PANEL_FLIGHTS' module='PPT_Contracts'}
</a>
</li>
<li role="presentation">
<a id="tab4" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-4');">
{sugar_translate label='LBL_PANEL_OTHER' module='PPT_Contracts'}
</a>
</li>
</ul>
</li>


<li role="presentation" class="hidden-xs">
<a id="tab1" data-toggle="tab">
{sugar_translate label='LBL_PANEL_LINE_ITEMS' module='PPT_Contracts'}
</a>
</li>


<li role="presentation" class="hidden-xs">
<a id="tab2" data-toggle="tab">
{sugar_translate label='LBL_PANEL_FLIGHTS' module='PPT_Contracts'}
</a>
</li>


<li role="presentation" class="hidden-xs">
<a id="tab3" data-toggle="tab">
{sugar_translate label='LBL_PANEL_OTHER' module='PPT_Contracts'}
</a>
</li>
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">ACTIONS</a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PPT_Contracts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} </li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PPT_Contracts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
<li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=PPT_Contracts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

<div class="tab-content">

<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="status"  >

{if !$fields.status.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.options }">
{ $fields.status.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{ $fields.status.value }">
{ $fields.status.options[$fields.status.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="account_name"  >

{if !$fields.account_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.account_id.value)}
{capture assign="detail_url"}index.php?module=PPT_Accounts&action=DetailView&record={$fields.account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id" class="sugar_field" data-id-value="{$fields.account_id.value}">{$fields.account_name.value}</span>
{if !empty($fields.account_id.value)}</a>{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPER' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="shipper_name"  >

{if !$fields.shipper_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.shipper_id.value)}
{capture assign="detail_url"}index.php?module=PPT_Accounts&action=DetailView&record={$fields.shipper_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="shipper_id" class="sugar_field" data-id-value="{$fields.shipper_id.value}">{$fields.shipper_name.value}</span>
{if !empty($fields.shipper_id.value)}</a>{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CONTACT' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="contact_name"  >

{if !$fields.contact_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.contact_id.value)}
{capture assign="detail_url"}index.php?module=PPT_Contacts&action=DetailView&record={$fields.contact_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="contact_id" class="sugar_field" data-id-value="{$fields.contact_id.value}">{$fields.contact_name.value}</span>
{if !empty($fields.contact_id.value)}</a>{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ORIGIN' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="origin"  >

{if !$fields.origin.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.origin.options)}
<input type="hidden" class="sugar_field" id="{$fields.origin.name}" value="{ $fields.origin.options }">
{ $fields.origin.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.origin.name}" value="{ $fields.origin.value }">
{ $fields.origin.options[$fields.origin.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DEST' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="dest"  >

{if !$fields.dest.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.dest.options)}
<input type="hidden" class="sugar_field" id="{$fields.dest.name}" value="{ $fields.dest.options }">
{ $fields.dest.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.dest.name}" value="{ $fields.dest.value }">
{ $fields.dest.options[$fields.dest.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SERVICE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="service"  >

{if !$fields.service.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.service.options)}
<input type="hidden" class="sugar_field" id="{$fields.service.name}" value="{ $fields.service.options }">
{ $fields.service.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.service.name}" value="{ $fields.service.value }">
{ $fields.service.options[$fields.service.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PRODUCT' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="product"  >

{if !$fields.product.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.product.options)}
<input type="hidden" class="sugar_field" id="{$fields.product.name}" value="{ $fields.product.options }">
{ $fields.product.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.product.name}" value="{ $fields.product.value }">
{ $fields.product.options[$fields.product.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SCC' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="scc"  >

{if !$fields.scc.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.scc.options)}
<input type="hidden" class="sugar_field" id="{$fields.scc.name}" value="{ $fields.scc.options }">
{ $fields.scc.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.scc.name}" value="{ $fields.scc.value }">
{ $fields.scc.options[$fields.scc.value]}
{/if}
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_IATA_CODE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="iata_code"  >

{if !$fields.iata_code.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.iata_code.value) <= 0}
{assign var="value" value=$fields.iata_code.default_value }
{else}
{assign var="value" value=$fields.iata_code.value }
{/if} 
<span class="sugar_field" id="{$fields.iata_code.name}">{$fields.iata_code.value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_SHIPPING_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="shipping_date"  >

{if !$fields.shipping_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.shipping_date.value) <= 0}
{assign var="value" value=$fields.shipping_date.default_value }
{else}
{assign var="value" value=$fields.shipping_date.value }
{/if}
<span class="sugar_field" id="{$fields.shipping_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ARRIVAL_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="arrival_date"  >

{if !$fields.arrival_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.arrival_date.value) <= 0}
{assign var="value" value=$fields.arrival_date.default_value }
{else}
{assign var="value" value=$fields.arrival_date.value }
{/if}
<span class="sugar_field" id="{$fields.arrival_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>
                    </div>
<div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-1'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LIG' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="" field="" colspan='3' >

{if !$fields.line_items_group.hidden}
{counter name="panelFieldCount" print=false}
<span id="line_items_group" class="sugar_field">{include file="modules/PPT_Contracts/tpls/lineItemsGroupDetails.tpl"}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_LINE_ITEMS' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="line_items"  >

{if !$fields.line_items.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.line_items.name|escape:'html'|url2html|nl2br}">{$fields.line_items.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                    </div>
<div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-2'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FLIGHT_SEARCH' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="" field="" colspan='3' >

{if !$fields.flight_search.hidden}
{counter name="panelFieldCount" print=false}
<span id="flight_search" class="sugar_field">{include file="modules/PPT_Contracts/tpls/flightSearchDetails.tpl"}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FLIGHT' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="flight"  >

{if !$fields.flight.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.flight.name|escape:'html'|url2html|nl2br}">{$fields.flight.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                    </div>
<div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-3'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_START_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="start_date"  >

{if !$fields.start_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.start_date.value) <= 0}
{assign var="value" value=$fields.start_date.default_value }
{else}
{assign var="value" value=$fields.start_date.value }
{/if}
<span class="sugar_field" id="{$fields.start_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_END_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="end_date"  >

{if !$fields.end_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.end_date.value) <= 0}
{assign var="value" value=$fields.end_date.default_value }
{else}
{assign var="value" value=$fields.end_date.value }
{/if}
<span class="sugar_field" id="{$fields.end_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CUSTOMER_SIGNED_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="customer_signed_date"  >

{if !$fields.customer_signed_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.customer_signed_date.value) <= 0}
{assign var="value" value=$fields.customer_signed_date.default_value }
{else}
{assign var="value" value=$fields.customer_signed_date.value }
{/if}
<span class="sugar_field" id="{$fields.customer_signed_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMPANY_SIGNED_DATE' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="company_signed_date"  >

{if !$fields.company_signed_date.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.company_signed_date.value) <= 0}
{assign var="value" value=$fields.company_signed_date.default_value }
{else}
{assign var="value" value=$fields.company_signed_date.value }
{/if}
<span class="sugar_field" id="{$fields.company_signed_date.name}">{$value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='PPT_Contracts'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="assigned_user_name"  >

{if !$fields.assigned_user_name.hidden}
{counter name="panelFieldCount" print=false}

<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>
{/if}

</div>

<div class="inlineEditIcon col-xs-hidden">
{sugar_getimage name="inline_edit_icon.svg" attr='border="0" ' alt="$alt_edit"}
</div>

</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                    </div>
</div>

<div class="panel-content">
<div>&nbsp;</div>








</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    var selectTab = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                    };

                    var selectTabOnError = function(tab) {
                        selectTab(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTab(tab);
                            }
                        });
                    });

                </script>
{/literal}