<?php
/**
 * Autoload provided by Composer
 */
require_once (
    realpath(__DIR__ . '/vendor/autoload.php')
);

/**
 * Example Classes
 */
include realpath(__DIR__ . '/HelloWorldClasses.php');

// Use facade as Alias
$aliases = [
    "HelloWorld" => "HelloWorldFacade",
];

// Create aliases
foreach ($aliases as $alias => $abstract)
    class_alias($abstract, $alias);

/**
 * How to use a Facade Class?
 */
// Use normal methods
HelloWorld::hello();
// You can pass arguments too.
HelloWorld::hello("John Doe");
