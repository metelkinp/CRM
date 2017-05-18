<?php

function additionalDetailsPPT_SRA($fields)
{
    static $mod_strings;
    global $app_strings;
    if (empty($mod_strings)) {
        global$curent_language;
        $mod_strings = return_module_language($curent_language, 'PPT_SRA');
    }

    $overlib_string = "";

    if (!empty($fields['RATES'])) {
        $data = json_decode(html_entity_decode_utf8($fields['RATES']), true);

        $overlib_string .= "<div>";

        $overlib_string .= "<table width='100%'><thead><tr><th style='text-align: left'>Weight</th>";
        $overlib_string .= "<th style='text-align: left'>Rate</th></tr></thead><tbody>";

        foreach ($data as $k=>$v) {
            $col = "<tr><td align='left'>{$k}</td><td align='left'>{$v}</td></tr>";

            $overlib_string .= $col;
        }

        $overlib_string .= "</tboby></table>";

        $overlib_string .= "</div>";
    }

    return array(
        'fieldToAddTo' => 'RATES_COUNT',
        'string' => $overlib_string,
    );
}