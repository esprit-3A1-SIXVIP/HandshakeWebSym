<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_ck_editor.command.installer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Command\\CKEditorInstallerCommand.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\ckeditor-bundle\\src\\Installer\\CKEditorInstaller.php';

$this->services['fos_ck_editor.command.installer'] = $instance = new \FOS\CKEditorBundle\Command\CKEditorInstallerCommand(${($_ = isset($this->services['fos_ck_editor.installer']) ? $this->services['fos_ck_editor.installer'] : ($this->services['fos_ck_editor.installer'] = new \FOS\CKEditorBundle\Installer\CKEditorInstaller())) && false ?: '_'});

$instance->setName('ckeditor:install');

return $instance;
