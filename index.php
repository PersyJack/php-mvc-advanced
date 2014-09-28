<?php

/**
 * A simple PHP MVC skeleton
 *
 * @package php-mvc-advanced
 * @author Panique
 * @link http://www.php-mvc.net
 * @link https://github.com/panique/php-mvc-advanced/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load Composer's auto-loader (necessary, as this autoloader loads the app's core files)
require 'vendor/autoload.php';

// load application config (error reporting etc.)
require 'application/config/config.php';

// run the scss compiler every time index.php is hit (in development, not in production for sure !)
// TODO: build a switch for development/production
SassCompiler::run("public/scss/", "public/css/");

// start the application
$app = new Application();
