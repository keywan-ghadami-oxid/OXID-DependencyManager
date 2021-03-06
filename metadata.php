<?php
$sMetadataVersion = "1.1";

$aModule = array(
    "id"          => "ib_DependencyManager",
    "title"       => "OXID-DependencyManager",
    "description" => "Abhängigkeitsverwaltung für OXID CE/PE/EE",
    "thumbnail"   => "",
    "version"     => "1.1.0",
    "author"      => "Ilya Beliaev",
    "url"         => "http://blog.php-dev.info",
    "email"       => "info@php-dev.info",
    "extend"      => array(
        'oxModule'              => 'ib_DependencyManager/core/ib_DependencyManager_oxModule',
        'oxModuleInstaller'     => 'ib_DependencyManager/core/ib_DependencyManager_oxModuleInstaller',
    ),
    "files"       => array(
        //core-files
        'ib_dependencyManager'              => 'ib_DependencyManager/core/ib_dependencyManager.php',

        //admin-controllers
        'ib_dependencyManager_dependencies' => 'ib_DependencyManager/application/controllers/admin/ib_dependencyManager_dependencies.php',
    ),
    "settings"    => array(
        
    ),
    "templates"   => array(
        //admin
        'admin/tpl/ib_dependencyManager_deps.tpl'     => 'ib_DependencyManager/application/views/admin/tpl/ib_dependencyManager_deps.tpl',
    ),
    "blocks"      => array(),
    "events"      => array(),
);
