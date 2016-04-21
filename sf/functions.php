<?php

if (!function_exists('autoload_script')) {

    function autoload_script($dir, $root = TRUE) {
        $dir = ($root == TRUE) ? SECO_FORMS_PATH_DOCX . "$dir/" : "$dir/";
        $files = array_diff(scandir($dir), array('..', '.'));
        foreach ($files as $key => $value) {
            if (is_dir($dir . $value)) {
                autoload_script($dir . $value, FALSE);
            } else {
                $info = pathinfo($value);
                if (!empty($info['extension']) && $info['extension'] == "js") {
                    $full_path = $dir . $value;
                    $full_path = str_replace(SECO_FORMS_PATH_DOCX, SECO_FORMS_PATH_HTTP, $full_path);
                    echo "<script type='text/javascript' src='{$full_path}'></script>" . PHP_EOL;
                }
            }
        }
    }

}


if (!function_exists('autoload_style')) {

    function autoload_style($dir, $root = TRUE) {
        $dir = ($root == TRUE) ? SECO_FORMS_PATH_DOCX . "$dir/" : "$dir/";
        $files = array_diff(scandir($dir), array('..', '.'));
        foreach ($files as $key => $value) {
            if (is_dir($dir . $value)) {
                autoload_style($dir . $value, FALSE);
            } else {
                $info = pathinfo($value);
                if (!empty($info['extension']) && $info['extension'] == "css") {
                    $full_path = $dir . $value;
                    $full_path = str_replace(SECO_FORMS_PATH_DOCX, SECO_FORMS_PATH_HTTP, $full_path);
                    echo "<link rel='stylesheet' href='{$full_path}'>" . PHP_EOL;
                }
            }
        }
    }

}