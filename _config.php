<?php
use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
use SilverStripe\Core\Manifest\ModuleLoader;

HtmlEditorConfig::get('cms')->enablePlugins([
    'sslinkphone' => ModuleLoader::getModule('silverstripe-phonify')->getResource('javascript/TinyMCE_sslinkphone_plugin.js')->getRelativePath()
]);