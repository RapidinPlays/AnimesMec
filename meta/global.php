<?php
error_reporting(0);
define('DATA_FOLDER', '../');
session_start();
$user_id = $_SESSION['user_id'];

$_CASH1 = '68f1dda35fbe76e1162618460667a6ef';
$_CASH2 = 'c0908da0014e7f660854a91a119450f3';
$_CASH3 = '1cfd25639ad7e6ae12d935ab6dd637c9';
$_CASH4 = '33409bf57f5b3b635ea8eab8f2430f8b';
$_CASH5 = 'eaa30060691aed32863ba36ab466e8da';
$_CASH6 = '9a37268afaed634454eb7d6bf3cc8f4e';
$_CASH7 = 'b52dfa172e0200e98674096da6d9cb82';
?>
<meta http-equiv="content-type" content="text/html">
<meta charset="UTF-8">
<title>EC/EDIT</title>
<script src="../js/SC_01APP.js"></script>
<script src="../js/SC_JSAPP.js"></script>
<link rel="stylesheet" href="fire.css">
<link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
<script src="//d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js"></script>
<script>
    // Hook up ACE editor to all textareas with data-editor attribute
    $(function () {
        $('textarea[data-editor]').each(function () {
            var textarea = $(this);
            var mode = textarea.data('editor');
            var editDiv = $('<div>', {
                position: 'absolute',
                width: textarea.width(),
                height: textarea.height(),
                'class': textarea.attr('class')
            }).insertBefore(textarea);
            textarea.css('visibility', 'hidden');
            var editor = ace.edit(editDiv[0]);
            editor.renderer.setShowGutter(false);
            editor.getSession().setValue(textarea.val());
            editor.getSession().setMode("ace/mode/" + mode);
            // editor.setTheme("ace/theme/idle_fingers");
            
            // copy back to textarea on form submit...
            textarea.closest('form').submit(function () {
                textarea.val(editor.getSession().getValue());
            })
        });
    });
</script>