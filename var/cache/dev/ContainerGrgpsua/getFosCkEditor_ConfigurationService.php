<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.configuration' shared service.

include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Config\\CKEditorConfigurationInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Config\\CKEditorConfiguration.php';

return $this->services['fos_ck_editor.configuration'] = new \FOS\CKEditorBundle\Config\CKEditorConfiguration(['enable' => true, 'async' => false, 'auto_inline' => true, 'inline' => false, 'autoload' => true, 'jquery' => false, 'require_js' => false, 'input_sync' => false, 'base_path' => 'bundles/fosckeditor/', 'js_path' => 'bundles/fosckeditor/ckeditor.js', 'jquery_path' => 'bundles/fosckeditor/adapters/jquery.js', 'default_config' => NULL, 'configs' => [], 'plugins' => [], 'styles' => [], 'templates' => [], 'filebrowsers' => [], 'toolbars' => ['configs' => [], 'items' => []]]);
