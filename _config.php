<?php
use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;

HtmlEditorConfig::get('cms')->enablePlugins([
    'sslinkphone' => basename(__DIR__) . '/javascript/TinyMCE_sslinkphone_plugin.js'
]);